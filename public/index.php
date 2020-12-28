<?php

define('QUEASY_START_TIME', microtime(true));

define('QUEASY_PUBLIC_PATH', __DIR__);
define('QUEASY_ROOT_PATH', __DIR__ . '/../');

require_once '../vendor/autoload.php';

$config = new queasy\config\Config(QUEASY_ROOT_PATH . '/config.php');

require_once '../vendor/v-dem/queasy-framework/src/bootstrap.php';

