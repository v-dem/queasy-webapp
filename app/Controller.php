<?php

namespace app;

use queasy\framework\Controller as BaseController;

class Controller extends BaseController
{
    protected function view($__page, array $__data = array(), $__responseCode = 200)
    {
        return parent::view($__page, array_merge($__data, array('user' => $this->app->user)), $__responseCode);
    }
}

