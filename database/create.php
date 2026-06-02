<?php

require_once __DIR__ . '/../vendor/autoload.php';

$db = new queasy\db\Db([
    'connection' => [
        'path' => __DIR__ . '/database.sqlite'
    ]
]);

$db('
    CREATE TABLE `users` (
        `id`            integer primary key,
        `role_id`       integer,
        `name`          text not null unique,
        `password_hash` text not null
    )'
);

$db('
    CREATE TABLE `user_roles` (
        `id`            integer primary key,
        `name`          text not null unique
    )'
);

$db->user_roles[] = [
    [ 'id' => 1, 'name' => 'User' ],
    [ 'id' => 2, 'name' => 'Admin' ],
];

$db->users[] = [
    'id'            => 1,
    'role_id'       => 2,
    'name'          => 'admin',
    'password_hash' => password_hash('gfhjkm', PASSWORD_DEFAULT)
];

