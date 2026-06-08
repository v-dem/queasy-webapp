<?php

namespace app;

use app\model\User;

use queasy\framework\App as BaseApp;

use InvalidArgumentException;

class App extends BaseApp
{
    protected User $user;

    public function __construct($config)
    {
        parent::__construct($config);

        session_start();

        if (!isset($_SESSION['user'])) {
            $this->user = new User();

            $_SESSION['user'] = $this->user;
        } else {
            $this->user = $_SESSION['user'];
        }
    }

    public function user()
    {
        return $this->user;
    }

    public function signIn(User $user)
    {
        if (!$user) {
            throw new InvalidArgumentException('User cannot be null.');
        }

        $_SESSION['user'] = $this->user = $user;
    }

    public function logout()
    {
        $this->user->logout();
    }
}

