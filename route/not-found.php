<?php
/**
 * 404 Handling
 *
 * Adds in redirecting broken routes from previous site iterations to any proper new route
 */
$app->notFound(function () use ($app) {
  $includeCss = array ();
  $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/page_404_error1.css';

  $includeJs = array ();
  $includeJs[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/backstretch/jquery.backstretch.min.js';

  $inlineJs = array ();
  $inlineJs[] = '$.backstretch(["/dist/asset/img/404-bg-1.jpg"], {});';

  $pageData = array ();
  $pageData['pageTitle'] = 'Not Found!';
  $pageData['pageDescription'] = '404 Not Found!';
  $pageData['includeCss'] = $includeCss;
  $pageData['includeJs'] = $includeJs;
  $pageData['inlineJs'] = $inlineJs;
  $pageData['is404'] = true;

  $app->render('not-found.php', $pageData);
});