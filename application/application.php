<?php

use sprak3000\lupinencyclopedia\Slim\Page;
use sprak3000\lupinencyclopedia\Slim\Middleware\KnownRedirects;

$config = [
    'templates.path' => '../template',
    'view' => new Page\View(),
];

/** Create the application */
$app = new \Slim\app($config);

/** Redirect middleware */
$app->add(new KnownRedirects());

/** Iterate over the available routes */
$dirIterator = new RecursiveDirectoryIterator('../route');
$iterator = new RecursiveIteratorIterator($dirIterator, RecursiveIteratorIterator::SELF_FIRST);
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        require_once $file->getPathname();
    }
}