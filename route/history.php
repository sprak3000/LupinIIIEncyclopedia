<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * Route for the History page
 */
$app->get('/history', function (Request $req,  Response $res, $args = []) use ($app) {
  $includeCss = array ();
  $includeCss[] = '/dist/css/timeline/assets/css/card.css';

  $includeJs = array ();
  $includeJs[] = '/dist/js/timeline/assets/js/jquery.timeline.min.js';

  $inlineJs = array ();
  $inlineJs[] = "$('#history-timeline').timeline();";

  $pageData = array ();
  $pageData['pageTitle'] = 'A Brief History of Lupin III';
  $pageData['pageAuthor'] = 'Luis A. Cruz';
  $pageData['pageDescription'] = 'A timeline of the major events in the history of the Lupin III manga, anime, and more.';
  $pageData['includeCss'] = $includeCss;
  $pageData['includeJs'] = $includeJs;
  $pageData['inlineJs'] = $inlineJs;

  $pageData['homeNav'] = true;
  $pageData['historyNav'] = true;

  return $this->view->render($res, 'view/history.php', $pageData);
})->setName('history');
