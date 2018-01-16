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
                <p>
                  The &quot;Blue Jacket&quot; series continues its run with the location moving to France. It will begin airing in
                  April 2018 on NTV with streaming avaailable on Hulu and other services.
                </p>
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Rupan Sansei</em> (<em>Lupin the Third</em>)</dd>
                  <dt>Jacket Color:</dt><dd>Blue</dd>
                </dl>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/fifth-tv-series/fifth-tv-series.jpg" alt="Promo Image for Fifth TV Series" />
              </div>
            </div>
          </div>

          <div id="media" class="tab-pane fade in">
            <?php echo $app->render('partial/media.php', ['partial' => true, 'images' => $images]); ?>
          </div>
        </div>

      </div>

    </div>

  </div>

</div>