<?php

namespace app\middleware;

use queasy\framework\App;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class GoHome implements MiddlewareInterface
{
    private $app;

    public function __construct(App $app)
    {
        $this->app = $app;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $next): ResponseInterface
    {
        if ($request->getAttribute('user')) {
            return $this->app->http->responseFactory->createResponse()
                ->withHeader('Location', preg_replace('/index.php.*/', '', $request->getRequestTarget()) . 'index.php');
        }

        return $next->handle($request);
    }
}

