<?php

include 'vendor/autoload.php';

use App\Core\Database\QueryBuilder;
use App\Core\{Router, Request};

/** @var QueryBuilder $database */
require 'core/bootstrap.php';

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
