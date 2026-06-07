<?php

use queasy\config\Config;

return [
    'router' => static function($sc) {
        return new queasy\framework\RegexRouter(new Config(QUEASY_ROOT_PATH . 'config/routes.php'));
    },

    'db' => static function($sc) {
        $db = new queasy\db\Db(new Config(QUEASY_ROOT_PATH . 'config/db.php'));
        $db->setLogger($sc->logger);

        return $db;
    },

    'logger' => static function($sc) {
        return new queasy\log\Logger(new Config(QUEASY_ROOT_PATH . 'config/logger.php'));
    },

    'http' => static function($sc) {
        return new queasy\Container\ServiceContainer(new Config(QUEASY_ROOT_PATH . 'config/http.php'));
    },

    'middleware' => static function($sc) {
        return new queasy\framework\MiddlewareHandler(new Config(QUEASY_ROOT_PATH . 'config/middleware.php'), $sc);
    }
];

