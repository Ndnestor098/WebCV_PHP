<?php

namespace Lib\Database;

use Exception;

class Database {
    protected static $conn;
    protected $host;
    protected $user;
    protected $password;
    protected $database_name;
    protected $port;

    public function __construct() {
        self::$host = getenv('MYSQL_HOST');
        self::$user = getenv('MYSQL_USER');
        self::$password = getenv('MYSQL_PASSWORD');
        self::$database_name = getenv('MYSQL_DATABASE');

        if (!isset(self::$conn)) {
            try {
                self::$conn = new \PDO("mysql:host=".self::$host.";dbname=".self::$database_name, self::$user, self::$password);
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
