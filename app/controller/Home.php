<?php

namespace app\controller;

use app\Controller;

class Home extends Controller
{
    public function get()
    {
        return $this->view('home.php');
    }
}

