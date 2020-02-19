<?php

use Core\App;
use Core\Database\QueryBuilder;

/** @var QueryBuilder $db */
$db = App::get('database');

$users = $db->selectAll('users');

require 'views/index.view.php';
