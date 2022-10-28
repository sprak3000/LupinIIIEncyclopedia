<?php

use sprak3000\lupinencyclopedia\Slim\Page;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$pageData = new Page\Data();

/**
 * Route for the homepage
 */
$app->get('/', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
    $data = $pageData
        ->withTitle('Home')
        ->withForumRSS()
        ->withEbayRSS()
        ->data(['homeNav' => true]);

    return $this->view->render($res, 'view/home.php', $data);
})->setName('homepage');
