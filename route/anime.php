<?php
use sprak3000\lupinencyclopedia\Slim\Page;

$pageUtil = new Page\Util();

/**
 * Routes for /anime and below
 */
$app->group('/anime', function () use ($app, $pageUtil) {
  /**
   * Route(s) for the Pilot Film
   */
  $app->get('/pilot-film/', function () use ($app, $pageUtil) {
    $pageData = [
      'includeCss' => [
        '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css'
      ],

      'includeJs' => [
        '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js',
        '/dist/unify-1.8/js/plugins/fancy-box.js'
      ],

      'inlineJs' => [
        'jQuery(document).ready(function() { FancyBox.initFancybox(); });'
      ],

      'pageTitle' => 'Lupin III Pilot Film',
      'pageDescription' => '',

      'nav' => [
        'Anime' => ''
      ],

      'animeNav' => true,
      'pilotNav' => true,

      'images' => $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/pilot-film/media")
    ];

    $app->render('view/anime/pilot-film.php', $pageData);
  })->name('pilot-film');

  /**
   * Routes for Theatrical Films
   */
  $app->group('/theatrical-films', function () use ($app, $pageUtil) {
    $app->get('/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/css/pages/shortcode_timeline1.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Theatrical Films';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['filmNav'] = true;

      $app->render('view/anime/theatrical-films.php', $pageData);
    })->name('theatrical-films');

    $app->get('/jigen-daisuke-gravestone/', function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Jigen Daisuke\'s Gravestone';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Theatrical Films'] = '/anime/theatrical-films';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['filmNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(16148);

      $app->render('view/anime/theatrical-films/jigen-daisuke-gravestone.php', $pageData);
    })->name('jigen-daisuke-gravestone');

    $app->get('/strange-psychokinetic-strategy/', function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Strange Psychokinetic Strategy';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Theatrical Films'] = '/anime/theatrical-films';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['pilotNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2816);

      $app->render('view/anime/theatrical-films/strange-psychokinetic-strategy.php', $pageData);
    })->name('strange-psychokinetic-strategy');

    $app->get('/castle-of-cagliostro/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Castle of Cagliostro';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Theatrical Films'] = '/anime/theatrical-films';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['filmNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(127);

      $app->render('view/anime/theatrical-films/castle-of-cagliostro.php', $pageData);
    })->name('castle-of-cagliostro');

    $app->get('/dead-or-alive/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Dead or Alive';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Theatrical Films'] = '/anime/theatrical-films';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['filmNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(1039);

      $app->render('view/anime/theatrical-films/dead-or-alive.php', $pageData);
    })->name('dead-or-alive');

    $app->get('/farewell-to-nostradamus/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Farewell to Nostradamus';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Theatrical Films'] = '/anime/theatrical-films';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['filmNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2098);

      $app->render('view/anime/theatrical-films/farewell-to-nostradamus.php', $pageData);
    })->name('farewell-to-nostradamus');

    $app->get('/legend-of-the-gold-of-babylon/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Legend of the Gold of Babylon';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Theatrical Films'] = '/anime/theatrical-films';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['filmNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/theatrical-films/legend-of-the-gold-of-babylon/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(642);

      $app->render('view/anime/theatrical-films/legend-of-the-gold-of-babylon.php', $pageData);
    })->name('legend-of-the-gold-of-babylon');

    $app->get('/lupin-the-third-2014/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin the Third (2014)';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Theatrical Films'] = '/anime/theatrical-films';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['filmNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(15724);

      $app->render('view/anime/theatrical-films/lupin-the-third-2014.php', $pageData);
    })->name('lupin-the-third-2014');

    $app->get('/lupin-vs-detective-conan/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin the Third vs. Detective Conan: The Movie';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Theatrical Films'] = '/anime/theatrical-films';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['filmNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(15284);

      $app->render('view/anime/theatrical-films/lupin-vs-detective-conan.php', $pageData);
    })->name('lupin-vs-detective-conan');

    $app->get('/secret-of-mamo/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Secret of Mamo';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Theatrical Films'] = '/anime/theatrical-films';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['filmNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/theatrical-films/secret-of-mamo/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(1040);

      $app->render('view/anime/theatrical-films/secret-of-mamo.php', $pageData);
    })->name('secret-of-mamo');
  });

  /**
   * Routes for OVAs
   */
  $app->group('/original-video-animation', function () use ($app, $pageUtil) {
    $app->get('/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/css/pages/shortcode_timeline1.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Original Video Animation (OVA)';

      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['ovaNav'] = true;

      $app->render('view/anime/original-video-animation.php', $pageData);
    })->name('original-video-animation');

    $app->get('/trailers-collection/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Trailers Collection \'71 - \'95';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['OVA'] = '/anime/ova';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['ovaNav'] = true;

      $app->render('view/anime/original-video-animation/trailers-collection.php', $pageData);
    })->name('trailers-collection');

    $app->get('/secret-files-2/', function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'The Secret Files 2 ~Sound Collection~';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['OVA'] = '/anime/ova';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['ovaNav'] = true;

      $app->render('view/anime/original-video-animation/secret-files-2.php', $pageData);
    })->name('secret-files-2');

    $app->get('/secret-files/', function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'The Secret Files';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['OVA'] = '/anime/ova';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['ovaNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2097);

      $app->render('view/anime/original-video-animation/secret-files.php', $pageData);
    })->name('secret-files');

    $app->get('/return-of-the-magician/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Return of the Magician';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['OVA'] = '/anime/ova';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['ovaNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/ova/return-of-the-magician/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(2023);

      $app->render('view/anime/original-video-animation/return-of-the-magician.php', $pageData);
    })->name('return-of-the-magician');

    $app->get('/plot-of-the-fuma-clan/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Plot of the Fuma Clan';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['OVA'] = '/anime/ova';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['ovaNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/ova/plot-of-the-fuma-clan/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(641);

      $app->render('view/anime/original-video-animation/plot-of-the-fuma-clan.php', $pageData);
    })->name('plot-of-the-fuma-clan');

    $app->get('/green-vs-red/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Green VS Red';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['OVA'] = '/anime/ova';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['ovaNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/ova/green-vs-red/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(8868);

      $app->render('view/anime/original-video-animation/green-vs-red.php', $pageData);
    })->name('green-vs-red');
  });

  /**
   * Routes for TV Specials
   */
  $app->group('/tv-specials', function () use ($app, $pageUtil) {
    $app->get('/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/css/pages/shortcode_timeline1.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'TV Specials';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $app->render('view/anime/tv-specials.php', $pageData);
    })->name('tv-specials');

    $app->get('/bye-bye-liberty-crisis/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Bye Bye Liberty Crisis';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2090);

      $app->render('view/anime/tv-specials/bye-bye-liberty-crisis.php', $pageData);
    })->name('bye-bye-liberty-crisis');

    $app->get('/hemingway-papers/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Hemingway Papers';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2093);

      $app->render('view/anime/tv-specials/hemingway-papers.php', $pageData);
    })->name('hemingway-papers');

    $app->get('/napoleons-dictionary/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Napoleon\'s Dictionary';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2096);

      $app->render('view/anime/tv-specials/napoleons-dictionary.php', $pageData);
    })->name('napoleons-dictionary');

    $app->get('/from-russia-with-love/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'From Russia with Love';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2091);

      $app->render('view/anime/tv-specials/from-russia-with-love.php', $pageData);
    })->name('from-russia-with-love');

    $app->get('/voyage-to-danger/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Voyage to Danger';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2063);

      $app->render('view/anime/tv-specials/voyage-to-danger.php', $pageData);
    })->name('voyage-to-danger');

    $app->get('/dragon-of-doom/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Dragon of Doom';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/tv-specials/dragon-of-doom/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(2101);

      $app->render('view/anime/tv-specials/dragon-of-doom.php', $pageData);
    })->name('dragon-of-doom');

    $app->get('/the-pursuit-of-harimaos-treasure/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'The Pursuit of Harimao\'s Treasure';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2094);

      $app->render('view/anime/tv-specials/the-pursuit-of-harimaos-treasure.php', $pageData);
    })->name('the-pursuit-of-harimaos-treasure');

    $app->get('/the-secret-of-twilight-gemini/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'The Secret of Twilight Gemini';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(367);

      $app->render('view/anime/tv-specials/the-secret-of-twilight-gemini.php', $pageData);
    })->name('the-secret-of-twilight-gemini');

    $app->get('/island-of-assassins/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Island of Assassins';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2100);

      $app->render('view/anime/tv-specials/island-of-assassins.php', $pageData);
    })->name('island-of-assassins');

    $app->get('/crisis-in-tokyo/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Crisis in Tokyo';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2099);

      $app->render('view/anime/tv-specials/crisis-in-tokyo.php', $pageData);
    })->name('crisis-in-tokyo');

    $app->get('/the-columbus-files/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'The Columbus Files';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2092);

      $app->render('view/anime/tv-specials/the-columbus-files.php', $pageData);
    })->name('the-columbus-files');

    $app->get('/missed-by-a-dollar/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Missed by a Dollar';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2089);

      $app->render('view/anime/tv-specials/missed-by-a-dollar.php', $pageData);
    })->name('missed-by-a-dollar');

    $app->get('/alcatraz-connection/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Alcatraz Connection';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/tv-specials/alcatraz-connection/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(2022);

      $app->render('view/anime/tv-specials/alcatraz-connection.php', $pageData);
    })->name('alcatraz-connection');

    $app->get('/episode-0-first-contact/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Episode:0 First Contact';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/tv-specials/episode-0-first-contact/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(2727);

      $app->render('view/anime/tv-specials/episode-0-first-contact.php', $pageData);
    })->name('episode-0-first-contact');

    $app->get('/operation-return-the-treasure/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Operation: Return the Treasure!!';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(2657);

      $app->render('view/anime/tv-specials/operation-return-the-treasure.php', $pageData);
    })->name('operation-return-the-treasure');

    $app->get('/stolen-lupin/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Stolen Lupin';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(4195);

      $app->render('view/anime/tv-specials/stolen-lupin.php', $pageData);
    })->name('stolen-lupin');

    $app->get('/angels-tactics/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Angel\'s Tactics';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(5560);

      $app->render('view/anime/tv-specials/angels-tactics.php', $pageData);
    })->name('angels-tactics');

    $app->get('/seven-days-rhapsody/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Seven Days Rhapsody';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/tv-specials/seven-days-rhapsody/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(6837);

      $app->render('view/anime/tv-specials/seven-days-rhapsody.php', $pageData);
    })->name('seven-days-rhapsody');

    $app->get('/elusiveness-of-the-fog/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Elusiveness of the Fog';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/tv-specials/elusiveness-of-the-fog/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(8335);

      $app->render('view/anime/tv-specials/elusiveness-of-the-fog.php', $pageData);
    })->name('elusiveness-of-the-fog');

    $app->get('/sweet-lost-night/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Sweet Lost Night ~Magic Lamp\'s Nightmare Premonition';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/tv-specials/sweet-lost-night/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(10076);

      $app->render('view/anime/tv-specials/sweet-lost-night.php', $pageData);
    })->name('sweet-lost-night');

    $app->get('/lupin-iii-vs-detective-conan/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin III vs. Detective Conan';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/tv-specials/lupin-iii-vs-detective-conan/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(10605);

      $app->render('view/anime/tv-specials/lupin-iii-vs-detective-conan.php', $pageData);
    })->name('lupin-iii-vs-detective-conan');

    $app->get('/the-last-job/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'The Last Job';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/tv-specials/the-last-job/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(11231);

      $app->render('view/anime/tv-specials/the-last-job.php', $pageData);
    })->name('the-last-job');

    $app->get('/blood-seal-eternal-mermaid/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Blood Seal ~Eternal Mermaid~';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/tv-specials/blood-seal-eternal-mermaid/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(11231);

      $app->render('view/anime/tv-specials/blood-seal-eternal-mermaid.php', $pageData);
    })->name('blood-seal-eternal-mermaid');

    $app->get('/record-of-observations-of-the-east/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Record of Observations of the East - Another Page';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(14828);

      $app->render('view/anime/tv-specials/record-of-observations-of-the-east.php', $pageData);
    })->name('record-of-observations-of-the-east');

    $app->get('/princess-of-the-breeze/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Princess of the Breeze - Hidden City in the Sky';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['TV Specials'] = '/anime/tv-specials';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['specialsNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(15561);

      $app->render('view/anime/tv-specials/princess-of-the-breeze.php', $pageData);
    })->name('princess-of-the-breeze');
  });

  /**
   * Routes for TV Series
   */
  $app->group('/tv-series', function () use ($app, $pageUtil) {
    $app->get('/fourth/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin III Fourth TV Series';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['fourthTvNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/fourth-tv-series/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(16347);

      $app->render('view/anime/tv-series/fourth.php', $pageData);
    })->name('fourth-tv-series');

    $app->get('/third/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';
      $includeCss[] = '/dist/css/timeline/assets/css/card.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';
      $includeJs[] = '/dist/js/timeline/assets/js/jquery.timeline.min.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); jQuery("#episode-timeline").timeline({startItem : "03/03/1984", closeText : "x"}); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin III Third TV Series';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['thirdTvNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(887);

      $app->render('view/anime/tv-series/third.php', $pageData);
    })->name('third-tv-series');

    $app->get('/second/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';
      $includeCss[] = '/dist/css/timeline/assets/css/card.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';
      $includeJs[] = '/dist/js/timeline/assets/js/jquery.timeline.min.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); jQuery("#episode-timeline").timeline({startItem : "03/10/1977", closeText : "x"}); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin III Second TV Series';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['secondTvNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(885);

      $app->render('view/anime/tv-series/second.php', $pageData);
    })->name('second-tv-series');

    $app->get('/lupin-viii/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin VIII TV Series';
      $pageData['pageDescription'] = 'Lupin VIII TV Series - an abandoned co-production between France and Japan';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['viiiTvNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/lupin-viii-tv-series/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(2155);

      $app->render('view/anime/tv-series/lupin-viii.php', $pageData);
    })->name('lupin-viii-tv-series');

    $app->get('/first/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';
      $includeCss[] = '/dist/css/timeline/assets/css/card.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';
      $includeJs[] = '/dist/js/timeline/assets/js/jquery.timeline.min.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); jQuery("#episode-timeline").timeline({startItem : "24/10/1971", closeText : "x"}); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin III First TV Series';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['firstTvNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/first-tv-series/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(886);

      $app->render('view/anime/tv-series/first.php', $pageData);
    })->name('first-tv-series');

    $app->get('/woman-called-mine-fujiko/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';
      $includeCss[] = '/dist/css/timeline/assets/css/card.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';
      $includeJs[] = '/dist/js/timeline/assets/js/jquery.timeline.min.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); jQuery("#episode-timeline").timeline({startItem : "04/04/2012", closeText : "x"}); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin the Third: The Woman Called Mine Fujiko';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['fujikoTvNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(14135);

      $app->render('view/anime/tv-series/woman-called-mine-fujiko.php', $pageData);
    })->name('woman-called-mine-fujiko');
  });

  /**
   * Routes for non-Lupin
   */
  $app->group('/non-lupin', function () use ($app, $pageUtil) {
    $app->get('/', function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/css/pages/shortcode_timeline1.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Non-Lupin Anime';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['nonNav'] = true;

      $app->render('view/anime/non-lupin.php', $pageData);
    })->name('non-lupin');

    $app->get('/scoopers/',function () use ($app, $pageUtil) {
      $includeCss = array ();

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Scoopers';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Non-Lupin'] = '/anime/non-lupin';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['nonNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(7806);

      $app->render('view/anime/non-lupin/scoopers.php', $pageData);
    })->name('scoopers');

    $app->get('/alice/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Alice';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Non-Lupin'] = '/anime/non-lupin';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['nonNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/non-lupin/alice/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(8067);

      $app->render('view/anime/non-lupin/alice.php', $pageData);
    })->name('alice');

    $app->get('/siamese-cat-first-mission/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Siamese Cat - First Mission';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Non-Lupin'] = '/anime/non-lupin';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['nonNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/non-lupin/siamese-cat-first-mission/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(8944);

      $app->render('view/anime/non-lupin/siamese-cat-first-mission.php', $pageData);
    })->name('siamese-cat-first-mission');

    $app->get('/cinderella-boy/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';
      $includeCss[] = '/dist/css/timeline/assets/css/card.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';
      $includeJs[] = '/dist/js/timeline/assets/js/jquery.timeline.min.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); jQuery("#episode-timeline").timeline({startItem : "24/06/2003", closeText : "x"}); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Cinderella Boy';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Non-Lupin'] = '/anime/non-lupin';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['nonNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/non-lupin/cinderella-boy/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(2394);

      $app->render('view/anime/non-lupin/cinderella-boy.php', $pageData);
    })->name('cinderella-boy');

    $app->get('/mankatsu/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Mankatsu';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Non-Lupin'] = '/anime/non-lupin';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['nonNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/non-lupin/mankatsu/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(4196);

      $app->render('view/anime/non-lupin/mankatsu.php', $pageData);
    })->name('mankatsu');

    $app->get('/gundoh-musashi/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';
      $includeCss[] = '/dist/css/timeline/assets/css/card.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';
      $includeJs[] = '/dist/js/timeline/assets/js/jquery.timeline.min.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); jQuery("#episode-timeline").timeline({startItem : "09/04/2006", closeText : "x"}); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Gundoh Musashi';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Non-Lupin'] = '/anime/non-lupin';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['nonNav'] = true;

      $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/anime/non-lupin/gundoh-musashi/media");
      $pageData['annData'] = $pageUtil->GetAnimeData(6452);

      $app->render('view/anime/non-lupin/gundoh-musashi.php', $pageData);
    })->name('gundoh-musashi');

    $app->get('/bakumatsu-gijinden-roman/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';
      $includeCss[] = '/dist/css/timeline/assets/css/card.css';

      $includeJs = array ();
      $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
      $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';
      $includeJs[] = '/dist/js/timeline/assets/js/jquery.timeline.min.js';

      $inlineJs = array ();
      $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); jQuery("#episode-timeline").timeline({startItem : "07/01/2013", closeText : "x"}); });';

      $pageData = array ();
      $pageData['pageTitle'] = 'Bakumatsu Gijinden Roman';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Anime'] = '';
      $nav['Non-Lupin'] = '/anime/non-lupin';
      $pageData['nav'] = $nav;
      $pageData['animeNav'] = true;
      $pageData['nonNav'] = true;

      $pageData['annData'] = $pageUtil->GetAnimeData(14868);

      $app->render('view/anime/non-lupin/bakumatsu-gijinden-roman.php', $pageData);
    })->name('bakumatsu-gijinden-roman');
  });
});
