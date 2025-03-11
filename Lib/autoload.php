<?php

spl_autoload_register(function ($class) {
    $file = getenv("APP_URL") . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        die("Error: No se pudo cargar la clase $class. Archivo no encontrado: $file");
    }
});
