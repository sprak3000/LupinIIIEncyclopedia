<?php
namespace sprak3000\lupinencyclopedia\Slim\Middleware;

use \Slim\Middleware;

class KnownRedirects extends Middleware
{
  public function call()
  {
    $app = $this->app;

    $route = $app->request()->getResourceUri();

    // Special catch-all for any lingering /news/* links
    if(false !== stripos($route, "/news/")) {
      return $app->response->redirect($app->urlFor("homepage"), 301);
    }

    $redirects = json_decode(file_get_contents(__DIR__ . '/../../../application/redirects.json'), true);

    // Perform any known redirects
    if(array_key_exists($route, $redirects)) {
      return $app->response->redirect($app->urlFor($redirects[$route]), 301);
    }

    // Otherwise, keep on rendering
    $this->next->call();
  }
}