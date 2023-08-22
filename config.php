<?php

return [
    'database' => [
        'name' =>'company',
        'username' => 'test',
        'password' => 'root',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
        ]
    ]
];