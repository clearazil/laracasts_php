<?php

namespace Core;

class Router
{
    private $routes = [
        'GET' => [],
        'POST' => [],
    ];

    /**
     * @param [string] $file
     * @return Router
     */
    public static function load($file)
    {
        $router = new self();

        require $file;

        return $router;
    }

    /**
     * @param [string] $uri
     * @param [string] $controller
     * @return void
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * @param [string] $uri
     * @param [string] $controller
     * @return void
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * @param [string] $uri
     * @param [string] $requestType
     * @return string
     * @throws \Exception
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new \Exception('No route defined for this URI.');
    }
}
