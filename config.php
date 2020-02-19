<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'app',
        'password' => 'password',
        'connection' => 'mysql:host=db',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
];
