<?php

use sprak3000\lupinencyclopedia\Slim\Page;
use sprak3000\lupinencyclopedia\Slim\Middleware\KnownRedirects;

/** Create the application */
$app = new \Slim\App(); //$config);

/** Get app container */
$container = $app->getContainer();

/** Register view handler in container */
$container['view'] = function ($container) {
    return new Page\View('../template');
};

/** Register custom 404 handler */
$container['notFoundHandler'] = function ($c) {
    return function ($req, $res) use ($c) {
        $pageData = new Page\Data();

        $data = $pageData
            ->withTitle('Not Found!')
            ->withDescription('404 Not Found!')
            ->with404()
            ->data();

        $res = $c->view->render($res, 'not-found.php', $data);
        return $res->withStatus(404)
            ->withHeader('Content-Type', 'text/html');
    };
};

/** Redirect middleware */
$app->add(new KnownRedirects($container));

/** Iterate over the available routes */
$dirIterator = new RecursiveDirectoryIterator('../route');
$iterator = new RecursiveIteratorIterator($dirIterator, RecursiveIteratorIterator::SELF_FIRST);
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        require_once $file->getPathname();
    }
}
