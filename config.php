<?php

return array(

    // Application

    'viewsPath' => QUEASY_ROOT_PATH . 'views/',

    // Services

    'router' => array(
        'class' => 'queasy\framework\RegexRouter',
        'construct' => array(
            array(
                'value' => new queasy\config\Config(QUEASY_ROOT_PATH . 'config' . DIRECTORY_SEPARATOR . 'routes.php')
            )
        )
    ),

    'db' => array(
        'class' => 'queasy\db\Db',
        'construct' => array(
            array(
                'value' => new queasy\config\Config(QUEASY_ROOT_PATH . 'config' . DIRECTORY_SEPARATOR . 'db.php')
            )
        ),
        'setLogger' => array(
            array(
                'service' => 'logger'
            )
        )
    ),

    'logger' => array(
        'class' => 'queasy\log\Logger',
        'construct' => array(
            array(
                'value' => new queasy\config\Config(QUEASY_ROOT_PATH . 'config' . DIRECTORY_SEPARATOR . 'logger.php')
            )
        )
    ),

    'request' => array(
        'class' => 'queasy\http\ServerRequest'
    ),

    'response' => array(
        'class' => 'queasy\http\Response'
    )
);

