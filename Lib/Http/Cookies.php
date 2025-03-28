<?php

namespace Lib\Http;

class Cookies 
{
    public static function set(string $key, mixed $value, int $time = 3600): void
    {
        if(self::has("$key")){
            self::remove($key);
        }

        $value = is_array($value) ? json_encode($value) : $value;

        setcookie($key, $value, time() + $time, "/");
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        if (!isset($_COOKIE[$key])) {
            return $default;
        }
    
        $value = $_COOKIE[$key];
    
        $decoded = json_decode($value, true);
        
        return $decoded ?? $value;
    }

    public static function has(string $key): bool
    {
        return isset($_COOKIE[$key]);
    }

    public static function remove(string $key): void
    {
        setcookie($key, "", time() - 3600, "/", "", true, true);
    }

    public static function flush() {
        foreach ($_COOKIE as $key => $value) {
            if ($key === "session_token" || $key === "PHPSESSID" || $key === "remember_token") {
                continue;
            }

            setcookie($key, "", time() - 3600, "/", "", true, true);
        }
    }

}