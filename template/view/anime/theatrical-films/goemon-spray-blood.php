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
                <p>
                  Goemon will be given the <em><a href="/anime/tv-series/woman-called-mine-fujiko" class="linked color-green">Woman Called Mine Fujiko</a></em>
                  continuity and style in his own film.
                </p>
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Lupin the IIIrd: Chikemuri no Ishikawa Goemon</em></dd>
                  <dt>Jacket Color:</dt><dd>Green</dd>
                  <dt>Release Date:</dt><dd>2017 February 04</dd>
                  <dt>Run Time:</dt><dd>?? minutes</dd>
                </dl>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/theatrical-films/goemon-spray-blood/goemon-spray-blood.jpg" alt="Goemon Ishikawa's Spray of Blood Theatrical Poster" />
              </div>
            </div>
          </div>

          <div id="cast" class="tab-pane fade in">
              <?php echo $app->render('partial/cast.php', ['partial' => true, 'annData' => $annData]); ?>
          </div>

          <div id="staff" class="tab-pane fade in">
              <?php echo $app->render('partial/staff.php', ['partial' => true, 'annData' => $annData]); ?>
          </div>

          <div id="media" class="tab-pane fade in">
            <div class="responsive-video">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/mJbdrllipvw?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>