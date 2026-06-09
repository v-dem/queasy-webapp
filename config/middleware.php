<?php

return [
    'sessionuser' => static function($c) {
        return new app\middleware\SessionUser($c->app());
    },

    'auth' => static function($c) {
        return new app\middleware\Auth($c->app());
    },

    'gohome' => static function($c) {
        return new app\middleware\GoHome($c->app());
    }
];

