<?php

use sprak3000\lupinencyclopedia\Slim\Page;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\app;

$pageUtil = new Page\Util();
$pageData = new Page\Data();

/**
 * Routes for /games and below
 */
$app->group('/games', function (App $app) use ($pageUtil, $pageData) {
    /**
     * Route(s) for base game page
     */
    $app->get('', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
        $data = $pageData
            ->withTitle('Games')
            ->data(['gamesNav' => true]);

        return $this->view->render($res, 'view/games/index.php', $data);
    })->setName('games');

    /**
     * Route(s) for Super Cassette Vision
     */
    $app->get('/super-cassette-vision/lupin-iii', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
        $data = $pageData
            ->withTitle('Lupin III')
            ->withNavigation([
                'Games' => '/games',
                'Super Cassette Vision' => '',
            ])
            ->data(['gamesNav' => true]);

        return $this->view->render($res, 'view/games/super-cassette-vision/lupin-iii.php', $data);
    })->setName('super-cassette-vision-lupin-iii');

    /**
     * Routes for Nintendo
     */
    $app->group('/nintendo', function (App $app) use ($pageUtil, $pageData) {
        /**
         * Routes for DS
         */
        $app->group('/ds', function (App $app) use ($pageUtil, $pageData) {
            $app->get('/shijyou-saidai-no-sunou-ikusa', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Shijyou Saidai no Sunou Ikusa')
                    ->withNavigation([
                        'Games' => '/games',
                        'Nintendo DS' => '',
                    ])
                    ->withGallery(__DIR__ . "/../public/dist/asset/img/games/nintendo/ds/shijyou-saidai-no-sunou-ikusa/media")
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/nintendo/ds/shijyou-saidai-no-sunou-ikusa.php', $data);
            })->setName('nintendo-ds-shijyou-saidai-no-sunou-ikusa');
        });

        /**
         * Routes for Gamecube
         */
        $app->group('/gamecube', function (App $app) use ($pageUtil, $pageData) {
            $app->get('/umi-ni-kieta-hihou', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Umi ni Kieta Hihou')
                    ->withNavigation([
                        'Games' => '/games',
                        'Nintendo GameCube' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/nintendo/gamecube/umi-ni-kieta-hihou.php', $data);
            })->setName('nintendo-gamecube-umi-ni-kieta-hihou');
        });

        /**
         * Routes for Super Famicom
         */
        $app->group('/super-famicom', function (App $app) use ($pageUtil, $pageData) {
            $app->get('/lupin-iii-densetsu-no-hihou-o-oe', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Lupin III: Densetsu no Hihou o Oe!')
                    ->withNavigation([
                        'Games' => '/games',
                        'Nintendo Super Famicom' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/nintendo/super-famicom/lupin-iii-densetsu-no-hihou-o-oe.php', $data);
            })->setName('nintendo-super-famicom-lupin-iii-densetsu-no-hihou-o-oe');
        });

        /**
         * Routes for Gameboy
         */
        $app->group('/gameboy', function (App $app) use ($pageUtil, $pageData) {
            $app->get('/sd-lupin-iii-kinko-yaburi-daisakusen', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('SD Lupin III Kinko Yaburi Daisakusen')
                    ->withNavigation([
                        'Games' => '/games',
                        'Nintendo Gameboy' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/nintendo/gameboy/sd-lupin-iii-kinko-yaburi-daisakusen.php', $data);
            })->setName('nintendo-gameboy-sd-lupin-iii-kinko-yaburi-daisakusen');
        });

        /**
         * Routes for Famicom
         */
        $app->group('/famicom', function (App $app) use ($pageUtil, $pageData) {
            $app->get('/lupin-iii-pandora-no-isan', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Lupin III: Pandora no Isan')
                    ->withNavigation([
                        'Games' => '/games',
                        'Nintendo Famicom' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/nintendo/famicom/lupin-iii-pandora-no-isan.php', $data);
            })->setName('nintendo-famicom-lupin-iii-pandora-no-isan');
        });
    });

    /**
     * Routes for Sony
     */
    $app->group('/sony', function (App $app) use ($pageUtil, $pageData) {
        /**
         * Routes for PS1
         */
        $app->group('/playstation', function (App $app) use ($pageUtil, $pageData) {
            $app->get('/lupin-iii-chateau-de-cagliostro-saikai', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Lupin III: Chateau de Cagliostro Saikai')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/ps1/lupin-iii-chateau-de-cagliostro-saikai.php', $data);
            })->setName('sony-ps1-lupin-iii-chateau-de-cagliostro-saikai');

            $app->get('/lupin-the-3rd', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Lupin the 3rd')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/ps1/lupin-the-3rd.php', $data);
            })->setName('sony-ps1-lupin-the-3rd');

            $app->get('/heiwa-parlor-pro-lupin-the-iii-special', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('HEIWA Parlor! PRO LUPIN the III Special')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/ps1/heiwa-parlor-pro-lupin-the-iii-special.php', $data);
            })->setName('sony-ps1-heiwa-parlor-pro-lupin-the-iii-special');

            $app->get('/punch-the-monkey-game-edition', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('PUNCH THE MONKEY! GAME EDITION')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/ps1/punch-the-monkey-game-edition.php', $data);
            })->setName('sony-ps1-punch-the-monkey-game-edition');

            $app->get('/pachi-slot-simulator-7-maker-suishou-manual', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('PACHI-SLOT Simulator 7 maker suishou manual')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/ps1/pachi-slot-simulator-7-maker-suishou-manual.php', $data);
            })->setName('sony-ps1-pachi-slot-simulator-7-maker-suishou-manual');

            $app->get('/heiwa-parlor-pro-fujiko-ni-o-ma-ka-se-special', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('HEIWA Parlor! PRO Fujiko ni o.ma.ka.se Special')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/ps1/heiwa-parlor-pro-fujiko-ni-o-ma-ka-se-special.php', $data);
            })->setName('sony-ps1-heiwa-parlor-pro-fujiko-ni-o-ma-ka-se-special');

            $app->get('/parlor-pro-jr-vol-2', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Parlor! PRO Jr. Vol.2')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/ps1/parlor-pro-jr-vol-2.php', $data);
            })->setName('sony-ps1-parlor-pro-jr-vol-2');

            $app->get('/pachinko-pachislot-parlor-pro-ex-cr-inakappe-daishou-a',
                function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                    $data = $pageData
                        ->withTitle('Pachinko &amp; Pachislot Parlor! PRO EX CR.Inakappe Daishou A &amp;')
                        ->withNavigation([
                            'Games' => '/games',
                            'Sony Playstation' => '',
                        ])
                        ->data(['gamesNav' => true]);

                    return $this->view->render($res, 'view/games/sony/ps1/pachinko-pachislot-parlor-pro-ex-cr-inakappe-daishou-a.php',
                        $data);
                })->setName('sony-ps1-pachinko-pachislot-parlor-pro-ex-cr-inakappe-daishou-a');
        });

        /**
         * Routes for PS2
         */
        $app->group('/playstation-2', function (App $app) use ($pageUtil, $pageData) {
            $app->get('/lupin-iii-majutsu-ou-no-isan', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Lupin III: Majutsu-Ou no Isan')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation 2' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/ps2/lupin-iii-majutsu-ou-no-isan.php', $data);
            })->setName('sony-ps2-lupin-iii-majutsu-ou-no-isan');

            $app->get('/slot-pro-dx-fujiko-2', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Slot! Pro Dx: Fujiko 2')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation 2' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/ps2/slot-pro-dx-fujiko-2.php', $data);
            })->setName('sony-ps2-slot-pro-dx-fujiko-2');

            $app->get('/lupin-iii-columbus-no-isan-wa-akenisomaru', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Lupin III: Columbus no Isan wa Akenisomaru')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation 2' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/ps2/lupin-iii-columbus-no-isan-wa-akenisomaru.php', $data);
            })->setName('sony-ps2-lupin-iii-columbus-no-isan-wa-akenisomaru');

            $app->get('/slotter-up-core-5-lupin-daisuki-shuyaku-wa-zenigata',
                function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                    $data = $pageData
                        ->withTitle('Slotter Up Core 5 Lupin Daisuki! Shuyaku wa Zenigata')
                        ->withNavigation([
                            'Games' => '/games',
                            'Sony Playstation 2' => '',
                        ])
                        ->data(['gamesNav' => true]);

                    return $this->view->render($res, 'view/games/sony/ps2/slotter-up-core-5-lupin-daisuki-shuyaku-wa-zenigata.php',
                        $data);
                })->setName('sony-ps2-slotter-up-core-5-lupin-daisuki-shuyaku-wa-zenigata');

            $app->get('/lupin-iii-lupin-niwa-shi-o-zenigata-niwa-koi-o', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('LuLupin III: Lupin niwa shi o, Zenigata niwa koi o')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation 2' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/ps2/lupin-iii-lupin-niwa-shi-o-zenigata-niwa-koi-o.php', $data);
            })->setName('sony-ps2-lupin-iii-lupin-niwa-shi-o-zenigata-niwa-koi-o');
        });

        /**
         * Routes for PSP
         */
        $app->group('/playstation-portable', function (App $app) use ($pageUtil, $pageData) {
            $app->get('/shuyaku-wa-zenigata', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Shuyaku wa Zenigata')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sony Playstation Portable' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sony/psp/shuyaku-wa-zenigata.php', $data);
            })->setName('sony-psp-shuyaku-wa-zenigata');
        });
    });

    /**
     * Routes for Arcade
     */
    $app->group('/arcade', function (App $app) use ($pageUtil, $pageData) {
        $app->get('/lupin-iii', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin III')
                ->withNavigation([
                    'Games' => '/games',
                    'Arcade' => '',
                ])
                ->data(['gamesNav' => true]);

            return $this->view->render($res, 'view/games/arcade/lupin-iii.php', $data);
        })->setName('arcade-lupin-iii');

        $app->get('/cliff-hanger', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Cliff Hanger')
                ->withNavigation([
                    'Games' => '/games',
                    'Arcade' => '',
                ])
                ->data(['gamesNav' => true]);

            return $this->view->render($res, 'view/games/arcade/cliff-hanger.php', $data);
        })->setName('arcade-cliff-hanger');

        $app->get('/lupin-the-3rd-the-shooting', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin the 3rd: The Shooting')
                ->withNavigation([
                    'Games' => '/games',
                    'Arcade' => '',
                ])
                ->data(['gamesNav' => true]);

            return $this->view->render($res, 'view/games/arcade/lupin-the-3rd-the-shooting.php', $data);
        })->setName('arcade-lupin-the-3rd-the-shooting');

        $app->get('/lupin-the-3rd-the-typing', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin the 3rd: The Typing')
                ->withNavigation([
                    'Games' => '/games',
                    'Arcade' => '',
                ])
                ->data(['gamesNav' => true]);

            return $this->view->render($res, 'view/games/arcade/lupin-the-3rd-the-typing.php', $data);
        })->setName('arcade-lupin-the-3rd-the-typing');
    });

    /**
     * Routes for Sega
     */
    $app->group('/sega', function (App $app) use ($pageUtil, $pageData) {
        /**
         * Routes for Sega Saturn
         */
        $app->group('/saturn', function (App $app) use ($pageUtil, $pageData) {
            $app->get('/lupin-the-3rd-the-master-file', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Lupin the 3rd: The Master File')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sega Saturn' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sega/saturn/lupin-the-3rd-the-master-file.php', $data);
            })->setName('sega-saturn-lupin-the-3rd-the-master-file');

            $app->get('/lupin-the-3rd-chronicles', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Lupin the 3rd Chronicles')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sega Saturn' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sega/saturn/lupin-the-3rd-chronicles.php', $data);
            })->setName('sega-saturn-lupin-the-3rd-chronicles');

            $app->get('/lupin-iii-sage-of-the-pyramid', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
                $data = $pageData
                    ->withTitle('Lupin III: Sage of the Pyramid')
                    ->withNavigation([
                        'Games' => '/games',
                        'Sega Saturn' => '',
                    ])
                    ->data(['gamesNav' => true]);

                return $this->view->render($res, 'view/games/sega/saturn/lupin-iii-sage-of-the-pyramid.php', $data);
            })->setName('sega-saturn-lupin-iii-sage-of-the-pyramid');
        });
    });

    /**
     * Routes for MSX
     */
    $app->group('/msx', function (App $app) use ($pageUtil, $pageData) {
        $app->get('/castle-of-cagliostro', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Castle of Cagliostro')
                ->withNavigation([
                    'Games' => '/games',
                    'MSX' => '',
                ])
                ->data(['gamesNav' => true]);

            return $this->view->render($res, 'view/games/msx/castle-of-cagliostro.php', $data);
        })->setName('msx-castle-of-cagliostro');

        $app->get('/legend-of-the-gold-of-babylon', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Legend of the Gold of Babylon')
                ->withNavigation([
                    'Games' => '/games',
                    'MSX' => '',
                ])
                ->data(['gamesNav' => true]);

            return $this->view->render($res, 'view/games/msx/legend-of-the-gold-of-babylon.php', $data);
        })->setName('msx-legend-of-the-gold-of-babylon');
    });

    /**
     * Routes for NEC PC-8801
     */
    $app->group('/nec-pc-8801', function (App $app) use ($pageUtil, $pageData) {
        $app->get('/castle-of-cagliostro', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Castle of Cagliostro')
                ->withNavigation([
                    'Games' => '/games',
                    'NEC PC-8801' => '',
                ])
                ->data(['gamesNav' => true]);

            return $this->view->render($res, 'view/games/nec-pc-8801/castle-of-cagliostro.php', $data);
        })->setName('nec-pc-8801-castle-of-cagliostro');

        $app->get('/legend-of-the-gold-of-babylon', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Legend of the Gold of Babylon')
                ->withNavigation([
                    'Games' => '/games',
                    'NEC PC-8801' => '',
                ])
                ->data(['gamesNav' => true]);

            return $this->view->render($res, 'view/games/nec-pc-8801/legend-of-the-gold-of-babylon.php', $data);
        })->setName('nec-pc-8801-legend-of-the-gold-of-babylon');
    });
});
