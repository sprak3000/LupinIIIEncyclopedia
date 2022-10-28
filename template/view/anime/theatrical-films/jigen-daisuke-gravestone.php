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
                <p>
                  We only had to wait two years after the success of the
                  <em><a href="/anime/tv-series/woman-called-mine-fujiko" class="linked color-green">Woman Called Mine Fujiko</a></em>
                  TV series to see a continuation of its style and tone. Picking up after that series, the goal of the film was to
                  show how Lupin and Jigen became close partners. The film was given a limited screening at Tokyo's Shinjuku Wald 9 theater.
                </p>
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Lupin the IIIrd: Jigen Daisuke no Bohyo</em></dd>
                  <dt>Jacket Color:</dt><dd>Green</dd>
                  <dt>Release Date:</dt><dd>2014 June 21</dd>
                  <dt>Run Time:</dt><dd>51 minutes</dd>
                </dl>
                <div class="headline">
                  <h4>Synopsis</h4>
                </div>
                <p>
                  Lupin and Jigen have their sights set on a treasure worth stealing called the Little Comet located in the
                  country of East Doroa. The country has fortified its borders after a singer named Queen Malta was assassinated
                  in the neighboring country of West Doroa. Despite the two countries being enemies, Lupin and Jigen still plan
                  to steal the treasure. During the heist, Jigen was almost killed by a skilled sniper named Yael Okuzaki. His
                  specialty is preparing tombstones for his targets before executing his kills. It is said that no one has
                  survived after Yael makes a grave for that target.
                </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/theatrical-films/jigen-daisuke-gravestone/jigen-daisuke-gravestone.jpg" alt="Jigen Daisuke's Gravestone Theatrical Poster" />
              </div>
            </div>
          </div>

          <div id="cast" class="tab-pane fade in">
              <?php echo $view->renderPageFragment('partial/cast.php', ['partial' => true, 'annData' => $annData]); ?>
          </div>

          <div id="staff" class="tab-pane fade in">
              <?php echo $view->renderPageFragment('partial/staff.php', ['partial' => true, 'annData' => $annData]); ?>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>
