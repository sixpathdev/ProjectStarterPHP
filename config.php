<?php

return [
    'dbinfo' => [
        'name' => 'testdemo',
        'username' => 'root',
        'password' => '1smartcoded',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
