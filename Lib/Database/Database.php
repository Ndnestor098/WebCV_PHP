<?php

namespace Database;

class Database {
    protected static $conn;

    public function __construct() {
        $this->conn = "Hola";
    }

    public static function getConn(){
        echo self::$conn;
    }
}