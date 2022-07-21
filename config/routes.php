<?php

return array(
    '~/index\.php/profile/?$~' => 'app\controller\Profile',
    '~/index\.php/sign-in/?(.*)?$~' => 'app\controller\SignIn',
    '~/index\.php/sign-up$~' => 'app\controller\SignUp',
    '~/index\.php\/?$~' => 'app\controller\Home',
    '~/\/?$~' => 'app\controller\Home'
);

