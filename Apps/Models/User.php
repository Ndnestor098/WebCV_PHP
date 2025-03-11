<?php

namespace Apps\Models;

use Database\Database;

class User extends Database {
    public static function get() {
        $conn = (new Database())->conn();

        if ($conn) {
            $query = $conn->query("SELECT * FROM users");

            foreach ($query as $value) {
                echo $value['name'];
            }
        }
    }
}
