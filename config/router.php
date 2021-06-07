<?php

return array(
    '~index\.php/profile/([0-9]+)~' => 'app\controller\Profile',
    '~index\.php/post~' => 'app\controller\Message',
    '~index\.php/list~' => 'app\controller\Message',
    '~index\.php/?~' => 'app\controller\Home'
);

