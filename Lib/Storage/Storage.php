<?php

namespace Lib\Storage;

class Storage 
{
    protected static $path; // Propiedad estática para la ruta del archivo

    /**
     * Define la ruta de almacenamiento
     *
     * @param string $path Ruta personalizada donde se guardará el archivo
     * @return self Devuelve la instancia para encadenar métodos
     */
    public static function path($path)
    {
        self::$path = getenv("APP_URL") . rtrim($path, "/") . "/";
        return new self;
    }

    /**
     * Guarda un archivo en la ruta definida
     *
     * @param array $file Archivo subido ($_FILES["archivo"])
     * @return string Ruta final donde se guardó el archivo
     */
    public static function store($file)
    {
        // Si no se ha definido una ruta, usar la predeterminada
        self::$path = self::$path ?? getenv("APP_URL") . "Public/assets/images/";

        // Asegura que la carpeta de destino exista
        if (!is_dir(self::$path)) {
            mkdir(self::$path, 0777, true);
        }

        // Validar que el archivo es válido
        if (!isset($file["tmp_name"]) || !is_uploaded_file($file["tmp_name"])) {
            throw new \Exception("El archivo no es válido.");
        }

        // Generar el destino final
        $destination = self::$path . basename($file["name"]);

        $replacePath = getenv("APP_URL") . "Public";

        // Mover el archivo desde tmp a la carpeta destino
        if (move_uploaded_file($file["tmp_name"], $destination)) {
            return preg_replace("#$replacePath#", "", $destination); // Retorna la ruta donde se guardó el archivo
        } else {
            throw new \Exception("Error al mover el archivo.");
        }
    }


    /**
     * Elimina un archivo en la ruta definida
     *
     * @param string $file Nombre del archivo a eliminar
     * @return boolean Retorna true si el archivo fue eliminado, false si no existe.
     */
    public static function delete($file)
    {
        // Ruta donde se encuentra el archivo
        $filePath = getenv("APP_URL") . "Public" . $file;

        // Verifica si el archivo existe antes de eliminarlo
        if (!file_exists($filePath)) {
            throw new \Exception("El archivo no existe: " . $filePath);
        }

        // Intenta eliminar el archivo
        if (unlink($filePath)) {
            return true; // Archivo eliminado con éxito
        } else {
            throw new \Exception("Error al eliminar el archivo: " . $filePath);
        }
    }

}
