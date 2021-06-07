<?php

define('QUEASY_START_TIME', isset($_SERVER['REQUEST_TIME_FLOAT'])
    ? $_SERVER['REQUEST_TIME_FLOAT']
    : microtime(true));

define('QUEASY_PUBLIC_PATH', __DIR__ . (DIRECTORY_SEPARATOR === __DIR__{strlen(__DIR__) - 1})? '': DIRECTORY_SEPARATOR);
define('QUEASY_ROOT_PATH', QUEASY_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR);
define('QUEASY_CONFIG_PATH', QUEASY_ROOT_PATH . 'config.php');

require_once sprintf('%1$s%2$svendor%2$sautoload.php', QUEASY_ROOT_PATH, DIRECTORY_SEPARATOR);

$config = new queasy\config\Config(QUEASY_CONFIG_PATH);

$serviceContainer = new queasy\framework\container\ServiceContainer($config);
echo $serviceContainer->app->run();

$serviceContainer->logger->debug('Execution time: ' . (microtime(true) - QUEASY_START_TIME));

