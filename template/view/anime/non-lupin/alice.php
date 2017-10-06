<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="tab-v1">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
          <li><a data-toggle="tab" href="#review">Review</a></li>
          <li><a data-toggle="tab" href="#cast">Cast</a></li>
          <li><a data-toggle="tab" href="#staff">Staff</a></li>
          <li><a data-toggle="tab" href="#media">Media</a></li>
        </ul>

        <div class="tab-content">

          <div id="overview" class="tab-pane fade in active">
            <div class="row">
              <div class="col-md-10">
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Monkey Punch no sekai Alice</em></dd>
                  <dt>Release Date:</dt><dd>1991 December 13</dd>
                  <dt>Run Time:</dt><dd>47 minutes</dd>
                </dl>
                <div class="headline">
                  <h4>Synopsis</h4>
                </div>
                <p>
                  When Alice runs off with her lover, the scientist she left does the only natural thing; he kills her and turns her into a perfect cyborg dedicated to serving people with an emphasis on sexually serving them. However, his experiment turns on him and kills him leaving his adopted son Don Jirocho to seek revenge. How does one stop a perfect machine, especially if love might be getting in the way...
                </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/non-lupin/alice/alice.jpg" alt="Alice poster" />
              </div>
            </div>
          </div>

          <div id="review" class="tab-pane fade in">
            <p>
              While revenge on the perfect sexbot sounds like an interesting plot device, this nearly fifty minute OVA barely even titillates. It is a disjointed mess of attempted comedy, soft core nudity and sex, and action. I know little about the manga behind this OVA, so I am not sure if there is more story that was just lost to fit the run time. It certainly feels like a one off story, something Monkey Punch had kicking around in his head, threw it together, and decided it wasn't worth continuing. It bears his hallmark character designs and sense of humor but lacks the polish of his Lupin manga efforts. I'm hard pressed to recommend this to anyone except the die-hard fans that want to see all of Monkey Punch's works.
            </p>
          </div>

          <div id="cast" class="tab-pane fade in">
              <?php echo $app->render('partial/cast.php', ['partial' => true, 'annData' => $annData]); ?>
          </div>

          <div id="staff" class="tab-pane fade in">
              <?php echo $app->render('partial/staff.php', ['partial' => true, 'annData' => $annData]); ?>
          </div>

          <div id="media" class="tab-pane fade in">
              <?php echo $app->render('partial/media.php', ['partial' => true, 'images' => $images]); ?>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>