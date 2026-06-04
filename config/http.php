<?php

return [
    'serverRequestFactory' => static function($c) {
        return new queasy\http\ServerRequestFactory();
    },

    'serverRequestFromGlobals' => static function($c) {
        return $c->serverRequestFactory->createServerRequestFromGlobals();
    },

    'responseFactory' => static function($c) {
        return new queasy\http\ResponseFactory();
    },

    'streamFactory' => static function($c) {
        return new queasy\http\StreamFactory();
    }
];

