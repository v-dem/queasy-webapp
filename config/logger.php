<?php

return [
    [
        'class' => queasy\log\FileSystemLogger::class,
        'path' => QUEASY_ROOT_PATH . 'logs/debug.%s.log',
        'timeLabel' => 'Y-m-d',
        'minLevel' => Psr\Log\LogLevel::INFO
    ], [
        'class' => queasy\log\FileSystemLogger::class,
        'path' => QUEASY_ROOT_PATH . 'logs/debug.full.%s.log',
        'timeLabel' => 'Y-m-d',
        'minLevel' => Psr\Log\LogLevel::DEBUG
    ]
];

