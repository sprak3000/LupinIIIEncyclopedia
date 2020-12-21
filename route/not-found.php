<?php

use sprak3000\lupinencyclopedia\Slim\Page;

$pageData = new Page\Data();

/**
 * 404 Handling
 *
 * Adds in redirecting broken routes from previous site iterations to any proper new route
 */
$app->notFound(function () use ($app, $pageData) {
    $data = $pageData
        ->withTitle('Not Found!')
        ->withDescription('404 Not Found!')
        ->with404()
        ->data();

    $app->render('not-found.php', $data);
});
