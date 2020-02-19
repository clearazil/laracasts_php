<?php

namespace Core;

use Exception;

class App
{
    private static $registry = [];

    /**
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function bind($key, $value)
    {
        self::$registry[$key] = $value;
    }

    /**
     * @param string $key
     * @return void
     */
    public static function get($key)
    {
        if (!array_key_exists($key, self::$registry)) {
            throw new Exception("No {$key} is bound in the container.");
        }

        return self::$registry[$key];
    }
}
