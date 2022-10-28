<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="tab-v1">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
          <li><a data-toggle="tab" href="#episodes">Episodes</a></li>
          <li><a data-toggle="tab" href="#cast">Cast</a></li>
          <li><a data-toggle="tab" href="#staff">Staff</a></li>
        </ul>

        <div class="tab-content">

          <div id="overview" class="tab-pane fade in active">

            <div class="row">
              <div class="col-md-10">
                <p>

                </p>
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Lupin the Third: Mine Fujiko to Iu Onna</em></dd>
                  <dt>Jacket Color:</dt><dd>Green</dd>
                  <dt>Initial Air Date:</dt><dd>2012 April 04</dd>
                  <dt>Final Air Date:</dt><dd>2012 June 27</dd>
                  <dt>Episode Count:</dt><dd>13</dd>
                  <dt>Run Time per Episode:</dt><dd>~30 minutes</dd>
                </dl>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/woman-called-mine-fujiko/woman-called-mine-fujiko.jpg" alt="Woman Called Mine Fujiko promotional image" />
              </div>
            </div>

          </div>

          <div id="episodes" class="tab-pane fade in">
            <ul class="timeline-v1 tabs">
<?php
foreach($episodes as $index => $episode) {
  $isInverted = (0 !== $index % 2);
?>
              <li<?php if($isInverted) { ?> class="timeline-inverted"<?php } ?>>
                <div class="timeline-badge primary"><i class="glyphicon glyphicon-record<?php if(!$isInverted) { ?> invert<?php } ?>"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <img class="img-responsive" src="<?php echo $episode['image']; ?>" alt="<?php echo $episode['title']['English']; ?>">
                  </div>
                  <div class="timeline-body">
                    <h2>Episode <?php echo $episode['number']; ?>: <?php echo $episode['title']['English']; ?></h2>
                    <h3><?php echo $episode['title']['Japanese']; ?></h3>
                    <p><?php echo $episode['description']; ?></p>
                  </div>
                  <div class="timeline-footer">
                    <ul class="list-unstyled list-inline blog-info">
                      <li><strong>Release Date:</strong> <?php echo $episode['releaseDate']; ?></li>
                    </ul>
                  </div>
                </div>
              </li>
<?php
}
?>
            </ul>
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
