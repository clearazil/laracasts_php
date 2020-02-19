<?php

use Core\Database\QueryBuilder;

/** @var QueryBuilder $db */
$db = $app['database'];

$db->insert('users', [
    'name' => $_POST['name'],
]);

header('Location: /');
