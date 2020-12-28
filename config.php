<?php

return array(
    'appClass' => 'app\App',
    'requestClass' => 'queasy\http\ServerRequest',
    'loggerClass' => 'queasy\log\Logger',
    'routerClass' => 'queasy\framework\DefaultRouter',
    'db' => array(
        'path' => 'database/queasy.sqlite'
    ),
    'route' => array(
        '/post' => 'app\controller\Message',
        '/list' => 'app\controller\Message',
        '/' => 'app\controller\Home'
    ),
    'logger' => array(
        array(
            'class' => 'queasy\log\FileSystemLogger',
            'path' => __DIR__ . '/logs/debug.log'
        )
    )
);

