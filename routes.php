<?php

use Core\Router;

/** @var Router $router */
$router->get('', 'Controllers\PagesController@home');
$router->get('about', 'Controllers\PagesController@about');
$router->get('about/culture', 'Controllers\PagesController@aboutCulture');
$router->get('contact', 'Controllers\PagesController@contact');
$router->get('users', 'Controllers\UsersController@index');
$router->post('users', 'Controllers\UsersController@store');
