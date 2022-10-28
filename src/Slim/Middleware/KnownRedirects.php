<?php

namespace sprak3000\lupinencyclopedia\Slim\Middleware;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class KnownRedirects
{
    public function __invoke(Request $req,  Response $res, callable $next)
    {
        $route = $req->getUri()->getPath();

        // Special catch-all for any lingering /news/* links
        if (false !== stripos($route, "/news/")) {
            // TODO: Test this path
            return $res->withRedirect($req->getAttribute('route')->pathFor("homepage"), 301);
        }

        $redirects = json_decode(file_get_contents(__DIR__ . '/../../../application/redirects.json'), true);

        // Perform any known redirects
        if (array_key_exists($route, $redirects)) {
            // TODO: Test this path
            return $res->withRedirect($req->getAttribute('route')->pathFor($redirects[$route]), 301);
        }

        return $next($req, $res);
    }
}
