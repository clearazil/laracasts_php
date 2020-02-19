<?php

use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;
use App\Core\App;

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

    return require "app/views/{$viewName}.view.php";
}

/**
 * @param string $path
 * @return void
 */
function redirect($path)
{
    header("Location: /{$path}");
}
