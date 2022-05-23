<?php

require_once __DIR__ . '/../vendor/autoload.php';

$db = new queasy\db\Db(['connection' => ['path' => __DIR__ . '/database.sqlite']]);

$db('
    CREATE  TABLE `users` (
            `id`            integer primary key,
            `role_id`       integer,
            `name`          text not null unique,
            `password_hash` text not null
    )'
);

$db('
    CREATE  TABLE `user_roles` (
            `id`            integer primary key,
            `name`          text not null unique
    )'
);

$db('
    INSERT  INTO `user_roles` (`id`, `name`)
    VALUES  (1, \'User\'),
            (2, \'Admin\')');

$db('
    INSERT  INTO `users` (`id`, `role_id`, `name`, `password_hash`)
    VALUES  (1, 2, \'admin\', :password_hash)',
    [
        'password_hash' => password_hash('gfhjkm', PASSWORD_DEFAULT)
    ]
);

