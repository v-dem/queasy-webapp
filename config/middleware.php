<?php

return [
    'auth' => static function($c) {
        return new app\middleware\Auth($c->app());
    },

    'gohome' => static function($c) {
        return new app\middleware\GoHome($c->app());
    }
];

