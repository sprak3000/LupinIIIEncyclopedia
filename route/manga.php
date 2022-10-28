<?php

use sprak3000\lupinencyclopedia\Slim\Page;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$pageData = new Page\Data();

/**
 * Route(s) for the Manga page(s)
 */
$app->get('/manga', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
    $data = $pageData
        ->withTitle('Manga')
        ->withNavigation([
            'Manga' => '',
        ])
        ->withGallery()
        ->data(['mangaNav' => true]);

    return $this->view->render($res, 'view/manga.php', $data);
})->setName('manga');
