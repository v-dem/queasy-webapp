<?php

return [
    '~/index\.php/profile/?$~'          => [
                                            'resource' => app\controller\Profile::class,
                                            'middleware' => [ 'sessionuser', 'auth' ]
    ],

    '~/index\.php/sign-in/?(.*)?$~'     => [
                                            'resource' => app\controller\SignIn::class,
                                            'middleware' => [ 'sessionuser', 'gohome' ]
    ],

    '~/index\.php/sign-up$~'            => [
                                            'resource' => app\controller\SignUp::class,
                                            'middleware' => [ 'sessionuser', 'gohome' ]
    ],

    '~/index\.php\/?$~'                 => [
                                            'resource' => app\controller\Home::class,
                                            'middleware' => [ 'sessionuser' ]
    ],

    '~/\/?$~'                           => [
                                            'resource' => app\controller\Home::class,
                                            'middleware' => [ 'sessionuser' ]
    ]
];

