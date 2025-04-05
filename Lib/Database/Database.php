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
        // Usar el nombre de la base de datos que esté definido en el entorno, por defecto "database.sqlite"
        $this->database_name = getenv("DB_DATABASE") ?: "database.sqlite"; 

        if (!isset(self::$conn)) {
            // Conectar usando PDO a SQLite
            $dsn = "sqlite:" . __DIR__ . "/" . $this->database_name;
            try {
                self::$conn = new \PDO($dsn);
                self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                throw new Exception("Connection error: " . $e->getMessage());
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
