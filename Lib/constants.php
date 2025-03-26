<?php

use Lib\Http\Route;
use Lib\Http\Sessions;

/**
 * Renderiza una vista desde la carpeta "Resource/View".
 *
 * @param string $file Nombre del archivo de la vista (sin extensión).
 * @param array $data Datos que se pasarán a la vista en forma de variables.
*/
function render(string $file, array $data = []) {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = json_decode(json_encode($value));
        }
    }

    extract($data);

    require_once "../Resource/View/" . $file . ".php";
}

/**
 * Renderiza un componente desde la carpeta "Resource/View/Components".
 *
 * @param string $file Nombre del archivo del componente (sin extensión).
*/
function components(string $file, ...$data) {
    if (!empty($data)) {
        foreach ($data as $value) {
            extract($value);
        }
    }

    require_once "../Resource/View/Components/" . $file . ".php";
}

/**
 * Renderiza un layout desde la carpeta "Resource/View/Components"
 * e inserta contenido en la posición exacta.
 *
 * @param string $file Nombre del archivo del layout (sin extensión).
 * @param callable $content Contenido dinámico a insertar.
 */
function layout(string $file, callable $content) {
    ob_start(); 
    $content(); // Captura el contenido dinámico
    $GLOBALS["__content"] = ob_get_clean(); // Lo guarda en una variable global

    require_once "../Resource/View/Components/" . $file . ".php";
}



/**
 * Gestiona la disponibilidad y búsqueda de rutas URI.
 *
 * @param string $name nombre solicitado para determinar si hay una ruta definida.
*/
function routes(string $name, array $array = []) {
    echo Route::routes($name, $array);
}

/**
 * Gestiona los errores y muestra un error en pantalla.
 *
 * @param string $error mensaje de error para mostrar en pantalla.
*/
function displayError($error) {
    ob_end_clean(); 

    ob_start();

    require_once __DIR__ . "/Error/Error.php";

    ob_end_flush();

    exit(); 
}

/**
 * Busca si hay errores, en caso de encontrar imprime el mensaje, caso contrario retorna false.
 *
 * @param string $key nombre de la variable a buscar en los errores.
*/
function errors($key) {
    $array = Sessions::get("errors");

    echo $array ? $array[$key] : false;
}

/**
 * Comprueba si hay errores, si hay retorna true caso contrario retorna false.
 *
 * @param string $key nombre de la variable a buscar en los errores.
*/
function hasError($key) {
    $array = Sessions::get("errors");
    
    return $array && isset($array[$key]) ? true : false;
}

/**
 * Devuelve los ultimos valores usados en el ultimo formulario.
 *
 * @param string $key nombre de la variable a buscar en los que se han guardado.
*/
function old($key) {
    $array = Sessions::get("old");
    
    echo $array ? $array[$key] : false;
}

/**
 * Rederige hacia una pagina especificada.
 *
 * @param string $route ruta o path donde rediregir.
*/
function redirect($route) {
    header("Location: " . $route);
    exit();
}
