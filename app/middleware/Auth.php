<?php

namespace app\middleware;

use Closure;

use Psr\Http\Message\ServerRequestInterface;

use queasy\framework\MiddlewareInterface;

use app\Redirect;

class Auth implements MiddlewareInterface
{
    public function handle(ServerRequestInterface $request, Closure $next)
    {
        $this->app->logger->debug('auth!');

        if ($this->app->user) {
            return $next($request);
        }

        return this->app->createResponse()
            ->withHeader('Location', preg_replace('/index.php.*/', '', $request->getRequestTarget()) . 'index.php/sign-in');
    }
}

