<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="tab-v1">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
          <li><a data-toggle="tab" href="#media">Media</a></li>
        </ul>

        <div class="tab-content">

          <div id="overview" class="tab-pane fade in active">
            <div class="row">
              <div class="col-md-10">
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Siam Neko - First Mission</em></dd>
                  <dt>Release Date:</dt><dd> 2001 August 30</dd>
                  <dt>Run Time:</dt><dd>90 minutes</dd>
                </dl>
                <div class="headline">
                  <h4>Synopsis</h4>
                </div>
                <p>
                  June &amp; Naomi are a pair of two attractive women who both work as radio station DJs by day, but when night falls they are elite counter-terrorism agents under the code name The Siamese Cats.
                </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/non-lupin/siamese-cat-first-mission/siamese-cat-first-mission.jpg" alt="Siamese Cat - First Mission poster" />
              </div>
            </div>
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