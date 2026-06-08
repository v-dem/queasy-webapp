<?php

namespace app;

use Psr\Http\Message\ResponseInterface;

class View
{
    private $response;

    private $templatePath;

    private $data;

    public function __construct(ResponseInterface $response, $templatePath, $data = array())
    {
        $this->response = $response;
        $this->templatePath = $templatePath;
        $this->data = $data;
    }

    protected function render(array $__data = array())
    {
        extract($__data);

        ob_start();

        require $this->templatePath;

        return ob_get_clean();
    }

    public function html(array $data = array(), $responseCode = 200)
    {
        $body = $this->render(array_merge($this->data, $data));

        $this->response->getBody()->write($body);

        return $this->response
            ->withHeader('Content-Type', 'text/html')
            ->withStatus($responseCode);
    }

    public function json(array $data = array(), $responseCode = 200, $jsonFlags = 0)
    {
        $json = json_encode($data, $jsonFlags);

        $this->response->getBody()->write($json);

        return $this->response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus($responseCode);
    }
}

