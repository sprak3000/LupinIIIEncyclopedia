<div class="container">
    <div class="row">

        <div class="col-md-12">

            <div class="tab-v1">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
                    <li><a data-toggle="tab" href="#cast">Cast</a></li>
                    <li><a data-toggle="tab" href="#staff">Staff</a></li>
                    <li><a data-toggle="tab" href="#media">Media</a></li>
                </ul>

                <div class="tab-content">

                    <div id="overview" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="headline">
                                    <h4>Synopsis</h4>
                                </div>
                                <p>
                                    Lupin sniffs out a fresh source of income - jacking the digital profits from a pack
                                    of dark web drug dealers who distribute narcotics online via an illegal marketplace
                                    called Marco Polo. It might be digital cash this time, but there's still a safe – in
                                    this case, a fortress-like cloud server in the middle of the ocean – and there's
                                    still a key, namely Ami, the hacker who built Marco Polo's payment systems. Lupin's
                                    ready to do what it takes to get her to open up, but she's already about to crack –
                                    and requests the legendary thief's aid in her escape. Meanwhile, Lupin's foes find
                                    that the best way to capture the thief is to turn to social media.
                                </p>
                                <p>
                                    Synopsis by <a target="_blank" rel="noreferrer noopener" href="http://www.animenewsnetwork.com/">Anime News Network.</a>
                                </p>
                                <dl class="dl-horizontal">
                                    <dt>Japanese Title:</dt><dd><em>Rupan Sansei PART5</em> (<em>Lupin the Third: Part 5</em>)</dd>
                                    <dt>Jacket Color:</dt><dd>Blue</dd>
                                    <dt>Initial Air Date:</dt><dd>2018 April 04</dd>
                                    <dt>Final Air Date:</dt><dd>2018 September 18</dd>
                                    <dt>Timeslot:</dt><dd>19:30 - 20:00, Sundays</dd>
                                    <dt>Episode Count:</dt><dd>24</dd>
                                    <dt>Run Time per Episode:</dt><dd>~30 minutes</dd>
                                </dl>
                            </div>
                            <div class="col-md-2">
                                <img class="img-responsive"
                                     src="/dist/asset/img/anime/fifth-tv-series/fifth-tv-series.jpg"
                                     alt="Promo Image for Fifth TV Series"/>
                            </div>
                        </div>
                    </div>

                    <div id="cast" class="tab-pane fade in">
                        <?php echo $view->renderPageFragment('partial/cast.php', ['partial' => true, 'annData' => $annData]); ?>
                    </div>

                    <div id="staff" class="tab-pane fade in">
                        <?php echo $view->renderPageFragment('partial/staff.php', ['partial' => true, 'annData' => $annData]); ?>
                    </div>

                    <div id="media" class="tab-pane fade in">
                        <?php echo $view->renderPageFragment('partial/media.php', ['partial' => true, 'images' => $images]); ?>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/sO1RjGEd_74?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
