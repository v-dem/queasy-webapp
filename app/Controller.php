<?php

namespace app;

use queasy\framework\Controller as BaseController;

class Controller extends BaseController
{
    protected $view;

    public function __construct(App $app, $request, $response, $redirect)
    {
        parent::__construct($app, $request, $response, $redirect);

        $this->view = new View(
            $this->response,
            isset($this->viewPath)
                ? QUEASY_ROOT_PATH . 'templates/' . $this->viewPath
                : null,
            [
                'baseUrl' => preg_replace('/index\.php.*/', '', $this->request->getRequestTarget()),
                'user' => $request->getAttribute('user')
            ]
        );
    }
}

