<?php

return array(
    'app' => array(
        'class' => 'app\App',
        'construct' => array(
            array(
                'value' => array(
                    'requestClass' => 'queasy\http\ServerRequest',
                    'responseClass' => 'queasy\http\Response'
                )
            ),
            array(
                'service' => 'this'
            )
        )
    ),
    'router' => array(
        'class' => 'queasy\framework\RegexRouter',
        'construct' => array(
            array(
                'value' => array(
                    '#/profile/([0-9]+)#' => 'app\controller\Profile',
                    '#/post#' => 'app\controller\Message',
                    '#/list#' => 'app\controller\Message',
                    '#/#' => 'app\controller\Home'
                )
            )
        ),
        'init' => array(
            'setLogger' => array(
                array(
                    'service' => 'logger'
                )
            )
        )
    ),
    'db' => array(
        'class' => 'queasy\db\Db',
        'construct' => array(
            array(
                'value' => array(
                    'connection' => array(
                        'driver' => 'mysql',
                        'host' => 'localhost',
                        'name' => 'test',
                        'user' => 'vitaly',
                        'password' => 'fr5z6x1'
                    ),
                    'fetchMode' => PDO::FETCH_ASSOC
                )
            )
        ),
        'init' => array(
            'setLogger' => array(
                array(
                    'service' => 'logger'
                )
            )
        )
    ),
    'logger' => array(
        'class' => 'queasy\log\Logger',
        'construct' => array(
            array(
                'value' => array(
                    array(
                        'class' => queasy\log\FileSystemLogger::class,
                        'path' => 'debug.full.log',
                        'minLevel' => Psr\Log\LogLevel::WARNING
                    ),
                    array(
                        'class' => queasy\log\ConsoleLogger::class,
                        'minLevel' => Psr\Log\LogLevel::DEBUG
                    )
                )
            )
        )
    )
);

