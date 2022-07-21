<?php

namespace app\middleware;

use Closure;

use Psr\Http\Message\ServerRequestInterface;

use queasy\framework\MiddlewareInterface;

class Auth implements MiddlewareInterface
{
    public function handle(ServerRequestInterface $request, Closure $next)
    {
        if (!$this->app->user) {
            $this->app->redirect('index.php/sign-in');
        }

        return $next($request);
    }
}

