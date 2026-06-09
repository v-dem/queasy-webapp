<?php

namespace app\middleware;

use app\model\User;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class SessionUser implements MiddlewareInterface
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $next): ResponseInterface
    {
        session_start();

        if (isset($_SESSION['userKey'])) {
            $request = $request->withAttribute('user', new User($this->container->userService, $_SESSION['userKey']));
        }

        $this->container->logger->debug($request->getAttribute('user'));

        return $next->handle($request);
    }
}

