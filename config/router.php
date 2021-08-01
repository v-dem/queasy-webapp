<?php

return array(
    '#/profile/([0-9]+)#' => 'app\controller\Profile',
    '#/post#' => 'app\controller\Message',
    '#sign-in/(.+)#' => 'app\controller\SignIn',
    '#sign-in#' => 'app\controller\SignIn',
    '#/#' => 'app\controller\Home'
);

