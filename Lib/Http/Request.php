<?php

namespace Lib\Http;

class Request {
    protected array $data;

    public function __construct() {
        $this->data = array_merge($_GET, $_POST);
    }

    /**
     * Obtener un valor específico de la solicitud.
     *
     * @param string $key Clave del dato a obtener.
     * @param mixed $default Valor por defecto si no existe la clave.
     * @return mixed Valor solicitado o el valor por defecto.
     */
    public function input(string $key, mixed $default = null): mixed {
        return $this->data[$key] ?? $default;
    }

    /**
     * Obtener todos los datos de la solicitud.
     *
     * @return array Datos de la solicitud.
     */
    public function all(): array {
        return $this->data;
    }

    /**
     * Verifica si una clave existe en la solicitud.
     *
     * @param string $key Clave a verificar.
     * @return bool `true` si existe, `false` si no.
     */
    public function has(string $key): bool {
        return isset($this->data[$key]);
    }

    /**
     * Obtener el método de la solicitud (GET, POST, PUT, DELETE, etc.).
     *
     * @return string Método en mayúsculas.
     */
    public function method(): string {
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }

    /**
     * Validar parametros en el Request (GET, POST).
     *
     * @return array $array Controla las reglas para validar los parametros GET y POST.
     */
    public function validate(array $array)
    {
        $errors = [];
        foreach ($array as $key => $value) {
            foreach ($value as $rule) {
                if($rule == 'required' && empty($this->input($key))) {
                    $errors[$key] = "El campo $key es requerido";
                }
                if($rule == 'email' && !filter_var($this->input($key), FILTER_VALIDATE_EMAIL)) {
                    $errors[$key] = "El campo $key debe ser un email";
                }
                if($rule == 'numeric' && !is_numeric($this->input($key))) {
                    $errors[$key] = "El campo $key debe ser un número";
                }
                if($rule == 'array' && !is_array($this->input($key))) {
                    $errors[$key] = "El campo $key debe ser un array";
                }
                if($rule == 'file' && !is_file($this->input($key))) {
                    $errors[$key] = "El campo $key debe ser un archivo";
                }
                if($rule == 'string' && !is_string($this->input($key))) {
                    $errors[$key] = "El campo $key debe ser un string";
                }

                $errors['hasErrors'] = count($errors) > 0;
                $errors["http"] = $errors['hasErrors'] ? 400 : 200;

                return $errors['hasErrors'] ? $this->back($errors[$key]) : $errors;

            }
        }
    }

    public function back($attribute)
    {
        Sessions::set('errors', $attribute);
        header("Location: {$_SERVER['HTTP_REFERER']}");    
    }
}
