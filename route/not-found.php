<?php

use sprak3000\lupinencyclopedia\Slim\Page;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$pageData = new Page\Data();

/**
 * 404 Handling
 *
 * Adds in redirecting broken routes from previous site iterations to any proper new route
 */
// TODO: Restore or replace with appropriate 404 handling
//$app->notFound(function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
//    $data = $pageData
//        ->withTitle('Not Found!')
//        ->withDescription('404 Not Found!')
//        ->with404()
//        ->data();
//
//    return $this->view->render('not-found.php', $data);
//});
