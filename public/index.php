<?php

define('QUEASY_START_TIME', isset($_SERVER['REQUEST_TIME_FLOAT']) ? $_SERVER['REQUEST_TIME_FLOAT'] : microtime(true));
define('QUEASY_PUBLIC_PATH', __DIR__ . DIRECTORY_SEPARATOR);
define('QUEASY_ROOT_PATH', QUEASY_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR);
define('QUEASY_CONFIG_PATH', QUEASY_ROOT_PATH . 'config.php');
define('QUEASY_VENDOR_PATH', QUEASY_ROOT_PATH . 'vendor/');

require_once QUEASY_VENDOR_PATH . 'autoload.php';

$config = new queasy\config\Config(QUEASY_CONFIG_PATH);

$app = new app\App($config);
$app->logger->debug($_SERVER);

echo $app->handle($app->http->serverRequestFromGlobals);

$app->logger->debug('Execution time: ' . (microtime(true) - QUEASY_START_TIME));

