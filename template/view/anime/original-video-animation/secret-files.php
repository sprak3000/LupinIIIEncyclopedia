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
                  Contains both versions of the pilot film and trailers for the anime and live-action theatrical releases.
                </p>
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Rupan Sansei: shiikuretto fuairu</em></dd>
                  <dt>Release Date:</dt><dd>1989</dd>
                  <dt>Run Time:</dt><dd>40 minutes</dd>
                </dl>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/ova/secret-files-2/secret-files-2.jpg" alt="Secret Files 1 & 2 DVD cover" />
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