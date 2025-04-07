<?php

namespace Lib\Database;

use Exception;

class Database {
    protected static $conn;

    public function __construct() {
        $host = getenv('MYSQL_HOST');
        $user = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');
        $database = getenv('MYSQL_DATABASE');

        if (!isset(self::$conn)) {
            try {
                self::$conn = new \PDO("mysql:host=$host;dbname=$database", $user, $password);
                self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                throw new \Exception("Connection error: " . $e->getMessage());
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
