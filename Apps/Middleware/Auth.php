<?php

namespace Apps\Middleware;

use Lib\Auth\Auth as Authenticate;

class Auth 
{
    public static function handle() {
        if (!Authenticate::check()) {
            redirect(routes("home"));
        }
    }
}
