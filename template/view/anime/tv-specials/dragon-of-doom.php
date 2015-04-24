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
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Rupan Sansei: Moeyo Zantetsu Ken</em></dd>
                  <dt>Jacket Color:</dt><dd>Red</dd>
                  <dt>Release Date:</dt><dd>1994 July 29</dd>
                  <dt>Run Time:</dt><dd>90 minutes</dd>
                </dl>
                <div class="headline">
                  <h4>Synopsis</h4>
                </div>
                <p>
                  Hong Kong crime lord Chin Chin Chu wants to hire Lupin, Fujiko, and Jigen to recover a gold dragon statue from
                  the wreckage of the Titanic. Lupin is intrigued as it is the same statue that his grandfather attempted to
                  steal right before the Titanic sank. However, Lupin refuses to work with Chu and vows to retrieve it and his
                  family pride on his own.
                </p>
                <p>
                  With help from Kikyo, a childhood friend, Goemon also seeks to maintain his family's honor by ensuring no one,
                  even Lupin, gains the statue. Who will be able to hang onto the statue and learn its secrets?
                </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/tv-specials/dragon-of-doom/dragon-of-doom.jpg" alt="Dragon of Doom Poster" />
              </div>
            </div>
          </div>

          <div id="cast" class="tab-pane fade in">
            <dl class="dl-horizontal">
              <dt>Ars&egrave;ne Lupin III:</dt><dd>Yamada Yasuo</dd>
              <dt>Jigen Daisuke:</dt><dd>Kobayashi Kiyoshi</dd>
              <dt>Mine Fujiko:</dt><dd>Masuyama Eiko</dd>
              <dt>Ishikawa Goemon:</dt><dd>Inoue Makio</dd>
              <dt>Inspector Zenigata:</dt><dd>Naya Goro</dd>
            </dl>
          </div>

          <div id="staff" class="tab-pane fade in">
            <dl class="dl-horizontal">
              <dt>Director:</dt><dd>Masaharu Okuwaki</dd>
              <dt>Screenplay:</dt><dd>Nobuaki Kishima</dd>
              <dt>Music:</dt><dd>Oono Yuuji</dd>
              <dt>Plan:</dt><dd>NTV, Lupin 3 Producing Comittee</dd>
              <dt>Production:</dt><dd>Tokyo Movie Shinsha (TMS)</dd>
            </dl>
          </div>

          <div id="media" class="tab-pane fade in">
<?php
foreach($images as $row) {
?>
            <div class="row">
<?php
  foreach($row as $image) {
?>
              <div class="col-md-3">
                <div class="thumbnails thumbnail-style">
                  <a class="fancybox-button zoomer" href="<?php echo $image; ?>" title="" data-rel="fancybox-button">
                    <span class="overlay-zoom">
                      <img class="img-responsive" alt="" src="<?php echo $image; ?>">
                      <div class="zoom-icon"></div>
                    </span>
                  </a>
                </div>
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