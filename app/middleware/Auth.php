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
        if ($this->app->user) {
            return $next($request);
        }

        new Redirect($request, this->app->createResponse(), 'index.php/sign-in');
    }
}

