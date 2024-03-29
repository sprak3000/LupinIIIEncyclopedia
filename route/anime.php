<?php

use sprak3000\lupinencyclopedia\Slim\Page;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\app;

$pageUtil = new Page\Util();
$pageData = new Page\Data();

/**
 * Routes for /anime and below
 */
$app->group('/anime', function (App $app) use ($pageUtil, $pageData) {
    /**
     * Route(s) for the Pilot Film
     */
    $app->get('/pilot-film', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
        $data = $pageData
            ->withTitle('Lupin III Pilot Film')
            ->withNavigation([
                'Anime' => '',
            ])
            ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/pilot-film/media')
            ->data([
                'animeNav' => true,
                'pilotNav' => true,
                'view' => $this->view,
            ]);

        return $this->view->render($res, 'view/anime/pilot-film.php', $data);
    })->setName('pilot-film');

    /**
     * Routes for Theatrical Films
     */
    $app->group('/theatrical-films', function (App $app) use ($pageUtil, $pageData) {
        $app->get('', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Theatrical Films')
                ->withNavigation([
                    'Anime' => '',
                ])
                ->withTimeline()
                ->data(['animeNav' => true, 'filmNav' => true,]);

            return $this->view->render($res, 'view/anime/theatrical-films.php', $data);
        })->setName('theatrical-films');

        $app->get('/the-first', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin III THE FIRST')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->withAnimeNewsNetworkData(22309)
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/the-first.php', $data);
        })->setName('the-first');

        $app->get('/fujiko-mines-lie', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Fujiko Mine\'s Lie')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->withAnimeNewsNetworkData(22089)
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/fujiko-mines-lie.php', $data);
        })->setName('fujiko-mines-lie');

        $app->get('/goemon-spray-blood', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Goemon Ishikawa\'s Spray of Blood')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->withAnimeNewsNetworkData(18730)
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/goemon-spray-blood.php', $data);
        })->setName('goemon-spray-blood');

        $app->get('/jigen-daisuke-gravestone', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Jigen Daisuke\'s Gravestone')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->withAnimeNewsNetworkData(16148)
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/jigen-daisuke-gravestone.php', $data);
        })->setName('jigen-daisuke-gravestone');

        $app->get('/strange-psychokinetic-strategy', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Strange Psychokinetic Strategy')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/strange-psychokinetic-strategy.php', $data);
        })->setName('strange-psychokinetic-strategy');

        $app->get('/castle-of-cagliostro', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Castle of Cagliostro')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->withGallery()
                ->withAnimeNewsNetworkData(127)
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/castle-of-cagliostro.php', $data);
        })->setName('castle-of-cagliostro');

        $app->get('/dead-or-alive', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Dead or Alive')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->withGallery()
                ->withAnimeNewsNetworkData(1039)
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/dead-or-alive.php', $data);
        })->setName('dead-or-alive');

        $app->get('/farewell-to-nostradamus', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Farewell to Nostradamus')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->withGallery()
                ->withAnimeNewsNetworkData(2098)
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/farewell-to-nostradamus.php', $data);
        })->setName('farewell-to-nostradamus');

        $app->get('/legend-of-the-gold-of-babylon', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Legend of the Gold of Babylon')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/theatrical-films/legend-of-the-gold-of-babylon/media')
                ->withAnimeNewsNetworkData(642)
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/legend-of-the-gold-of-babylon.php', $data);
        })->setName('legend-of-the-gold-of-babylon');

        $app->get('/lupin-the-third-2014', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin the Third (2014)')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->withGallery()
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/lupin-the-third-2014.php', $data);
        })->setName('lupin-the-third-2014');

        $app->get('/lupin-vs-detective-conan', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin the Third vs. Detective Conan: The Movie')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->withGallery()
                ->withAnimeNewsNetworkData(15284)
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/lupin-vs-detective-conan.php', $data);
        })->setName('lupin-vs-detective-conan');

        $app->get('/secret-of-mamo', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Secret of Mamo')
                ->withNavigation([
                    'Anime' => '',
                    'Theatrical Films' => '/anime/theatrical-films',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/theatrical-films/secret-of-mamo/media')
                ->withAnimeNewsNetworkData(1040)
                ->data([
                    'animeNav' => true,
                    'filmNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/theatrical-films/secret-of-mamo.php', $data);
        })->setName('secret-of-mamo');
    });

    /**
     * Routes for OVAs
     */
    $app->group('/original-video-animation', function (App $app) use ($pageUtil, $pageData) {
        $app->get('', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Original Video Animation (OVA)')
                ->withNavigation([
                    'Anime' => '',
                ])
                ->withTimeline()
                ->data([
                    'animeNav' => true,
                    'ovaNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/original-video-animation.php', $data);
        })->setName('original-video-animation');

        $app->get('/trailers-collection', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Trailers Collection \'71 - \'95')
                ->withNavigation([
                    'Anime' => '',
                    'OVA' => '/anime/ova',
                ])
                ->data([
                    'animeNav' => true,
                    'ovaNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/original-video-animation/trailers-collection.php', $data);
        })->setName('trailers-collection');

        $app->get('/secret-files-2', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('The Secret Files 2 ~Sound Collection~')
                ->withNavigation([
                    'Anime' => '',
                    'OVA' => '/anime/ova',
                ])
                ->data([
                    'animeNav' => true,
                    'ovaNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/original-video-animation/secret-files-2.php', $data);
        })->setName('secret-files-2');

        $app->get('/secret-files', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('The Secret Files')
                ->withNavigation([
                    'Anime' => '',
                    'OVA' => '/anime/ova',
                ])
                ->withAnimeNewsNetworkData(2097)
                ->data([
                    'animeNav' => true,
                    'ovaNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/original-video-animation/secret-files.php', $data);
        })->setName('secret-files');

        $app->get('/return-of-the-magician', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Return of the Magician')
                ->withNavigation([
                    'Anime' => '',
                    'OVA' => '/anime/ova',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/ova/return-of-the-magician/media')
                ->withAnimeNewsNetworkData(2023)
                ->data([
                    'animeNav' => true,
                    'ovaNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/original-video-animation/return-of-the-magician.php', $data);
        })->setName('return-of-the-magician');

        $app->get('/plot-of-the-fuma-clan', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Plot of the Fuma Clan')
                ->withNavigation([
                    'Anime' => '',
                    'OVA' => '/anime/ova',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/ova/plot-of-the-fuma-clan/media')
                ->withAnimeNewsNetworkData(641)
                ->data([
                    'animeNav' => true,
                    'ovaNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/original-video-animation/plot-of-the-fuma-clan.php', $data);
        })->setName('plot-of-the-fuma-clan');

        $app->get('/green-vs-red', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Green VS Red')
                ->withNavigation([
                    'Anime' => '',
                    'OVA' => '/anime/ova',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/ova/green-vs-red/media')
                ->withAnimeNewsNetworkData(8868)
                ->data([
                    'animeNav' => true,
                    'ovaNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/original-video-animation/green-vs-red.php', $data);
        })->setName('green-vs-red');
    });

    /**
     * Routes for TV Specials
     */
    $app->group('/tv-specials', function (App $app) use ($pageUtil, $pageData) {
        $app->get('', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('TV Specials')
                ->withNavigation([
                    'Anime' => '',
                ])
                ->withTimeline()
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials.php', $data);
        })->setName('tv-specials');

        $app->get('/bye-bye-liberty-crisis', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Bye Bye Liberty Crisis')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(2090)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/bye-bye-liberty-crisis.php', $data);
        })->setName('bye-bye-liberty-crisis');

        $app->get('/hemingway-papers', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Hemingway Papers')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(2093)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/hemingway-papers.php', $data);
        })->setName('hemingway-papers');

        $app->get('/napoleons-dictionary', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Napoleon\'s Dictionary')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(2096)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/napoleons-dictionary.php', $data);
        })->setName('napoleons-dictionary');

        $app->get('/from-russia-with-love', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('From Russia with Love')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(2091)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/from-russia-with-love.php', $data);
        })->setName('from-russia-with-love');

        $app->get('/voyage-to-danger', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Voyage to Danger')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(2063)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/voyage-to-danger.php', $data);
        })->setName('voyage-to-danger');

        $app->get('/dragon-of-doom', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Dragon of Doom')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/tv-specials/dragon-of-doom/media')
                ->withAnimeNewsNetworkData(2101)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/dragon-of-doom.php', $data);
        })->setName('dragon-of-doom');

        $app->get('/the-pursuit-of-harimaos-treasure', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('The Pursuit of Harimao\'s Treasure')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(2094)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/the-pursuit-of-harimaos-treasure.php', $data);
        })->setName('the-pursuit-of-harimaos-treasure');

        $app->get('/the-secret-of-twilight-gemini', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('The Secret of Twilight Gemini')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(367)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/the-secret-of-twilight-gemini.php', $data);
        })->setName('the-secret-of-twilight-gemini');

        $app->get('/island-of-assassins', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Island of Assassins')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(2100)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/island-of-assassins.php', $data);
        })->setName('island-of-assassins');

        $app->get('/crisis-in-tokyo', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Crisis in Tokyo')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(2099)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/crisis-in-tokyo.php', $data);
        })->setName('crisis-in-tokyo');

        $app->get('/the-columbus-files', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('The Columbus Files')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(2092)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/the-columbus-files.php', $data);
        })->setName('the-columbus-files');

        $app->get('/missed-by-a-dollar', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Missed by a Dollar')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(2089)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/missed-by-a-dollar.php', $data);
        })->setName('missed-by-a-dollar');

        $app->get('/alcatraz-connection', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Alcatraz Connection')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/tv-specials/alcatraz-connection/media')
                ->withAnimeNewsNetworkData(2022)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/alcatraz-connection.php', $data);
        })->setName('alcatraz-connection');

        $app->get('/episode-0-first-contact', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Episode:0 First Contact')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/tv-specials/episode-0-first-contact/media')
                ->withAnimeNewsNetworkData(2727)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/episode-0-first-contact.php', $data);
        })->setName('episode-0-first-contact');

        $app->get('/operation-return-the-treasure', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Operation: Return the Treasure!!')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(2657)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/operation-return-the-treasure.php', $data);
        })->setName('operation-return-the-treasure');

        $app->get('/stolen-lupin', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Stolen Lupin')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(4195)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/stolen-lupin.php', $data);
        })->setName('stolen-lupin');

        $app->get('/angels-tactics', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Angel\'s Tactics')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(5560)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/angels-tactics.php', $data);
        })->setName('angels-tactics');

        $app->get('/seven-days-rhapsody', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Seven Days Rhapsody')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/tv-specials/seven-days-rhapsody/media')
                ->withAnimeNewsNetworkData(6837)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/seven-days-rhapsody.php', $data);
        })->setName('seven-days-rhapsody');

        $app->get('/elusiveness-of-the-fog', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Elusiveness of the Fog')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/tv-specials/elusiveness-of-the-fog/media')
                ->withAnimeNewsNetworkData(8335)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/elusiveness-of-the-fog.php', $data);
        })->setName('elusiveness-of-the-fog');

        $app->get('/sweet-lost-night', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Sweet Lost Night ~Magic Lamp\'s Nightmare Premonition')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/tv-specials/sweet-lost-night/media')
                ->withAnimeNewsNetworkData(10076)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/sweet-lost-night.php', $data);
        })->setName('sweet-lost-night');

        $app->get('/lupin-iii-vs-detective-conan', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin III vs. Detective Conan')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/tv-specials/lupin-iii-vs-detective-conan/media')
                ->withAnimeNewsNetworkData(10605)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/lupin-iii-vs-detective-conan.php', $data);
        })->setName('lupin-iii-vs-detective-conan');

        $app->get('/the-last-job', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('The Last Job')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/tv-specials/the-last-job/media')
                ->withAnimeNewsNetworkData(11231)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/the-last-job.php', $data);
        })->setName('the-last-job');

        $app->get('/blood-seal-eternal-mermaid', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Blood Seal ~Eternal Mermaid~')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/tv-specials/blood-seal-eternal-mermaid/media')
                ->withAnimeNewsNetworkData(11231)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);


            return $this->view->render($res, 'view/anime/tv-specials/blood-seal-eternal-mermaid.php', $data);
        })->setName('blood-seal-eternal-mermaid');

        $app->get('/record-of-observations-of-the-east', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Record of Observations of the East - Another Page')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(14828)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/record-of-observations-of-the-east.php', $data);
        })->setName('record-of-observations-of-the-east');

        $app->get('/princess-of-the-breeze', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Princess of the Breeze - Hidden City in the Sky')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(15561)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/princess-of-the-breeze.php', $data);
        })->setName('princess-of-the-breeze');

        $app->get('/goodbye-partner', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Goodbye Partner')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(22121)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/goodbye-partner.php', $data);
        })->setName('goodbye-partner');

        $app->get('/prison-of-the-past', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Prison of the Past')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(23004)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/prison-of-the-past.php', $data);
        })->setName('prison-of-the-past');

        $app->get('/italian-game', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Italian Game')
                ->withNavigation([
                    'Anime' => '',
                    'TV Specials' => '/anime/tv-specials',
                ])
                ->withAnimeNewsNetworkData(18469)
                ->data([
                    'animeNav' => true,
                    'specialsNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-specials/italian-game.php', $data);
        })->setName('italian-game');
    });

    /**
     * Routes for TV Series
     */
    $app->group('/tv-series', function (App $app) use ($pageUtil, $pageData) {
        $app->get('/fifth', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin III Fifth TV Series')
                ->withNavigation([
                    'Anime' => '',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/fifth-tv-series/media')
                ->withTimeline()
                ->withAnimeNewsNetworkData(20555)
                ->data([
                    'animeNav' => true,
                    'fifthTvNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-series/fifth.php', $data);
        })->setName('fifth-tv-series');

        $app->get('/fourth', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin III Fourth TV Series')
                ->withNavigation([
                    'Anime' => '',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/fourth-tv-series/media')
                ->withTimeline()
                ->withAnimeNewsNetworkData(16347)
                ->data([
                    'animeNav' => true,
                    'fourthTvNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-series/fourth.php', $data);
        })->setName('fourth-tv-series');

        $app->get('/third', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin III Third TV Series')
                ->withNavigation([
                    'Anime' => '',
                ])
                ->withGallery()
                ->withTVTimeline('03/03/1984')
                ->withAnimeNewsNetworkData(887)
                ->data([
                    'animeNav' => true,
                    'thirdTvNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-series/third.php', $data);
        })->setName('third-tv-series');

        $app->get('/second', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin III Second TV Series')
                ->withNavigation([
                    'Anime' => '',
                ])
                ->withGallery()
                ->withTVTimeline('03/10/1977')
                ->withAnimeNewsNetworkData(885)
                ->data([
                    'animeNav' => true,
                    'secondTvNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-series/second.php', $data);
        })->setName('second-tv-series');

        $app->get('/lupin-viii', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin VIII TV Series')
                ->withDescription('Lupin VIII TV Series - an abandoned co-production between France and Japan')
                ->withNavigation([
                    'Anime' => '',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/lupin-viii-tv-series/media')
                ->withTimeline()
                ->data([
                    'animeNav' => true,
                    'viiiTvNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-series/lupin-viii.php', $data);
        })->setName('lupin-viii-tv-series');

        $app->get('/first', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin III First TV Series')
                ->withNavigation([
                    'Anime' => '',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/first-tv-series/media')
                ->withTVTimeline('24/10/1971')
                ->withAnimeNewsNetworkData(886)
                ->data([
                    'animeNav' => true,
                    'firstTvNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/tv-series/first.php', $data);
        })->setName('first-tv-series');

        $app->get('/woman-called-mine-fujiko', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Lupin the Third: The Woman Called Mine Fujiko')
                ->withNavigation([
                    'Anime' => '',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/fifth-tv-series/media')
                ->withTimeline()
                ->withAnimeNewsNetworkData(14135)
                ->data([
                    'animeNav' => true,
                    'fujikoTvNav' => true,
                    'view' => $this->view,
                    'episodes' => json_decode(file_get_contents(__DIR__ . "/../public/dist/asset/data/woman-called-mine-fujiko-episodes.json"),
                        true),
                ]);

            return $this->view->render($res, 'view/anime/tv-series/woman-called-mine-fujiko.php', $data);
        })->setName('woman-called-mine-fujiko');
    });

    /**
     * Routes for non-Lupin
     */
    $app->group('/non-lupin', function (App $app) use ($pageUtil, $pageData) {
        $app->get('', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Non-Lupin Anime')
                ->withNavigation([
                    'Anime' => '',
                ])
                ->withTimeline()
                ->data([
                    'animeNav' => true,
                    'nonNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/non-lupin.php', $data);
        })->setName('non-lupin');

        $app->get('/scoopers', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Scoopers')
                ->withNavigation([
                    'Anime' => '',
                    'Non-Lupin' => '/anime/non-lupin',
                ])
                ->withAnimeNewsNetworkData(7806)
                ->data([
                    'animeNav' => true,
                    'nonNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/non-lupin/scoopers.php', $data);
        })->setName('scoopers');

        $app->get('/alice', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Alice')
                ->withNavigation([
                    'Anime' => '',
                    'Non-Lupin' => '/anime/non-lupin',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/non-lupin/alice/media')
                ->withAnimeNewsNetworkData(8067)
                ->data([
                    'animeNav' => true,
                    'nonNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/non-lupin/alice.php', $data);
        })->setName('alice');

        $app->get('/siamese-cat-first-mission', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Siamese Cat - First Mission')
                ->withNavigation([
                    'Anime' => '',
                    'Non-Lupin' => '/anime/non-lupin',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/non-lupin/siamese-cat-first-mission/media')
                ->withAnimeNewsNetworkData(8944)
                ->data([
                    'animeNav' => true,
                    'nonNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/non-lupin/siamese-cat-first-mission.php', $data);
        })->setName('siamese-cat-first-mission');

        $app->get('/cinderella-boy', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Cinderella Boy')
                ->withNavigation([
                    'Anime' => '',
                    'Non-Lupin' => '/anime/non-lupin',
                ])
                ->withTVTimeline('24/06/2003')
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/non-lupin/cinderella-boy')
                ->withAnimeNewsNetworkData(2394)
                ->data([
                    'animeNav' => true,
                    'nonNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/non-lupin/cinderella-boy.php', $data);
        })->setName('cinderella-boy');

        $app->get('/mankatsu', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Mankatsu')
                ->withNavigation([
                    'Anime' => '',
                    'Non-Lupin' => '/anime/non-lupin',
                ])
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/non-lupin/mankatsu/media')
                ->withAnimeNewsNetworkData(4196)
                ->data([
                    'animeNav' => true,
                    'nonNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/non-lupin/mankatsu.php', $data);
        })->setName('mankatsu');

        $app->get('/gundoh-musashi', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Gundoh Musashi')
                ->withNavigation([
                    'Anime' => '',
                    'Non-Lupin' => '/anime/non-lupin',
                ])
                ->withTVTimeline('09/04/2006')
                ->withGallery(__DIR__ . '/../public/dist/asset/img/anime/non-lupin/gundoh-musashi/media')
                ->withAnimeNewsNetworkData(6452)
                ->data([
                    'animeNav' => true,
                    'nonNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/non-lupin/gundoh-musashi.php', $data);
        })->setName('gundoh-musashi');

        $app->get('/bakumatsu-gijinden-roman', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil, $pageData) {
            $data = $pageData
                ->withTitle('Bakumatsu Gijinden Roman')
                ->withNavigation([
                    'Anime' => '',
                    'Non-Lupin' => '/anime/non-lupin',
                ])
                ->withTVTimeline('07/01/2013')
                ->withAnimeNewsNetworkData(14868)
                ->data([
                    'animeNav' => true,
                    'nonNav' => true,
                    'view' => $this->view,
                ]);

            return $this->view->render($res, 'view/anime/non-lupin/bakumatsu-gijinden-roman.php', $data);
        })->setName('bakumatsu-gijinden-roman');
    });
});
