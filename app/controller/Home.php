<?php

namespace app\controller;

use queasy\framework\Controller;

class Home extends Controller
{
    public function get()
    {
        $this->app->logger->debug('Home::get() called. Request: ' . print_r($this->request, true));

        // $messages = $this->app->db->messages->getNewest();

        return 'Hello, World!!!'; // $this->render('views/home.php', $messages);
    }
}

