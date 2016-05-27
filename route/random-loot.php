<?php
/**
 * Routes for /random-loot and below
 */
$app->group('/random-loot', function () use ($app) {
  $app->get('/music', function() use ($app) {
    $includeCss = [];

    $includeJs = [];

    $nav = [];
    $nav['Random Loot'] = '';

    $pageData = [
      'pageTitle' => 'Music',
      'pageDescription' => 'Lupin the Third music on CD, vinyl, etc.',
      'includeCss' => $includeCss,
      'includeJs' => $includeJs,
      'nav' => $nav,
      'lootNav' => true,
      'musicNav' => true
    ];

    $app->render('view/random-loot/music.php', $pageData);

  })->name('music');

  $app->get('/newsletter(/:year/:month)/', function ($pYear = '2002', $pMonth = '12') use ($app) {
      $includeCss = [];
      $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/blog.css';

      $includeJs = [];
      $includeJs[] = '/bower_components/handlebars/handlebars.min.js';
      $includeJs[] = '/dist/js/Newsletter.js';

      $pageData = [];
      $pageData['year'] = $pYear;
      $pageData['month'] = $pMonth;
      $pageData['issue'] = date('F Y', strtotime($pMonth . '/01/' . $pYear));
      $pageData['pageTitle'] = 'The LupinTheThird Newsletter';
      $pageData['pageDescription'] = 'Archive of newsletters for the Yahoo! Lupin the Third group';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;

      $nav = [];
      $nav['Random Loot'] = '';
      $pageData['nav'] = $nav;
      $pageData['lootNav'] = true;
      $pageData['newsletterNav'] = true;

      $app->render('view/random-loot/newsletter.php', $pageData);
    })->name('newsletter');

  $app->get('/kent-state-lupin-mailing-list', function () use ($app) {
      $includeCss = [];
      $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/page_search.css';
      $includeCss[] = '/dist/css/MailingList.css';

      $includeJs = [];
      $includeJs[] = '/bower_components/lodash/dist/lodash.min.js';
      $includeJs[] = '/bower_components/backbone/backbone.js';
      $includeJs[] = '/bower_components/handlebars/handlebars.min.js';
      $includeJs[] = '/dist/js/MailingList.js';

      $pageData = [];
      $pageData['pageTitle'] = 'Lupin Mailing List (lupin@mcs.kent.edu) Archive';
      $pageData['pageDescription'] = 'This is an incomplete archive of the Lupin III mailing list that ran from roughly from 1998 to 2002.';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;

      $nav = [];
      $nav['Random Loot'] = '';
      $pageData['nav'] = $nav;
      $pageData['lootNav'] = true;
      $pageData['mlNav'] = true;

      $app->render('view/random-loot/kent-state-lupin-mailing-list.php', $pageData);
    })->name('mailing-list');

  $app->get('/tokyo-international-anime-fair', function () use ($app) {
    $includeCss = [];

    $includeJs = [];

    $pageData = [];
    $pageData['pageTitle'] = 'Tokyo International Anime Fair';
    $pageData['pageDescription'] = 'An overview of the various booths Lupin has had at the Tokyo International Anime Fair';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;

    $nav = [];
    $nav['Random Loot'] = '';
    $pageData['nav'] = $nav;
    $pageData['lootNav'] = true;
    $pageData['tafNav'] = true;

    $app->render('view/random-loot/tokyo-international-anime-fair.php', $pageData);
  })->name('tokyo-international-anime-fair');

  $app->get('/loose-change', function () use ($app) {
    $includeCss = [];
    $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

    $includeJs = [];
    $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
    $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

    $inlineJs = [];
    $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

    $pageData = [];
    $pageData['pageTitle'] = 'Loose Change';
    $pageData['pageDescription'] = 'E-mail interview with Robert Woodhead from AnimEigo, Pioneer Playing Cards';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;
    $pageData['inlineJs'] = $inlineJs;

    $nav = [];
    $nav['Random Loot'] = '';
    $pageData['nav'] = $nav;
    $pageData['lootNav'] = true;
    $pageData['looseChangeNav'] = true;

    $app->render('view/random-loot/loose-change.php', $pageData);
  })->name('loose-change');

  $app->get('/cosplay', function () use ($app) {
    $includeCss = [
      '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css'
    ];

    $includeJs = [
      '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js',
      '/dist/unify-1.8/js/plugins/fancy-box.js'
    ];

    $inlineJs = [
      'jQuery(document).ready(function() { FancyBox.initFancybox(); });'
    ];


    $pageData = [];
    $pageData['pageTitle'] = 'Cosplay';
    $pageData['pageDescription'] = 'Gallery of Lupin cosplayers';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;
    $pageData['inlineJs'] = $inlineJs;

    $nav = [];
    $nav['Random Loot'] = '';
    $pageData['nav'] = $nav;
    $pageData['lootNav'] = true;
    $pageData['cosplayNav'] = true;

    $app->render('view/random-loot/cosplay.php', $pageData);
  })->name('cosplay');

  $app->get('/cameos', function () use ($app) {
    $includeCss = [
      '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css'
    ];

    $includeJs = [
      '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js',
      '/dist/unify-1.8/js/plugins/fancy-box.js'
    ];

    $inlineJs = [
      'jQuery(document).ready(function() { FancyBox.initFancybox(); });'
    ];


    $pageData = [];
    $pageData['pageTitle'] = 'Cameos';
    $pageData['pageDescription'] = 'Gallery of cameos Lupin and the gang have had in other media';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;
    $pageData['inlineJs'] = $inlineJs;

    $nav = [];
    $nav['Random Loot'] = '';
    $pageData['nav'] = $nav;
    $pageData['lootNav'] = true;
    $pageData['cameosNav'] = true;

    $app->render('view/random-loot/cameos.php', $pageData);
  })->name('cameos');
});