<?php

namespace app\controller;

use app\Controller;

class Profile extends Controller
{
    public function get($action = null)
    {
        if (empty($this->app->user)) {
            $this->app->redirect('index.php/sign-in');
        } else {
            return $this->view('profile.php');
        }
    }
}

