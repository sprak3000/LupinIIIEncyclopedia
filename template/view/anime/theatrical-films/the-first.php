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
                  <dt>Japanese Title:</dt><dd><em>Lupin III THE FIRST</em></dd>
                  <dt>Jacket Color:</dt><dd>Red</dd>
                  <dt>Release Date:</dt><dd>2019 December 06</dd>
                  <dt>Run Time:</dt><dd>92 minutes</dd>
                </dl>
                  <div class="headline">
                      <h4>Synopsis</h4>
                  </div>
                  <p>
                      The iconic 'gentleman thief' Lupin III returns in an action-packed, continent-spanning adventure,
                      as Lupin III and his colorful underworld companions race to uncover the secrets of the mysterious
                      Bresson Diary, before it falls into the hands of a dark cabal that will stop at nothing to
                      resurrect the Third Reich.
                  </p>
                  <p>
                      Synopsis from Amazon
                  </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/theatrical-films/the-first/the-first-poster.jpg" alt="Lupin III THE FIRST Poster" />
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