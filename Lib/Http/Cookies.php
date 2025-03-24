<?php

namespace Lib\Http;

class Cookies 
{
    public static function set(string $key, mixed $value, int $time = 3600): void
    {
        setcookie($key, $value, time() + $time, "/");
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        return $_COOKIE[$key] ?? $default;
    }

    public static function has(string $key): bool
    {
        return isset($_COOKIE[$key]);
    }

    public static function remove(string $key): void
    {
        setcookie($key, "", time() - 3600, "/");
    }
}