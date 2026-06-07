<?php

namespace app\controller;

use app\Controller;
use app\Redirect;

class SignUp extends Controller
{
    protected $viewPath = 'sign-up.php';

    public function get($action = null)
    {
        return $this->view->html();
    }

    public function post()
    {
        // Not implemented
        return $this->redirect->path();
    }
}

