<?php
/**
 * 404 Handling
 *
 * Adds in redirecting broken routes from previous site iterations to any proper new route
 */
$app->notFound(function () use ($app) {
  $includeCss = array ();
  $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/page_404_error.css';

  $includeJs = array ();

  $inlineJs = array ();

  $pageData = array ();
  $pageData['pageTitle'] = 'Not Found!';
  $pageData['pageDescription'] = '404 Not Found!';
  $pageData['includeCss'] = $includeCss;
  $pageData['includeJs'] = $includeJs;
  $pageData['inlineJs'] = $inlineJs;

  $app->render('not-found.php', $pageData);
});