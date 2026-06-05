<?php

namespace app\controller;

use app\Controller;
use app\Redirect;

class SignUp extends Controller
{
    public function get($action = null)
    {
        if (empty($this->app->user)) {
            return $this->view('sign-up.php');
        } else {
            return $this->redirect->path();
        }
    }

    public function post()
    {
        if (empty($this->app->user)) {
            return $this->redirect->path();
        } else {
            return $this->redirect->path();
        }
    }
}

