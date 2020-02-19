<?php

use Core\App;
use Core\Database\QueryBuilder;

/** @var QueryBuilder $db */
$db = App::get('database');

$db->insert('users', [
    'name' => $_POST['name'],
]);

header('Location: /');
