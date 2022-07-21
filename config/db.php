<?php

return array(
    'connection' => array(
        'path' => QUEASY_ROOT_PATH . 'database/database.sqlite'
    ),
    'options' => array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    )
);

