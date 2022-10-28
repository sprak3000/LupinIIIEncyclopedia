<?php

use sprak3000\lupinencyclopedia\Slim\Page;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\app;

$pageData = new Page\Data();

/**
 * Routes for /profile and below
 */
$app->group('/profile', function (App $app) use ($pageData) {
    $app->get('/monkey-punch', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Monkey Punch')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'monkeyPunchNav' => true]);

        return $this->view->render($res, 'view/profile/monkey-punch.php', $data);
    })->setName('profile-monkey-punch');

    $app->get('/maurice-leblanc', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Maurice Leblanc')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'leblancNav' => true]);

        return $this->view->render($res, 'view/profile/maurice-leblanc.php', $data);
    })->setName('profile-maurice-leblanc');

    $app->get('/lupin-iii', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Ars&egrave;ne Lupin III')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'lupinIIINav' => true]);

        return $this->view->render($res, 'view/profile/lupin-iii.php', $data);
    })->setName('profile-lupin-iii');

    $app->get('/jigen-daisuke', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Jigen Daisuke')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'jigenDaisukeNav' => true]);

        return $this->view->render($res, 'view/profile/jigen-daisuke.php', $data);
    })->setName('profile-jigen-daisuke');

    $app->get('/ishikawa-goemon', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Ishikawa Goemon')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'ishikawaGoemonNav' => true]);

        return $this->view->render($res, 'view/profile/ishikawa-goemon.php', $data);
    })->setName('profile-ishikawa-goemon');

    $app->get('/mine-fujiko', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Mine Fujiko')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'mineFujikoNav' => true]);

        return $this->view->render($res, 'view/profile/mine-fujiko.php', $data);
    })->setName('profile-mine-fujiko');

    $app->get('/inspector-zenigata-koichi', function (Request $req,  Response $res, $args = []) use ($app, $pageData) {
        $data = $pageData
            ->withTitle('Inspector Zenigata Koichi')
            ->withNavigation([
                'Profiles' => '',
            ])
            ->data(['profilesNav' => true, 'zenigataKoichiNav' => true]);

        return $this->view->render($res, 'view/profile/inspector-zenigata-koichi.php', $data);
    })->setName('profile-inspector-zenigata-koichi');
});
