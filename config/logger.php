<?php

return array(
    array(
        'class' => 'queasy\log\FileSystemLogger',
        'path' => QUEASY_ROOT_PATH . 'logs/debug.%s.log',
        'timeLabel' => 'Y-m-d',
        'minLevel' => Psr\Log\LogLevel::INFO
    ),
    array(
        'class' => 'queasy\log\FileSystemLogger',
        'path' => QUEASY_ROOT_PATH . 'logs/debug.full.%s.log',
        'timeLabel' => 'Y-m-d',
        'minLevel' => Psr\Log\LogLevel::DEBUG
    )
);

