<?php

use sprak3000\lupinencyclopedia\Slim\Page;

$pageUtil = new Page\Util();
$pageData = new Page\Data();

/**
 * Routes for /random-loot and below
 */
$app->group('/random-loot', function () use ($app, $pageUtil, $pageData) {
    $app->get('/music', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Music')
            ->withDescription('Lupin the Third music on CD, vinyl, etc.')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->data(['lootNav' => true, 'musicNav' => true]);

        $app->render('view/random-loot/music.php', $data);
    })->name('music');

    $app->get('/newsletter(/:year/:month)/', function ($pYear = '2002', $pMonth = '12') use ($app, $pageData) {
        $data = $pageData
            ->withTitle('The LupinTheThird Newsletter')
            ->withDescription('Archive of newsletters for the Yahoo! Lupin the Third group')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->withNewsletter()
            ->data([
                'lootNav' => true,
                'newsletterNav' => true,
                'year' => $pYear,
                'month' => $pMonth,
                'issue' => date('F Y', strtotime($pMonth . '/01/' . $pYear)),
            ]);

        $app->render('view/random-loot/newsletter.php', $data);
    })->name('newsletter');

    $app->get('/kent-state-lupin-mailing-list', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Lupin Mailing List (lupin AT mcs DOT kent DOT edu) Archive')
            ->withDescription('This is an incomplete archive of the Lupin III mailing list that ran from roughly from 1998 to 2002.')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->withMailingList()
            ->data(['lootNav' => true, 'mlNav' => true]);

        $app->render('view/random-loot/kent-state-lupin-mailing-list.php', $data);
    })->name('mailing-list');

    $app->get('/tokyo-international-anime-fair', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Tokyo International Anime Fair')
            ->withDescription('An overview of the various booths Lupin has had at the Tokyo International Anime Fair')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->withGallery()
            ->data(['lootNav' => true, 'tafNav' => true]);

        $app->render('view/random-loot/tokyo-international-anime-fair.php', $data);
    })->name('tokyo-international-anime-fair');

    $app->get('/loose-change', function () use ($app, $pageUtil, $pageData) {
        $data = $pageData
            ->withTitle('Loose Change')
            ->withDescription('E-mail interview with Robert Woodhead from AnimEigo, Pioneer Playing Cards')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->withGallery()
            ->data(['lootNav' => true, 'looseChangeNav' => true]);

        $data['images']['lupin-the-box-tv-movie'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/lupin-the-box-tv-movie");

        $app->render('view/random-loot/loose-change.php', $data);
    })->name('loose-change');

    $app->get('/cosplay', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Cosplay')
            ->withDescription('Gallery of Lupin cosplayers')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->withGallery()
            ->data(['lootNav' => true, 'cosplayNav' => true]);

        $app->render('view/random-loot/cosplay.php', $data);
    })->name('cosplay');

    $app->get('/cameos', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Cameos')
            ->withDescription('Gallery of cameos Lupin and the gang have had in other media')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->withGallery()
            ->data(['lootNav' => true, 'cameosNav' => true]);

        $app->render('view/random-loot/cameos.php', $data);
    })->name('cameos');
});
