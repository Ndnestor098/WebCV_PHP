<?php

use Lib\Http\Route;

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
function components(string $file) {
    $file = str_replace(".", "/", $file);
    $file = strtoupper($file);
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
