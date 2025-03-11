<?php

namespace Database;

use Exception;
use mysqli;

class Database {
    protected static $conn;
    protected $server;
    protected $user;
    protected $password;
    protected $database;
    protected $port;

    public function __construct() {
        $this->server = getenv("DB_HOST") ?: "127.0.0.1";
        $this->user = getenv("DB_USERNAME") ?: "root";
        $this->password = getenv("DB_PASSWORD") ?: "";
        $this->database = getenv("DB_DATABASE") ?: "web";
        $this->port = getenv("DB_PORT") ?: "3306"; 

        if (!isset(self::$conn)) {
            self::$conn = new mysqli($this->server, $this->user, $this->password, $this->database, $this->port);

            // Verificar errores de conexión
            if (self::$conn->connect_error) {
                throw new Exception("Connection error: " . self::$conn->connect_error);
            }
        }
    }

    public function __destruct() {
        if (isset(self::$conn)) {
            self::$conn->close();
        }
    }

    public function conn(){
        return self::$conn;
    }

    public function config(){
        return "Connection: " . getenv("DB_CONNECTION") .
               " <br>Server Name: " . getenv("DB_HOST") . 
               " <br>Port: " . getenv("DB_PORT") .
               " <br>Database: " . getenv("DB_DATABASE") .
               " <br>User Name: " . getenv("DB_USERNAME") . 
               " <br>Password: " . getenv("DB_PASSWORD");
    }    
}