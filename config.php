<?php

define('CONFIG_PATH_PREFIX', QUEASY_ROOT_PATH . 'config' . DIRECTORY_SEPARATOR);

return array(
    'app' => array(
        'class' => 'app\App',
        'construct' => array(
            array(
                'value' => new queasy\config\Config(CONFIG_PATH_PREFIX . 'app.php')
            ),
            array(
                'service' => 'this'
            )
        )
    ),
    'request' => array(
        'class' => 'queasy\http\ServerRequest'
    ),
    'response' => array(
        'class' => 'queasy\http\Response'
    ),
    'router' => array(
        'class' => 'queasy\framework\RegexRouter',
        'construct' => array(
            array(
                'value' => new queasy\config\Config(CONFIG_PATH_PREFIX . 'router.php')
            )
        ),
        'setLogger' => array(
            array(
                'service' => 'logger'
            )
        )
    ),
    'db' => array(
        'class' => 'queasy\db\Db',
        'construct' => array(
            array(
                'value' => new queasy\config\Config(CONFIG_PATH_PREFIX . 'db.php')
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
                'value' => new queasy\config\Config(CONFIG_PATH_PREFIX . 'logger.php')
            )
        )
    )
);

