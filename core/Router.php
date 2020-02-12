<?php

namespace Core;

class Router
{
    private $routes;

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
     * @param [array] $routes
     * @return void
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * @param [string] $uri
     * @return string
     * @throws \Exception
     */
    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new \Exception('No route defined for this URI.');
    }
}
