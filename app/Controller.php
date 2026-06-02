<?php

namespace app;

use queasy\framework\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * This method just appends $user to $data
     */
    protected function view($page, array $data = [], $responseCode = 200)
    {
        return parent::view($page, array_merge($data, [ 'user' => $this->app->user ]), $responseCode);
    }
}

