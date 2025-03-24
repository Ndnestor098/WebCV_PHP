<?php

namespace Apps\Middlware;

class Auth 
{
    public static function handle() {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit;
        }
    }
}