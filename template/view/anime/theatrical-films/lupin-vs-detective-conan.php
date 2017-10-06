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
                  This film is notable for being the first theatrical release that is a sequel (of sorts) to a TV special. Lupin
                  and Conan first crossed paths in a similarly titled TV special, though their interaction was brief.
                </p>
                <div>
                  <a href="http://www.hulu.com/watch/743069" class="linked" target="_blank" title="Watch on Hulu"><img src="/dist/asset/img/hulu-icon.png" /></a>
                </div>
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Rupan Sansei Basasu Meitantei Konan The Movie</em></dd>
                  <dt>Jacket Color:</dt><dd>Red</dd>
                  <dt>Release Date:</dt><dd>2013 December 07</dd>
                  <dt>Run Time:</dt><dd>108 minutes</dd>
                </dl>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/theatrical-films/lupin-vs-detective-conan/lupin-vs-detective-conan.png" alt="Lupin the Third vs. Detective Conan: The Movie Theatrical Poster" />
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