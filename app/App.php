<?php

namespace app;

use queasy\framework\App as BaseApp;

class App extends BaseApp
{
    public $user;

    public function init()
    {
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

    public function redirect($path = '')
    {
        header('Location: ' . preg_replace('/index\.php.*/', '', $this->request->getRequestTarget()) . $path);
    }
}

