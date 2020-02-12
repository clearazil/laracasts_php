<?php

use Database\QueryBuilder;
use Core\Router;
use Core\Request;

/** @var QueryBuilder $database */
require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
