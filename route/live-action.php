<?php

use sprak3000\lupinencyclopedia\Slim\Page;

$pageUtil = new Page\Util();
$pageData = new Page\Data();

/**
 * Route for the live-action pages
 */
$app->get('/live-action/zenigata-keibu', function () use ($app, $pageUtil, $pageData) {
    $data = $pageData
        ->withTitle('Inspector Zenigata')
        ->withNavigation([
            'Profiles' => '',
        ])
        ->withGallery(__DIR__ . "/../public/dist/asset/img/live-action/zenigata-keibu/media")
        ->data(['homeNav' => true, 'animeNav' => true, 'zenigataNav' => true, 'app' => $app->getInstance()]);

    $app->render('view/live-action/zenigata-keibu.php', $data);
})->name('live-action-zenigata-keibu');
