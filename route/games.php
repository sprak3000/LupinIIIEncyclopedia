<?php
use sprak3000\lupinencyclopedia\Slim\Page;

$pageUtil = new Page\Util();

/**
 * Routes for /games and below
 */
$app->group('/games', function () use ($app, $pageUtil) {
  /**
   * Route(s) for base game page
   */
  $app->get('/', function () use ($app, $pageUtil) {
    $includeCss = array ();

    $includeJs = array ();

    $inlineJs = array ();

    $pageData = array ();
    $pageData['pageTitle'] = 'Games';
    $pageData['pageDescription'] = '';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;
    $pageData['inlineJs'] = $inlineJs;

    $nav = array ();
    $pageData['nav'] = $nav;
    $pageData['gamesNav'] = true;

    $app->render('view/games/index.php', $pageData);
  })->name('games');

  /**
   * Route(s) for Super Cassette Vision
   */
  $app->get('/super-cassette-vision/lupin-iii/', function () use ($app, $pageUtil) {
    $includeCss = array ();

    $includeJs = array ();

    $inlineJs = array ();

    $pageData = array ();
    $pageData['pageTitle'] = 'Lupin III';
    $pageData['pageDescription'] = '';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;
    $pageData['inlineJs'] = $inlineJs;

    $nav = array ();
    $nav['Games'] = '/games';
    $nav['Super Cassette Vision'] = '';
    $pageData['nav'] = $nav;
    $pageData['gamesNav'] = true;

    $app->render('view/games/super-cassette-vision/lupin-iii.php', $pageData);
  })->name('super-cassette-vision-lupin-iii');

  /**
   * Routes for Nintendo
   */
  $app->group('/nintendo', function () use ($app, $pageUtil) {

    /**
     * Routes for DS
     */
    $app->group('/ds', function () use ($app, $pageUtil) {
      $app->get('/shijyou-saidai-no-sunou-ikusa/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';
        $includeCss[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';

        $includeJs = array ();
        $includeJs[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
        $includeJs[] = '/dist/unify-1.8/js/plugins/fancy-box.js';

        $inlineJs = array ();
        $inlineJs[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

        $pageData = array ();
        $pageData['pageTitle'] = 'Shijyou Saidai no Sunou Ikusa';
        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Nintendo DS'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $pageData['images'] = $pageUtil->GetImagesForGallery(__DIR__ . "/../public/dist/asset/img/games/nintendo/ds/shijyou-saidai-no-sunou-ikusa/media");

        $app->render('view/games/nintendo/ds/shijyou-saidai-no-sunou-ikusa.php', $pageData);
      })->name('nintendo-ds-shijyou-saidai-no-sunou-ikusa');
    });

    /**
     * Routes for Gamecube
     */
    $app->group('/gamecube', function () use ($app, $pageUtil) {
      $app->get('/umi-ni-kieta-hihou/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Umi ni Kieta Hihou';
        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Nintendo Gamecube'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/nintendo/gamecube/umi-ni-kieta-hihou.php', $pageData);
      })->name('nintendo-gamecube-umi-ni-kieta-hihou');
    });

    /**
     * Routes for Super Famicom
     */
    $app->group('/super-famicom', function () use ($app, $pageUtil) {
      $app->get('/lupin-iii-densetsu-no-hihou-o-oe/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Lupin III: Densetsu no Hihou o Oe!';
        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Nintendo Super Famicom'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/nintendo/super-famicom/lupin-iii-densetsu-no-hihou-o-oe.php', $pageData);
      })->name('nintendo-super-famicom-lupin-iii-densetsu-no-hihou-o-oe');
    });

    /**
     * Routes for Gameboy
     */
    $app->group('/gameboy', function () use ($app, $pageUtil) {
      $app->get('/sd-lupin-iii-kinko-yaburi-daisakusen/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'SD Lupin III Kinko Yaburi Daisakusen';
        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Nintendo Gameboy'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/nintendo/gameboy/sd-lupin-iii-kinko-yaburi-daisakusen.php', $pageData);
      })->name('nintendo-gameboy-sd-lupin-iii-kinko-yaburi-daisakusen');
    });

    /**
     * Routes for Famicom
     */
    $app->group('/famicom', function () use ($app, $pageUtil) {
      $app->get('/lupin-iii-pandora-no-isan/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Lupin III: Pandora no Isan';
        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Nintendo Famicom'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/nintendo/famicom/lupin-iii-pandora-no-isan.php', $pageData);
      })->name('nintendo-famicom-lupin-iii-pandora-no-isan');
    });
  });

  /**
   * Routes for Sony
   */
  $app->group('/sony', function () use ($app, $pageUtil) {
    /**
     * Routes for PS1
     */
    $app->group('/playstation', function () use ($app, $pageUtil) {
      $app->get('/lupin-iii-chateau-de-cagliostro-saikai/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Lupin III: Chateau de Cagliostro Saikai';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps1/lupin-iii-chateau-de-cagliostro-saikai.php', $pageData);
      })->name('sony-ps1-lupin-iii-chateau-de-cagliostro-saikai');

      $app->get('/lupin-the-3rd/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Lupin the 3rd';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps1/lupin-the-3rd.php', $pageData);
      })->name('sony-ps1-lupin-the-3rd');

      $app->get('/heiwa-parlor-pro-lupin-the-iii-special/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'HEIWA Parlor! PRO LUPIN the III Special';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps1/heiwa-parlor-pro-lupin-the-iii-special.php', $pageData);
      })->name('sony-ps1-heiwa-parlor-pro-lupin-the-iii-special');

      $app->get('/punch-the-monkey-game-edition/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'PUNCH THE MONKEY! GAME EDITION';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps1/punch-the-monkey-game-edition.php', $pageData);
      })->name('sony-ps1-punch-the-monkey-game-edition');

      $app->get('/pachi-slot-simulator-7-maker-suishou-manual/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'PACHI-SLOT Simulator 7 maker suishou manual';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps1/pachi-slot-simulator-7-maker-suishou-manual.php', $pageData);
      })->name('sony-ps1-pachi-slot-simulator-7-maker-suishou-manual');

      $app->get('/heiwa-parlor-pro-fujiko-ni-o-ma-ka-se-special/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'HEIWA Parlor! PRO Fujiko ni o.ma.ka.se Special';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps1/heiwa-parlor-pro-fujiko-ni-o-ma-ka-se-special.php', $pageData);
      })->name('sony-ps1-heiwa-parlor-pro-fujiko-ni-o-ma-ka-se-special');

      $app->get('/parlor-pro-jr-vol-2/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Parlor! PRO Jr. Vol.2';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps1/parlor-pro-jr-vol-2.php', $pageData);
      })->name('sony-ps1-parlor-pro-jr-vol-2');

      $app->get('/pachinko-pachislot-parlor-pro-ex-cr-inakappe-daishou-a/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Pachinko &amp; Pachislot Parlor! PRO EX CR.Inakappe Daishou A &amp;';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps1/pachinko-pachislot-parlor-pro-ex-cr-inakappe-daishou-a.php', $pageData);
      })->name('sony-ps1-pachinko-pachislot-parlor-pro-ex-cr-inakappe-daishou-a');
    });

    /**
     * Routes for PS2
     */
    $app->group('/playstation-2', function () use ($app, $pageUtil) {
      $app->get('/lupin-iii-majutsu-ou-no-isan/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Lupin III: Majutsu-Ou no Isan';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation 2'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps2/lupin-iii-majutsu-ou-no-isan.php', $pageData);
      })->name('sony-ps2-lupin-iii-majutsu-ou-no-isan');

      $app->get('/slot-pro-dx-fujiko-2/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Slot! Pro Dx: Fujiko 2';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation 2'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps2/slot-pro-dx-fujiko-2.php', $pageData);
      })->name('sony-ps2-slot-pro-dx-fujiko-2');

      $app->get('/lupin-iii-columbus-no-isan-wa-akenisomaru/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Lupin III: Columbus no Isan wa Akenisomaru';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation 2'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps2/lupin-iii-columbus-no-isan-wa-akenisomaru.php', $pageData);
      })->name('sony-ps2-lupin-iii-columbus-no-isan-wa-akenisomaru');

      $app->get('/slotter-up-core-5-lupin-daisuki-shuyaku-wa-zenigata/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Slotter Up Core 5 Lupin Daisuki! Shuyaku wa Zenigata';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation 2'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps2/slotter-up-core-5-lupin-daisuki-shuyaku-wa-zenigata.php', $pageData);
      })->name('sony-ps2-slotter-up-core-5-lupin-daisuki-shuyaku-wa-zenigata');

      $app->get('/lupin-iii-lupin-niwa-shi-o-zenigata-niwa-koi-o/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Lupin III: Lupin niwa shi o, Zenigata niwa koi o';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation 2'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/ps2/lupin-iii-lupin-niwa-shi-o-zenigata-niwa-koi-o.php', $pageData);
      })->name('sony-ps2-lupin-iii-lupin-niwa-shi-o-zenigata-niwa-koi-o');
    });

    /**
     * Routes for PSP
     */
    $app->group('/playstation-portable', function () use ($app, $pageUtil) {
      $app->get('/shuyaku-wa-zenigata/', function () use ($app, $pageUtil) {
        $includeCss = array ();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array ();

        $inlineJs = array ();

        $pageData = array ();
        $pageData['pageTitle'] = 'Shuyaku wa Zenigata';

        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array ();
        $nav['Games'] = '/games';
        $nav['Sony Playstation Portable'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sony/psp/shuyaku-wa-zenigata.php', $pageData);
      })->name('sony-psp-shuyaku-wa-zenigata');
    });
  });

  /**
   * Routes for Arcade
   */
  $app->group('/arcade', function () use ($app, $pageUtil) {

    $app->get('/lupin-iii/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin III';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Games'] = '/games';
      $nav['Arcade'] = '';
      $pageData['nav'] = $nav;
      $pageData['gamesNav'] = true;

      $app->render('view/games/arcade/lupin-iii.php', $pageData);
    })->name('arcade-lupin-iii');

    $app->get('/cliff-hanger/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Cliff Hanger';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Games'] = '/games';
      $nav['Arcade'] = '';
      $pageData['nav'] = $nav;
      $pageData['gamesNav'] = true;

      $app->render('view/games/arcade/cliff-hanger.php', $pageData);
    })->name('arcade-cliff-hanger');

    $app->get('/lupin-the-3rd-the-shooting/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin the 3rd: The Shooting';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Games'] = '/games';
      $nav['Arcade'] = '';
      $pageData['nav'] = $nav;
      $pageData['gamesNav'] = true;

      $app->render('view/games/arcade/lupin-the-3rd-the-shooting.php', $pageData);
    })->name('arcade-lupin-the-3rd-the-shooting');

    $app->get('/lupin-the-3rd-the-typing/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Lupin the 3rd: The Typing';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Games'] = '/games';
      $nav['Arcade'] = '';
      $pageData['nav'] = $nav;
      $pageData['gamesNav'] = true;

      $app->render('view/games/arcade/lupin-the-3rd-the-typing.php', $pageData);
    })->name('arcade-lupin-the-3rd-the-typing');
  });

  /**
   * Routes for Sega
   */
  $app->group('/sega', function () use ($app, $pageUtil) {

    /**
     * Routes for Sega Saturn
     */
    $app->group('/saturn', function () use ($app, $pageUtil) {
      $app->get('/lupin-the-3rd-the-master-file/', function () use ($app, $pageUtil) {
        $includeCss = array();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array();

        $inlineJs = array();

        $pageData = array();
        $pageData['pageTitle'] = 'Lupin the 3rd: The Master File';
        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array();
        $nav['Games'] = '/games';
        $nav['Sega Saturn'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sega/saturn/lupin-the-3rd-the-master-file.php', $pageData);
      })->name('sega-saturn-lupin-the-3rd-the-master-file');

      $app->get('/lupin-the-3rd-chronicles/', function () use ($app, $pageUtil) {
        $includeCss = array();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array();

        $inlineJs = array();

        $pageData = array();
        $pageData['pageTitle'] = 'Lupin the 3rd Chronicles';
        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array();
        $nav['Games'] = '/games';
        $nav['Sega Saturn'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sega/saturn/lupin-the-3rd-chronicles.php', $pageData);
      })->name('sega-saturn-lupin-the-3rd-chronicles');

      $app->get('/lupin-iii-sage-of-the-pyramid/', function () use ($app, $pageUtil) {
        $includeCss = array();
        $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

        $includeJs = array();

        $inlineJs = array();

        $pageData = array();
        $pageData['pageTitle'] = 'Lupin III: Sage of the Pyramid';
        $pageData['pageDescription'] = '';
        $pageData['includeCss'] = $includeCss;
        $pageData['includeJs'] = $includeJs;
        $pageData['inlineJs'] = $inlineJs;

        $nav = array();
        $nav['Games'] = '/games';
        $nav['Sega Saturn'] = '';
        $pageData['nav'] = $nav;
        $pageData['gamesNav'] = true;

        $app->render('view/games/sega/saturn/lupin-iii-sage-of-the-pyramid.php', $pageData);
      })->name('sega-saturn-lupin-iii-sage-of-the-pyramid');
    });
  });

  /**
   * Routes for MSX
   */
  $app->group('/msx', function () use ($app, $pageUtil) {

    $app->get('/castle-of-cagliostro/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Castle of Cagliostro';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Games'] = '/games';
      $nav['MSX'] = '';
      $pageData['nav'] = $nav;
      $pageData['gamesNav'] = true;

      $app->render('view/games/msx/castle-of-cagliostro.php', $pageData);
    })->name('msx-castle-of-cagliostro');

    $app->get('/legend-of-the-gold-of-babylon/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Legend of the Gold of Babylon';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Games'] = '/games';
      $nav['MSX'] = '';
      $pageData['nav'] = $nav;
      $pageData['gamesNav'] = true;

      $app->render('view/games/msx/legend-of-the-gold-of-babylon.php', $pageData);
    })->name('msx-legend-of-the-gold-of-babylon');
  });

  /**
   * Routes for NEC PC-8801
   */
  $app->group('/nec-pc-8801', function () use ($app, $pageUtil) {

    $app->get('/castle-of-cagliostro/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Castle of Cagliostro';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Games'] = '/games';
      $nav['NEC PC-8801'] = '';
      $pageData['nav'] = $nav;
      $pageData['gamesNav'] = true;

      $app->render('view/games/nec-pc-8801/castle-of-cagliostro.php', $pageData);
    })->name('nec-pc-8801-castle-of-cagliostro');

    $app->get('/legend-of-the-gold-of-babylon/',function () use ($app, $pageUtil) {
      $includeCss = array ();
      $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';

      $includeJs = array ();

      $inlineJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Legend of the Gold of Babylon';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;
      $pageData['inlineJs'] = $inlineJs;

      $nav = array ();
      $nav['Games'] = '/games';
      $nav['NEC PC-8801'] = '';
      $pageData['nav'] = $nav;
      $pageData['gamesNav'] = true;

      $app->render('view/games/nec-pc-8801/legend-of-the-gold-of-babylon.php', $pageData);
    })->name('nec-pc-8801-legend-of-the-gold-of-babylon');

  });

});