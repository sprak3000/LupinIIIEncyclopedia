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
                  <dt>Japanese Title:</dt><dd><em>Lupin the IIIrd: Mine Fujiko no Uso</em></dd>
                  <dt>Jacket Color:</dt><dd>Black</dd>
                  <dt>Release Date:</dt><dd>2019 May 31</dd>
                  <dt>Run Time:</dt><dd>58 minutes</dd>
                </dl>
                  <div class="headline">
                      <h4>Synopsis</h4>
                  </div>
                  <p>
                      Fujiko Mine is on the run with Gene, a boy who knows the location of a stash of $500 million
                      dollars that his deceased father embezzled from the company Godfrey Mining. The boy is targeted by
                      Bincam, an assassin hired by Godfrey Mining with a mysterious ability that allows him to bend a
                      person’s will. Bincam’s whole body has been honed down from his teeth to finger nails that makes
                      him a walking deadly weapon. So deadly that he has to be restrained when he is not hunting down
                      targets.
                  </p>
                  <p>
                      Synopsis from Anime News Network
                  </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/theatrical-films/fujiko-mines-lie/fujiko-mines-lie.jpg" alt="Fujiko Mine's Lie Theatrical Poster" />
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
