<?php

namespace app;

use queasy\framework\App as BaseApp;

class App extends BaseApp
{
    public $user;

    public function __construct($config)
    {
        parent::__construct($config);

        session_start();

        if (isset($_SESSION['user'])) {
            $this->user = $_SESSION['user'];
        }
    }

    public function signIn($user)
    {
        $_SESSION['user'] = $user;
    }

    public function logout()
    {
        unset($_SESSION['user']);
    }
}

