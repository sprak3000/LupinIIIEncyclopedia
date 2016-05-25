<?php
/**
 * Route(s) for the Manga page(s)
 */
$app->get('/manga', function () use ($app) {
  $includeCss = array ();
  $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

  $includeJs = array ();
  $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
  $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

  $inlineJs = array ();
  $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

  $pageData = array ();
  $pageData['pageTitle'] = 'Manga';
  $pageData['pageAuthor'] = 'Luis A. Cruz';
  $pageData['pageDescription'] = '';
  $pageData['includeCss'] = $includeCss;
  $pageData['includeJs'] = $includeJs;
  $pageData['inlineJs'] = $inlineJs;

  $pageData['mangaNav'] = true;

  $app->render('view/manga.php', $pageData);
})->name('manga');