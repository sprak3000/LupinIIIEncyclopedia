<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="tab-v1">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
          <li><a data-toggle="tab" href="#cast">Cast</a></li>
          <li><a data-toggle="tab" href="#media">Media</a></li>
        </ul>

        <div class="tab-content">

          <div id="overview" class="tab-pane fade in active">
            <div class="row">
              <div class="col-md-10">
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Rupan Sansei: Episode:0 faasuto kontakuto</em></dd>
                  <dt>Jacket Color:</dt><dd>Red</dd>
                  <dt>Release Date:</dt><dd>2002 July 26</dd>
                  <dt>Run Time:</dt><dd>90 minutes</dd>
                </dl>
                <div class="headline">
                  <h4>Synopsis</h4>
                </div>
                <p>
                  Jigen sits in a bar; next to him is a Elana, a reporter. She starts her tape recorder and asks Jigen
                  about the first time he met Lupin III. They walk out of the bar and into an alley. Jigen strikes a
                  match and remembers...
                </p>
                <p>
                  Jigen's tale revolves around a millionaire named Galbez and an ancient Japanese cylinder made from
                  some green metal. The cylinder contains a scroll that tells how to forge an indestructible metal;
                  Lupin wanted to steal it, and it was Jigen's job to stop him along with Galbez's bodyguard Shade.
                </p>
                <p>
                  The 30th anniversary of the Lupin anime brings our favorite friends together for the first time as
                  Lupin races to find way to open the cylinder before Jigen, Shade, and Galbez track him down.
                </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/tv-specials/episode-0-first-contact/episode-0-first-contact.jpg" alt="Episode:0 First Contact DVD Cover" />
              </div>
            </div>
          </div>

          <div id="cast" class="tab-pane fade in">
            <dl class="dl-horizontal">
              <dt>Ars&egrave;ne Lupin III:</dt><dd>Kurita Kanichi</dd>
              <dt>Jigen Daisuke:</dt><dd>Kobayashi Kiyoshi</dd>
              <dt>Mine Fujiko:</dt><dd>Masuyama Eiko</dd>
              <dt>Ishikawa Goemon:</dt><dd>Inoue Makio</dd>
              <dt>Inspector Zenigata:</dt><dd>Naya Goro</dd>
              <dt>Shade:</dt><dd>Sakuno Shunsuke</dd>
              <dt>Brad:</dt><dd>Kosugi Juuroota</dd>
              <dt>Elenor:</dt><dd>Paku Romi</dd>
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