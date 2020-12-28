<?php

namespace queasy\webapp\controller;

use queasy\framework\Controller;

class Home extends Controller
{
    public function get()
    {
        $this->app()->logger()->debug('Home::get() called.');

        $messages = $this->app()->db()->messages->getNewest();

        return $this->render('views/home.template.php', $messages);
    }
}

