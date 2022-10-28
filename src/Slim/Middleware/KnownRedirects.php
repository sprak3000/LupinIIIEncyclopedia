<?php

namespace sprak3000\lupinencyclopedia\Slim\Middleware;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class KnownRedirects
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $req,  Response $res, callable $next)
    {
        $route = $req->getUri()->getPath();

        // Special catch-all for any lingering /news/* links
        if (false !== stripos($route, "/news/")) {
            return $res->withRedirect($this->container->router->pathFor("homepage"), 301);
        }

        $redirects = json_decode(file_get_contents(__DIR__ . '/../../../application/redirects.json'), true);

        // Perform any known redirects
        if (array_key_exists($route, $redirects)) {
            return $res->withRedirect($this->container->router->pathFor($redirects[$route]), 301);
        }

        return $next($req, $res);
    }
}
