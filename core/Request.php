<?php

namespace Core;

class Request
{
    /**
     * @return string
     */
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}
