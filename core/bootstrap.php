<?php

use Core\Database\QueryBuilder;
use Core\Database\Connection;
use Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
