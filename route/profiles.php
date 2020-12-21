<?php

use sprak3000\lupinencyclopedia\Slim\Page;

$pageData = new Page\Data();

/**
 * Routes for /profile and below
 */
$app->group('/profile', function () use ($app, $pageData) {
    $app->get('/monkey-punch/', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Monkey Punch')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'monkeyPunchNav' => true]);

        $app->render('view/profile/monkey-punch.php', $data);
    })->name('profile-monkey-punch');

    $app->get('/maurice-leblanc/', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Maurice Leblanc')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'leblancNav' => true]);

        $app->render('view/profile/maurice-leblanc.php', $data);
    })->name('profile-maurice-leblanc');

    $app->get('/lupin-iii/', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Ars&egrave;ne Lupin III')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'lupinIIINav' => true]);

        $app->render('view/profile/lupin-iii.php', $data);
    })->name('profile-lupin-iii');

    $app->get('/jigen-daisuke/', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Jigen Daisuke')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'jigenDaisukeNav' => true]);

        $app->render('view/profile/jigen-daisuke.php', $data);
    })->name('profile-jigen-daisuke');

    $app->get('/ishikawa-goemon/', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Ishikawa Goemon')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'ishikawaGoemonNav' => true]);

        $app->render('view/profile/ishikawa-goemon.php', $data);
    })->name('profile-ishikawa-goemon');

    $app->get('/mine-fujiko/', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Mine Fujiko')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'mineFujikoNav' => true]);

        $app->render('view/profile/mine-fujiko.php', $data);
    })->name('profile-mine-fujiko');

    $app->get('/inspector-zenigata-koichi/', function () use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Inspector Zenigata Koichi')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'zenigataKoichiNav' => true]);

        $app->render('view/profile/inspector-zenigata-koichi.php', $data);
    })->name('profile-inspector-zenigata-koichi');
});
