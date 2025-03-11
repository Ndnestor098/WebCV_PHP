<?php

namespace Apps\Models;

use Exception;
use Lib\Database\Database;

class User extends Database {
    
    protected static $database;
    protected static $conn;
    protected static $query;

    protected static function init() {
        if (!isset(self::$database)) {
            self::$database = new Database();
            self::$conn = self::$database->conn();

            if (!self::$conn){
                throw new Exception("Error Connection");
            }
        }
    }

    protected static function setQuery() {
        if (isset(self::$query)) { 
            return self::$conn->query(self::$query);
        }
        return false; 
    }

    public static function get() {
        self::init();

        self::$query = "SELECT * FROM users";

        $result = self::setQuery(); // ✅ Guardamos el resultado de la consulta

        if ($result) { // ✅ Verificamos que la consulta se ejecutó correctamente
            foreach ($result as $row) {
                echo $row['name'] . "<br>";
            }
        } else {
            echo "Error en la consulta.";
        }
    }
}
