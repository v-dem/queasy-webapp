<?php

use queasy\config\Config;

return array(

    // Application

    'viewsPath' => QUEASY_ROOT_PATH . 'views/',

    // Services

    'router' => static function($c) {
        return new queasy\framework\RegexRouter(new Config(QUEASY_ROOT_PATH . 'config/routes.php'));
    },

    'db' => static function($c) {
        return new queasy\db\Db(new Config(QUEASY_ROOT_PATH . 'config/db.php'));
    },

    'logger' => static function($c) {
        return new queasy\log\Logger(new Config(QUEASY_ROOT_PATH . 'config/logger.php'));
    },

    'request' => static function($c) {
        return new queasy\http\ServerRequest();
    },

    'response' => static function($c) {
        return new queasy\http\Response();
    },

    'stream' => static function($c) {
        return new queasy\http\Stream();
    },

    'middleware' => static function($c) {
        return new queasy\framework\MiddlewareHandler(new Config(QUEASY_ROOT_PATH . 'config/middleware.php'), $c);
    }
);

