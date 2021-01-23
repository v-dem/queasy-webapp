<?php

return array(
    array(
        'class' => 'queasy\log\FileSystemLogger',
        'path' => QUEASY_ROOT_PATH . 'logs' . DIRECTORY_SEPARATOR . 'debug.log',
        'minLevel' => Psr\Log\LogLevel::INFO
    ),
    array(
        'class' => 'queasy\log\FileSystemLogger',
        'path' => QUEASY_ROOT_PATH . 'logs' . DIRECTORY_SEPARATOR . 'debug.full.log',
        'minLevel' => Psr\Log\LogLevel::DEBUG
    )
);

