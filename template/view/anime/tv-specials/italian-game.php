<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="tab-v1">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
                    <li><a data-toggle="tab" href="#cast">Cast</a></li>
                    <li><a data-toggle="tab" href="#staff">Staff</a></li>
                </ul>

                <div class="tab-content">

                    <div id="overview" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-10">
                                <dl class="dl-horizontal">
                                    <dt>Japanese Title:</dt>
                                    <dd><em>Rupan Sansei: Italian Game</em></dd>
                                    <dt>Jacket Color:</dt>
                                    <dd>Blue</dd>
                                    <dt>Release Date:</dt>
                                    <dd>2016 January 08</dd>
                                    <dt>Run Time:</dt>
                                    <dd>90 minutes</dd>
                                </dl>
                                <div class="headline">
                                    <h4>Synopsis</h4>
                                </div>
                                <p>
                                    Lupin investigates the kidnapping of his estranged wife, Italian
                                    millionaire and celebrity, Rebecca Rosselini, who still carries this name. But when
                                    Lupin arrives in Italy to rescue her, he finds himself drawn into a game with an
                                    unknown enemy when he is issued a challenge by the Masked Count: find the
                                    inheritance of the Count of Cagliostro. To complicate matters, Lupin's nemesis
                                    Inspector Zenigata arrives in Italy to arrest Lupin, as well as M16 Agent Nyx who is
                                    after the Masked Count as well.
                                </p>
                                <p>
                                    Synopsis from Anime News Network
                                </p>
                            </div>
                            <div class="col-md-2">
                                <img class="img-responsive"
                                     src="/dist/asset/img/anime/tv-specials/italian-game/italian-game.jpg"
                                     alt="Italian Game"/>
                            </div>
                        </div>
                    </div>

                    <div id="cast" class="tab-pane fade in">
                        <?php
                        echo $app->render('partial/cast.php', ['partial' => true, 'annData' => $annData]); ?>
                    </div>

                    <div id="staff" class="tab-pane fade in">
                        <?php
                        echo $app->render('partial/staff.php', ['partial' => true, 'annData' => $annData]); ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>