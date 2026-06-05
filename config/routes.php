<?php

return [
    '~/index\.php/profile/?$~'          => app\controller\Profile::class,
    '~/index\.php/sign-in/?(.*)?$~'     => app\controller\SignIn::class,
    '~/index\.php/sign-up$~'            => app\controller\SignUp::class,
    '~/index\.php\/?$~'                 => app\controller\Home::class,
    '~/\/?$~'                           => app\controller\Home::class
];

