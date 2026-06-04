<?php

namespace app\controller;

use app\Controller;

class Profile extends Controller
{
    public function get()
    {
        if (!empty($this->app->user)) {
            return $this->view('profile.php');
        }

        return $this->redirect('index.php/sign-in');
    }
}

