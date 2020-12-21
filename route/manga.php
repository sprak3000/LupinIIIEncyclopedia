<?php

use sprak3000\lupinencyclopedia\Slim\Page;

$pageData = new Page\Data();

/**
 * Route(s) for the Manga page(s)
 */
$app->get('/manga', function () use ($app, $pageData) {
    $data = $pageData
        ->withTitle('Manga')
        ->withNavigation([
            'Manga' => '',
        ])
        ->withGallery()
        ->data(['mangaNav' => true]);

    $app->render('view/manga.php', $data);
})->name('manga');
