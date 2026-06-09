<?php

namespace app\middleware;

use queasy\framework\App;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Auth implements MiddlewareInterface
{
    private $container;

    private $config;

    public function __construct($container, $config = [])
    {
        $this->container = $container;
        $this->config = $config;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $next): ResponseInterface
    {
        if ($request->getAttribute('user')) {
            return $next->handle($request);
        }

        return $this->container->http->responseFactory->createResponse()
            ->withHeader('Location', preg_replace('/index.php.*/', '', $request->getRequestTarget()) . 'index.php/sign-in');
    }
}

