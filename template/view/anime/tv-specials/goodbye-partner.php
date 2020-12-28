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
                  <dt>Japanese Title:</dt><dd><em>Rupan Sansei: Goodbye Partner</em></dd>
                  <dt>Jacket Color:</dt><dd>Black</dd>
                  <dt>Release Date:</dt><dd>2019 January 25</dd>
                  <dt>Run Time:</dt><dd>90 minutes</dd>
                </dl>
                <div class="headline">
                  <h4>Synopsis</h4>
                </div>
                <p>
                    When Inspector Zenigata is arrested for suspicion of being part of the Lupin gang, Lupin is talked
                    in to stealing Time Crystal to prove Pops' innocence. The heist seems to be going well enough when
                    suddenly Jigen reveals his intention to steal the diamond away from Lupin.
                </p>
                <p>
                    Synopsis from Amazon
                </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/tv-specials/goodbye-partner/goodbye-partner-poster.jpg" alt="Goodbye Partner promotional image" />
              </div>
            </div>
          </div>

          <div id="cast" class="tab-pane fade in">
              <?php echo $app->render('partial/cast.php', ['partial' => true, 'annData' => $annData]); ?>
          </div>

          <div id="staff" class="tab-pane fade in">
              <?php echo $app->render('partial/staff.php', ['partial' => true, 'annData' => $annData]); ?>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>