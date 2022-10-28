<?php

use sprak3000\lupinencyclopedia\Slim\Page;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$pageUtil = new Page\Util();
$pageData = new Page\Data();

/**
 * Route for the live-action pages
 */
$app->get('/live-action/zenigata-keibu', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
    $data = $pageData
        ->withTitle('Inspector Zenigata')
        ->withNavigation([
            'Profiles' => '',
        ])
        ->withGallery(__DIR__ . "/../public/dist/asset/img/live-action/zenigata-keibu/media")
        ->data(['homeNav' => true, 'animeNav' => true, 'zenigataNav' => true, 'app' => $app->getInstance()]);

    return $this->view->render('view/live-action/zenigata-keibu.php', $data);
})->setName('live-action-zenigata-keibu');
