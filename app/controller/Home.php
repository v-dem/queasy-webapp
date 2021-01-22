<?php

namespace app\controller;

use queasy\http\ServerRequest;
use queasy\framework\Controller;

class Home extends Controller
{
    public function get(ServerRequest $request)
    {
        $this->app->logger->debug('Home::get() called.');

        $messages = $this->app->db->messages->getNewest();

        return $this->render('views/home.php', $messages);
    }
}

