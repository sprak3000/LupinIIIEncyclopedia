<?php
/**
 * Routes for /profile and below
 */
$app->group('/profile', function () use ($app) {
  $app->get('/monkey-punch/', function () use ($app) {
      $includeCss = array ();

      $includeJs = array ();

      $pageData = array ();
      $pageData['pageTitle'] = 'Monkey Punch';
      $pageData['pageDescription'] = '';
      $pageData['includeCss'] = $includeCss;
      $pageData['includeJs'] = $includeJs;

      $nav = array ();
      $nav['Profiles'] = '';
      $pageData['nav'] = $nav;
      $pageData['profilesNav'] = true;
      $pageData['monkeyPunchNav'] = true;

      $app->render('view/profile/monkey-punch.php', $pageData);
    })->name('profile-monkey-punch');

  $app->get('/maurice-leblanc/', function () use ($app) {
    $includeCss = array ();

    $includeJs = array ();

    $pageData = array ();
    $pageData['pageTitle'] = 'Maurice Leblanc';
    $pageData['pageDescription'] = '';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;

    $nav = array ();
    $nav['Profiles'] = '';
    $pageData['nav'] = $nav;
    $pageData['profilesNav'] = true;
    $pageData['leblancNav'] = true;

    $app->render('view/profile/maurice-leblanc.php', $pageData);
  })->name('profile-maurice-leblanc');

  $app->get('/lupin-iii/', function () use ($app) {
    $includeCss = array ();

    $includeJs = array ();

    $pageData = array ();
    $pageData['pageTitle'] = 'Ars&egrave;ne Lupin III';
    $pageData['pageDescription'] = '';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;

    $nav = array ();
    $nav['Profiles'] = '';
    $pageData['nav'] = $nav;
    $pageData['profilesNav'] = true;
    $pageData['lupinIIINav'] = true;

    $app->render('view/profile/lupin-iii.php', $pageData);
  })->name('profile-lupin-iii');

  $app->get('/jigen-daisuke/', function () use ($app) {
    $includeCss = array ();

    $includeJs = array ();

    $pageData = array ();
    $pageData['pageTitle'] = 'Jigen Daisuke';
    $pageData['pageDescription'] = '';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;

    $nav = array ();
    $nav['Profiles'] = '';
    $pageData['nav'] = $nav;
    $pageData['profilesNav'] = true;
    $pageData['jigenDaisukeNav'] = true;

    $app->render('view/profile/jigen-daisuke.php', $pageData);
  })->name('profile-jigen-daisuke');

  $app->get('/ishikawa-goemon/', function () use ($app) {
    $includeCss = array ();

    $includeJs = array ();

    $pageData = array ();
    $pageData['pageTitle'] = 'Ishikawa Goemon';
    $pageData['pageDescription'] = '';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;

    $nav = array ();
    $nav['Profiles'] = '';
    $pageData['nav'] = $nav;
    $pageData['profilesNav'] = true;
    $pageData['ishikawaGoemonNav'] = true;

    $app->render('view/profile/ishikawa-goemon.php', $pageData);
  })->name('profile-ishikawa-goemon');

  $app->get('/mine-fujiko/', function () use ($app) {
    $includeCss = array ();

    $includeJs = array ();

    $pageData = array ();
    $pageData['pageTitle'] = 'Mine Fujiko';
    $pageData['pageDescription'] = '';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;

    $nav = array ();
    $nav['Profiles'] = '';
    $pageData['nav'] = $nav;
    $pageData['profilesNav'] = true;
    $pageData['mineFujikoNav'] = true;

    $app->render('view/profile/mine-fujiko.php', $pageData);
  })->name('profile-mine-fujiko');

  $app->get('/inspector-zenigata-koichi/', function () use ($app) {
    $includeCss = array ();

    $includeJs = array ();

    $pageData = array ();
    $pageData['pageTitle'] = 'Inspector Zenigata Koichi';
    $pageData['pageDescription'] = '';
    $pageData['includeCss'] = $includeCss;
    $pageData['includeJs'] = $includeJs;

    $nav = array ();
    $nav['Profiles'] = '';
    $pageData['nav'] = $nav;
    $pageData['profilesNav'] = true;
    $pageData['zenigataKoichiNav'] = true;

    $app->render('view/profile/inspector-zenigata-koichi.php', $pageData);
  })->name('profile-inspector-zenigata-koichi');

});