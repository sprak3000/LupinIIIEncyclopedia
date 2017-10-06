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
                  <em>Babylon</em> tends to be a polarizing film in the franchise, chiefly due to Seijun Suzuki's direction. His
                  focus on visuals over narrative is apparent throughout the film, most notably in the infamous motorcycle scene.
                  This scene comes early in the film and will make or break your viewing experience. Its only appearance in the US
                  was AnimEigo's release of it on VHS and laserdisc. Discotek announced their intention to release a DVD of the film
                  but put the project on hold due to the decline of the market at the time.
                </p>
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Rupan Sansei: babiron no oogon densetsu</em></dd>
                  <dt>Jacket Color:</dt><dd>Pink</dd>
                  <dt>Release Date:</dt><dd>1985 July 13</dd>
                  <dt>Run Time:</dt><dd>100 minutes</dd>
                </dl>
                <div class="headline">
                  <h4>Synopsis</h4>
                </div>
                <p>
                  Several stone tablets have been unearthed in New York City and tell the tale of an ancient treasure. Thousands
                  of years ago, a god demanded that all of the gold in Babylon be collected so it could be hidden. Lupin is
                  naturally looking to make this horde of gold his own but must contend with two Mafia families that are after it
                  as well.
                </p>
                <p>
                  Zenigata is hot on Lupin's heels after briefly judging the &quot;Miss ICPO&quot; contest; however, the contest
                  ended in controversy, and Zenigata somehow ended up with the contestants as his new partners. To add to the
                  confusion, a drunken, old woman named Rosetta claims to have known Napoleon and Alexander the Great and also
                  holds a mysterious item that could help locate the treasure.
                </p>
                <p>
                  Who will unearth the legendary golden horde of Babylon? And what connection does Rosetta have to the treasure and Haley's Comet?
                </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/theatrical-films/legend-of-the-gold-of-babylon/legend-of-the-gold-of-babylon.jpg" alt="Legend of the Gold of Babylon Theatrical Poster" />
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
<?php
foreach($images as $row) {
?>
            <div class="row">
<?php
  foreach($row as $image) {
?>
              <div class="col-sm-3 sm-margin-bottom-30">
                <a class="fancybox img-hover-v1" rel="gallery" href="<?php echo $image; ?>" title="">
                  <span>
                    <img class="img-responsive" alt="" src="<?php echo $image; ?>">
                  </span>
                </a>
              </div>
<?php
  }
?>
            </div>
<?php
}
?>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>