<?php

namespace Http;

class Route {
    protected static $route = array();

    public static function get($uri, $callback) {
        self::$route['GET'][$uri] = $callback;
    }

    public static function post($uri, $callback) {
        self::$route['POST'][$uri] = $callback;
    }
}