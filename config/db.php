<?php

return array(
    'connection' => array(
        'driver' => 'mysql',
        'host' => 'localhost',
        'name' => 'test',
        'password' => 'fr5z6x1'
    ),
    'fetchMode' => PDO::FETCH_ASSOC,
    'queries' => array(
        'getPostsOrdered' => array(
            'sql' => '
                SELECT  *
                FROM    `posts`
                ORDER   BY `publish_date`'
        )
    )
);

