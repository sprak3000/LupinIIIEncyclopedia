<?php

use sprak3000\lupinencyclopedia\Slim\Page;

$pageData = new Page\Data();

/**
 * Route for the homepage
 */
$app->get('/', function () use ($app, $pageData) {
    $data = $pageData
        ->withTitle('Home')
        ->withForumRSS()
        ->withEbayRSS()
        ->data(['homeNav' => true]);

    $app->render('view/home.php', $data);
})->name('homepage');
