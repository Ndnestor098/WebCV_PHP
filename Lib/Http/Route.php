<?php

namespace Lib\Http;

class Route {
    protected static $route = array();
    protected static $routeNames = array();
    protected static $lastUri;

    public static function run() {
        self::dispatch();
    }

    /**
     * Metodo GET.
     *
     * @param  string $uri  $uri Contiene el string de la uri disponible o para habilitar.
     * @param  callable $callback  $callback Contiene la funcion a ejecutar en la uri.
     *
     */
    public static function get($uri, $callback) {
        self::$lastUri = $uri;
        
        $uri = trim($uri, "/");
        
        self::$route['GET'][$uri] = $callback;

        return new self;
    }
    
    /**
     * Metodo POST.
     *
     * @param  string $uri  $uri Contiene el string de la uri disponible o para habilitar.
     * @param  callable $callback  $callback Contiene la funcion a ejecutar en la uri.
     *
     */
    public static function post(string $uri, callable $callback) {
        self::$lastUri = $uri;
        
        $uri = trim($uri, "/");
        
        self::$route['POST'][$uri] = $callback;
        
        return new self;
    }

    /**
     * Ejecuta las funciones de los callback guardados cuando se accede a la ruta correspondiente.
     *
     */
    public static function dispatch() {
        $uri = $_SERVER["REQUEST_URI"];
        $uri = trim($uri, "/");
        $method = $_SERVER["REQUEST_METHOD"];

        foreach (self::$route[$method] as $route => $callback) {
            if($route == $uri){
                $callback();
                return;
            }
        }
    }

    /**
     * Metodo name para asignar un nombre a la ruta.
     *
     * @param  string $name  Nombre de la ruta.
     * @return void
     */
    public function name($name) {
        self::$routeNames[$name] = self::$lastUri;
        return $this;
    }

    /**
     * Obtiene la URI asociada a un nombre de ruta.
     *
     * @param string $name Nombre de la ruta.
     * @return string Retorna la URI si existe, o un mensaje de error si no está definida.
     */
    public static function routes($name) {
        return self::$routeNames[$name] ?? displayError("The specified \"$name\" path was not found");
    }
}