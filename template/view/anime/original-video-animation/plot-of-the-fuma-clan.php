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
                <div>
                  <strong>Buy It: </strong>
                  <a href="http://www.rightstuf.com/catalog/browse/link/t=item,c=right-stuf,v=right-stuf,i=dt016,a=lupin-iii-encycloped" class="linked color-green" target="_blank">RightStuf</a>,
                  <a href="http://www.amazon.com/gp/product/B000V6LT7G/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B000V6LT7G&linkCode=as2&tag=lupiniiiencyc-20&linkId=2HFXXFPWPYMFXKRM" target="_blank" class="linked color-green">Amazon</a><img src="http://ir-na.amazon-adsystem.com/e/ir?t=lupiniiiencyc-20&l=as2&o=1&a=B000V6LT7G" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                </div>
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