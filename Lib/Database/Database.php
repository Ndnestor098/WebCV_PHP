<?php

namespace Lib\Database;

use Exception;
use PDOException;

class Database {
    protected static $conn;
    protected $database_name;

    public function __construct() {
        // Usar el nombre de la base de datos que esté definido en el entorno, por defecto "database.sqlite"
        $this->database_name = getenv("DB_DATABASE") ?: "database.sqlite"; 

        if (!isset(self::$conn)) {
            // Conectar usando PDO a SQLite
            $dsn = "sqlite:" . __DIR__ . "/" . $this->database_name;
            try {
                self::$conn = new PDO($dsn);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new Exception("Connection error: " . $e->getMessage());
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