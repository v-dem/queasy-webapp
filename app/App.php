<?php

namespace app;

use app\model\User;

use queasy\framework\App as BaseApp;

class App extends BaseApp
{
    private $user;

    public function __construct($config)
    {
        parent::__construct($config);

        session_start();

        $this->user = isset($_SESSION['user'])
            ? $_SESSION['user']
            : new User();
    }

    public function user()
    {
        return $this->user;
    }

    public function signIn($user)
    {
        
        $_SESSION['user'] = $this->user = $user;
    }

    public function logout()
    {
        unset($_SESSION['user']);

        $this->user = new User();
    }
}

