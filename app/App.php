<?php

namespace app;

use app\model\User;

use queasy\framework\App as BaseApp;

use InvalidArgumentException;

class App extends BaseApp
{
    public function signIn(User $user)
    {
        if (!$user) {
            throw new InvalidArgumentException('User cannot be null.');
        }

        $_SESSION['userKey'] = $user->id;
    }

    public function logout()
    {
        unset($_SESSION['userKey']);
    }
}

