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
                  <em>Plot of the Fuma Clan</em> is a unique entry in the franchise's history; TMS classifies this as an OVA release
                  despite a limited theatrical release prior to its home video release. It is also notable for changing the entire voice
                  cast due to budget concerns. Also gone was a score by Ohno Yuji also due to budget concerns. These changes led to the
                  film receiving a cold reception in Japan. It even strained the relationship between Monkey Punch and Yamada Yasuo; no
                  one adequately explained why the original voice cast was not used causing leading Yamada to believe Monkey Punch
                  had a hand in it.
                </p>
                <p>
                  Despite this, <em>Fuma</em> is actually a strong entry in the franchise, almost rivaling <em>Cagliostro</em>
                  in animation and story. It has remained a favorite among US fans to the point that AnimEigo released the title
                  on VHS, laserdisc, and DVD under the name <em>Rupan III</em> with Discotek re-releasing it on DVD years later
                  restoring the proper <em>Lupin the Third</em> name.
                </p>
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Rupan Sansei: fuma ichizoku no imboo</em></dd>
                  <dt>Jacket Color:</dt><dd>Green</dd>
                  <dt>Release Date:</dt><dd>1987 December 26 (Theatrical Release)</dd><dd>1988 April 5 (Home Video)</dd>
                  <dt>Run Time:</dt><dd>73 minutes</dd>
                </dl>
                <div class="headline">
                  <h4>Synopsis</h4>
                </div>
                <p>
                  Goemon is getting married! Lupin, Jigen, and Fujiko are all there to witness the blessed event. The ceremony
                  is ruined though as Fuma Clan ninjas attack and attempt to steal the sacred urn of the bride's family. Lupin
                  manages to foil the attempt, but Goemon's bride is kidnapped and held for ransom. In exchange for the urn,
                  they will hand over the girl.
                </p>
                <p>
                  Lupin learns that the urn is the key to a hidden treasure and decides to steal the urn and the girl from the
                  Fuma. The race is on to find save the girl and uncover her family's ancient treasure!
                </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/ova/plot-of-the-fuma-clan/plot-of-the-fuma-clan.gif" alt="Plot of the Fuma Clan" />
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
          </div>

        </div>

      </div>

    </div>

  </div>

</div>
