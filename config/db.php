<?php

return [
    'connection' => [
        'dsn' => 'sqlite:' . QUEASY_ROOT_PATH . 'database/database.sqlite'
    ],
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
];

