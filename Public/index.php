<?php

use Database\Database;

require_once "../Lib/autoload.php";
require_once "../Lib/env.php";

$database = new Database;

$conn = $database->conn();

if($conn){
    $query = $conn->query("SELECT * FROM users");

    foreach ($query as $value) {
        echo $value['name'];
    }
}