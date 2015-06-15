<?php
/**
 * Route for the homepage
 */
$app->get('/', function () use ($app) {
  $includeCss = [];
  $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/profile.css';
  $includeCss[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/perfect-scrollbar.css';

  $includeJs = [];
  $includeJs[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/jquery.mousewheel.js';
  $includeJs[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/perfect-scrollbar.js';

  $inlineJs = [];
  $inlineJs[] = "jQuery(document).ready(function ($) { \"use strict\"; $('.contentHolder').perfectScrollbar(); });";

  $pageData = [];
  $pageData['pageTitle'] = 'Home';
  $pageData['pageAuthor'] = 'Luis A. Cruz';
  $pageData['pageDescription'] = '';

  $pageData['includeCss'] = $includeCss;
  $pageData['includeJs'] = $includeJs;
  $pageData['inlineJs'] = $inlineJs;

  $pageData['homeNav'] = true;

  $pageData['forumRss'] = [];
  $pageData['eBayRss'] = [];

  try {
    $pageData['forumRss'] = simplexml_load_file("http://www.lupinencyclopedia.com/forums/index.php?action=.xml");
  } catch (Exception $e) {
    // TODO: Log this appropriately
  }

  try {
    $pageData['eBayRss'] = simplexml_load_file("http://www.lupinencyclopedia.com/rss/ebay");
  } catch (Exception $e) {
    // TODO: Log this appropriately
  }

  $app->render('view/home.php', $pageData);
})->name('homepage');