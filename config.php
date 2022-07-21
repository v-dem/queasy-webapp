<?php

use queasy\config\Config;

return array(

    // Application

    'viewsPath' => QUEASY_ROOT_PATH . 'views/',

    // Services

    'router' => array(
        'class' => 'queasy\framework\RegexRouter',
        'construct' => array(
            array(
                'value' => new Config(QUEASY_ROOT_PATH . 'config/routes.php')
            )
        )
    ),

    'db' => array(
        'class' => 'queasy\db\Db',
        'construct' => array(
            array(
                'value' => new Config(QUEASY_ROOT_PATH . 'config/db.php')
            )
        )
    ),

    'logger' => array(
        'class' => 'queasy\log\Logger',
        'construct' => array(
            array(
                'value' => new Config(QUEASY_ROOT_PATH . 'config/logger.php')
            )
        )
    ),

    'request' => array(
        'class' => 'queasy\http\ServerRequest'
    ),

    'response' => array(
        'class' => 'queasy\http\Response'
    ),

    'stream' => array(
        'class' => 'queasy\http\Stream'
    ),

    'middleware' => array(
        'class' => 'queasy\framework\MiddlewareHandler',
        'construct' => array(
            array(
                'value' => new Config(QUEASY_ROOT_PATH . 'config/middleware.php')
            ),
            array(
                'service' => 'this'
            ),
        )
    )
);

