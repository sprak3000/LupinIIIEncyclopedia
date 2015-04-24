<?php
/**
 * Route for the homepage
 */
$app->get('/', function ( ) use ( $app ) {
  $includeCss = array ();
  $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/profile.css';
  $includeCss[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/perfect-scrollbar.css';

  $includeJs = array ();
  $includeJs[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/jquery.mousewheel.js';
  $includeJs[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/perfect-scrollbar.js';

  $inlineJs = array ();
  $inlineJs[] = "jQuery(document).ready(function ($) { \"use strict\"; $('.contentHolder').perfectScrollbar(); });";

  $pageData = array ();
  $pageData['pageTitle'] = 'Home';
  $pageData['pageAuthor'] = 'Luis A. Cruz';
  $pageData['pageDescription'] = '';

  $pageData['includeCss'] = $includeCss;
  $pageData['includeJs'] = $includeJs;
  $pageData['inlineJs'] = $inlineJs;

  $pageData['homeNav'] = true;

  $app->render('view/home.php', $pageData);
})->name('homepage');