<?php

namespace Lib\Http;

class Route {
    protected static $route = array();

    /**
     * Metodo GET.
     *
     * @param  string $uri  $uri Contiene el string de la uri disponible o para habilitar.
     * @param  callable $callback  $callback Contiene la funcion a ejecutar en la uri.
     *
     */
    public static function get($uri, $callback) {
        $uri = trim($uri, "/");
        self::$route['GET'][$uri] = $callback;

        self::dispatch();
    }

    /**
     * Metodo POST.
     *
     * @param  string $uri  $uri Contiene el string de la uri disponible o para habilitar.
     * @param  callable $callback  $callback Contiene la funcion a ejecutar en la uri.
     *
     */
    public static function post(string $uri, callable $callback) {
        $uri = trim($uri, "/");
        self::$route['POST'][$uri] = $callback;

        self::dispatch();
    }

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
}