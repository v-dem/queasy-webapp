<?php

define('QUEASY_START_TIME', microtime(true));

define('QUEASY_PUBLIC_PATH', __DIR__ . (DIRECTORY_SEPARATOR === substr(__DIR__, strlen(__DIR__) - 1, 1)? '': DIRECTORY_SEPARATOR));
define('QUEASY_ROOT_PATH', QUEASY_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR);
define('QUEASY_CONFIG_PATH', QUEASY_ROOT_PATH . 'config.php');

require_once sprintf('..%1$svendor%1$sautoload.php', DIRECTORY_SEPARATOR);

$config = new queasy\config\Config(QUEASY_CONFIG_PATH);

$app = new app\App($config);
echo $app->run();

$app->logger->debug('Execution time: ' . (microtime(true) - QUEASY_START_TIME));

