<?php
use sprak3000\lupinencyclopedia\Slim\Page;

$pageUtil = new Page\Util();

/**
 * Route for the live-action pages
 */
$app->get('/live-action/zenigata-keibu', function () use ($app, $pageUtil) {
  $includeCss = [];
  $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

  $includeJs = [];
  $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
  $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

  $inlineJs = [];
  $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

  $pageData = [];
  $pageData['pageTitle'] = 'Inspector Zenigata';
  $pageData['pageDescription'] = '';
  $pageData['includeCss'] = $includeCss;
  $pageData['includeJs'] = $includeJs;
  $pageData['inlineJs'] = $inlineJs;

  $pageData['homeNav'] = true;
  $pageData['animeNav'] = true;

  $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/live-action/zenigata-keibu/media");

  $app->render('view/live-action/zenigata-keibu.php', $pageData);
})->name('live-action-zenigata-keibu');