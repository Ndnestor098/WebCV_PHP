<?php

namespace Lib\Database;

use Exception;

class Database {
    protected static $conn;
    protected $server;
    protected $user;
    protected $password;
    protected $database_name;
    protected $port;

    public function __construct() {
        $this->server = getenv("DB_HOST") ?: "127.0.0.1";
        $this->user = getenv("DB_USERNAME") ?: "root";
        $this->password = getenv("DB_PASSWORD") ?: "";
        $this->database_name = getenv("DB_DATABASE") ?: "web";
        $this->port = getenv("DB_PORT") ?: "3306"; 

        if (!isset(self::$conn)) {
            self::$conn = new mysqli($this->server, $this->user, $this->password, $this->database_name, $this->port);
 
            // Verificar errores de conexión
            if (self::$conn->connect_error) {
                throw new Exception("Connection error: " . self::$conn->connect_error);
            }
        }
    }

    // El método __destruct no necesita hacer nada con la conexión en PDO
    public function __destruct() {
        // No se necesita cerrar la conexión manualmente en PDO
    }

    public function conn(){
        return self::$conn;
    }
}
