<?php

return [
    '~/index\.php/profile/?$~'          => [
                                            'resource' => app\controller\Profile::class,
                                            'middleware' => [ 'auth' ]
    ],

    '~/index\.php/sign-in/?(.*)?$~'     => [
                                            'resource' => app\controller\SignIn::class,
                                            'middleware' => [ 'gohome' ]
    ],

    '~/index\.php/sign-up$~'            => [
                                            'resource' => app\controller\SignUp::class,
                                            'middleware' => [ 'gohome' ]
    ],

    '~/index\.php\/?$~'                 => app\controller\Home::class,
    '~/\/?$~'                           => app\controller\Home::class
];

