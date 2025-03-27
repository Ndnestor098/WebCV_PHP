<?php

namespace Lib\Http;

use Exception;

use function PHPSTORM_META\type;

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
        
        // Si el callback es un string (nombre de clase)
        if (is_string($callback) && class_exists($callback)) {
            $class = new $callback();
            $callback = [ $class, "index" ];
        } 
        
        // Si el callback es un array ['Clase', 'metodo']
        elseif (is_array($callback) && class_exists($callback[0])) {
            $class = new $callback[0]();
            $callback = [$class, $callback[1]]; // Guardamos referencia a la función
        }

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
    public static function post(string $uri, $callback) {
        self::$lastUri = $uri;

        // Si el callback es un string (nombre de clase)
        if (is_string($callback) && class_exists($callback)) {
            $class = new $callback();
            $callback = [ $class, "index" ];
        }  
        
        // Si el callback es un array ['Clase', 'metodo']
        elseif (is_array($callback) && class_exists($callback[0])) {
            $class = new $callback[0]();
            $callback = [$class, $callback[1]]; // Guardamos referencia a la función
        }
        
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
        $uri = parse_url($uri, PHP_URL_PATH); 
        $uri = trim($uri, "/");
        $method = $_SERVER["REQUEST_METHOD"];

        $routes = self::$route[$method] ?? [];
        
        foreach ($routes as $route => $callback) {
            if (strpos($route, ":") !== false) {
                $route = preg_replace("#:[a-zA-Z]+#", "([a-zA-Z0-9-_]+)", $route);
            }
            
            if (preg_match("#^$route$#", $uri, $matches)) {
                $params = array_slice($matches, 1);
    
                $request = new Request();
    
                $callback($request, ...$params);
                return;
            }
        }
        
        displayError("Route not found.");
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
    public static function routes($name, $array = []) {
        $route = self::$routeNames[$name];

        if(strpos($route, ":") !== false){
            foreach($array as $key => $value){
                if(preg_match("#:$key#", $route)){
                    $route = preg_replace("#:$key#", $value, $route);
                } else {
                    displayError("There is no such parameter as \"" . $key . "\"");
                }
            }
        }

        if(preg_match("#:[a-zA-Z]+#", $route)){
            displayError("There are missing parameters to add to the route \"" . $name . "\"");
        }



        return $route ?? displayError("The specified \"$name\" path was not found");
    }


    /**
     * Ejecucion de middleware.
     *
     * @param string|array $name Nombre de la clase o clases para ejecutar.
     * @return self
     */
    public static function middleware($name) 
    {
        if(self::$lastUri !== $_SERVER["REQUEST_URI"]) {
            return new self;
        }

        // Si es un array de middlewares
        if(is_array($name)) {
            foreach ($name as $middleware) {
                $middlewareClass = (strpos($middleware, "Apps\Middleware") !== false) 
                    ? $middleware 
                    : "Apps\\Middleware\\" . ucwords($middleware);
                
                if (!class_exists($middlewareClass)) {
                    // Aquí puedes lanzar una excepción si el middleware no existe
                    throw new Exception("Middleware no encontrado: $middlewareClass");
                }
                
                $middlewareClass::handle();
            }
            return new self; // Si todo pasó bien, continua.
        }
    
        // Si es solo un middleware
        $middlewareClass = (strpos($name, "Apps\Middleware") !== false) 
            ? $name 
            : "Apps\\Middleware\\" . ucwords($name);
        
        if (!class_exists($middlewareClass)) {
            // Si el middleware no existe, lanza un error
            throw new Exception("Middleware no encontrado: $middlewareClass");
        }
    
        $middlewareClass::handle();
    
        return new self;
    }
    
}