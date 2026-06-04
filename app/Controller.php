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
        $this->app->logger->debug('!!! request target: ' . $this->request->getRequestTarget());

        $baseUrl = preg_replace('/index\.php.*/', '../', $this->request->getRequestTarget());
        /*
        if (empty($baseUrl)) {
            $baseUrl = '/';
        }
        */

        $data['baseUrl'] = $baseUrl;
        $data['user'] = $this->app->user;

        return parent::view($page, $data, $responseCode);
    }

    protected function redirect($path = '')
    {
        return $this->response->withHeader('Location', preg_replace('/index\.php.*/', '', $this->request->getRequestTarget()) . $path);
    }
}

