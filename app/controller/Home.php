<?php

namespace app\controller;

use app\Controller;

class Home extends Controller
{
    protected $viewPath = 'home.php';

    public function get()
    {
        if (isset($this->get['logout'])) {
            $this->app->logout();
        }

        return $this->view->html();
    }
}

