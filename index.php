<?php

use Database\QueryBuilder;

/** @var QueryBuilder $database */
$database = require 'bootstrap.php';
$tasks = $database->selectAll('todos');

require 'index.view.php';
