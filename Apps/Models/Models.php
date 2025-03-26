<?php

namespace Apps\Models;

use Exception;
use Lib\Database\Database;

class Models {
    protected static $database;
    protected static $conn;
    protected static $query;
    protected static $table;

    protected static function init() 
    {
        if (!isset(self::$database)) {
            self::$database = new Database();
            self::$conn = self::$database->conn();

            if (!self::$conn){
                throw new Exception("Error Connection");
            }
        }

        self::$table = strtolower(basename(get_called_class())) . "s";
    }

    protected static function setQuery() 
    {
        if (isset(self::$query)) { 
            return self::$conn->query(self::$query);
        }
        
        return false; 
    }

    public static function get() 
    {
        self::init();

        $table = self::$table;

        self::$query = "SELECT * FROM $table";

        $result = self::setQuery(); 

        if ($result) {
            return self::convertObject($result);
        } else {
            echo "Error en la consulta.";
            return null;
        }
    }

    public static function first($field = "id", $value = 1)  
    {
        self::init();

        $table = self::$table;

        self::$query = "SELECT * FROM $table WHERE $field = $value LIMIT 1";

        $result = self::setQuery(); 

        if ($result) {
            return self::convertObject($result, true);
        } else {
            echo "Error en la consulta.";
            return null;
        }
    }

    protected static function convertObject($array, $first = false)
    {
        $data = [];

        foreach ($array as $row) { 
            $obj = new \stdClass();  
            foreach ($row as $key => $value) {
                $obj->$key = is_array($value) ? json_decode(json_encode($value)) : $value;
            }

            if ($first) {
                return $obj; 
            } else {
                $data[] = $obj;
            }
        }

        return $data;
    }

    public static function create($row, $value) 
    {
        self::init();

        $table = self::$table;

        $row = implode(", ", $row);
        $value = "'" . implode("', '", $value) . "'";

        self::$query = "INSERT INTO $table ($row) VALUES ($value)";

        $result = self::setQuery(); 

        if ($result) {
            return self::convertObject($result);
        } else {
            echo "Error en la consulta.";
            return null;
        }
    }

}
