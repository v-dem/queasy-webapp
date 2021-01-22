<?php

return array(
    array(
        'class' => queasy\log\FileSystemLogger::class,
        'path' => QUEASY_ROOT_PATH . 'logs/debug.log',
        'minLevel' => Psr\Log\LogLevel::INFO
    ),
    array(
        'class' => queasy\log\FileSystemLogger::class,
        'path' => QUEASY_ROOT_PATH . 'logs/debug.full.log',
        'minLevel' => Psr\Log\LogLevel::DEBUG
    ),
);

