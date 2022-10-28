<?php

use sprak3000\lupinencyclopedia\Slim\Page;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\app;

$pageUtil = new Page\Util();
$pageData = new Page\Data();

/**
 * Routes for /random-loot and below
 */
$app->group('/random-loot', function (App $app) use ($pageUtil, $pageData) {
    $app->get('/music', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Music')
            ->withDescription('Lupin the Third music on CD, vinyl, etc.')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->data(['lootNav' => true, 'musicNav' => true]);

        return $this->view->render($res, 'view/random-loot/music.php', $data);
    })->setName('music');

    // TODO: Request $req,  Response $res, $args = [] for function sig?
//    $app->get('/newsletter(/:year/:month)', function ($pYear = '2002', $pMonth = '12') use ($app, $pageData) {
    // TODO: Fix this path
    $app->get('/newsletter/{year}/{month})', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
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
                'issue' => date('F Y', strtotime($pMonth . '/01' . $pYear)),
            ]);

        return $this->view->render($res, 'view/random-loot/newsletter.php', $data);
    })->setName('newsletter');

    $app->get('/kent-state-lupin-mailing-list', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Lupin Mailing List (lupin AT mcs DOT kent DOT edu) Archive')
            ->withDescription('This is an incomplete archive of the Lupin III mailing list that ran from roughly from 1998 to 2002.')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->withMailingList()
            ->data(['lootNav' => true, 'mlNav' => true]);

        return $this->view->render($res, 'view/random-loot/kent-state-lupin-mailing-list.php', $data);
    })->setName('mailing-list');

    $app->get('/tokyo-international-anime-fair', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Tokyo International Anime Fair')
            ->withDescription('An overview of the various booths Lupin has had at the Tokyo International Anime Fair')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->withGallery()
            ->data(['lootNav' => true, 'tafNav' => true]);

        return $this->view->render($res, 'view/random-loot/tokyo-international-anime-fair.php', $data);
    })->setName('tokyo-international-anime-fair');

    $app->get('/loose-change', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
        $data = $pageData
            ->withTitle('Loose Change')
            ->withDescription('E-mail interview with Robert Woodhead from AnimEigo, Pioneer Playing Cards')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->withGallery()
            ->data(['lootNav' => true, 'looseChangeNav' => true]);

        $data['images']['lupin-the-box-tv-movie'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/lupin-the-box-tv-movie");

        return $this->view->render($res, 'view/random-loot/loose-change.php', $data);
    })->setName('loose-change');

    $app->get('/cosplay', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Cosplay')
            ->withDescription('Gallery of Lupin cosplayers')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->withGallery()
            ->data(['lootNav' => true, 'cosplayNav' => true]);

        return $this->view->render($res, 'view/random-loot/cosplay.php', $data);
    })->setName('cosplay');

    $app->get('/cameos', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Cameos')
            ->withDescription('Gallery of cameos Lupin and the gang have had in other media')
            ->withNavigation([
                'Random Loot' => '',
            ])
            ->withGallery()
            ->data(['lootNav' => true, 'cameosNav' => true]);

        return $this->view->render($res, 'view/random-loot/cameos.php', $data);
    })->setName('cameos');
});
