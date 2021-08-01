<?php

namespace app\controller;

use app\Controller;

class Home extends Controller
{
    public function get()
    {
        $this->app->logger->debug(print_r($this->app->request, true));

        return $this->view('home.php');
    }
}

