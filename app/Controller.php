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
        $data['baseUrl'] = preg_replace('/index\.php.*/', '', $this->request->getRequestTarget());

        return parent::view($page, $data, $responseCode);
    }
}

