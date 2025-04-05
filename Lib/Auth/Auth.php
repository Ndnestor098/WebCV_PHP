<?php

namespace Lib\Auth;

use Apps\Models\User;
use Lib\Http\Cookies;
use Lib\Http\Sessions;

class Auth 
{
    public static function check() : bool
    {
        if(Sessions::has("session_remember")){
            $remember = Sessions::get("session_remember");

            $user = User::where("session_remember", $remember);

            return ($user && $user[0]->session_remember === $remember) ? true : false;
        }

        $session = Sessions::get("session_token");

        $user = User::where("session_token", $session);

        return ($user && $user[0]->session_token === $session) ? true : false;
    }

    public static function attempt($email, $password, $remember = false) : bool
    {
        $user = User::where("email", $email);

        if($user && password_verify($password, $user[0]->password)) {
            Sessions::regenerate();

            $token = bin2hex(random_bytes(16));
            
            User::update("session_token", $token);
            Sessions::set("session_token", $token);

            if($remember){
                $token = bin2hex(random_bytes(16));
                User::update("session_remember", $token);
                Cookies::set("session_remember", $token, 259200);            
            }

            Sessions::remove("old");
            Sessions::remove("errors");

            return true;
        }

        return false;
    }

    public static function logout() {
        if(Cookies::has("session_remember")){
            User::update("session_remember", null);

            Cookies::remove("session_remember");

            return true;
        }

        User::update("session_token", null);
        Cookies::remove("session_token");

        Sessions::regenerate();

        return true;
    }
}