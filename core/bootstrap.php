<?php

use Core\Database\QueryBuilder;
use Core\Database\Connection;
use Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

/**
 * Display a view
 *
 * @param string $viewName
 * @param array $data
 * @return void
 */
function view($viewName, array $data = [])
{
    extract($data);

    return require "views/{$viewName}.view.php";
}

/**
 * @param string $path
 * @return void
 */
function redirect($path)
{
    header("Location: /{$path}");
}
