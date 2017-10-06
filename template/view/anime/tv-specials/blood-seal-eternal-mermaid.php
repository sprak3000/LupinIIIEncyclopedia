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
                  <dt>Japanese Title:</dt><dd><em>Rupan Sansei: Chi no Kokuin ~Eien no Mermaid~</em></dd>
                  <dt>Jacket Color:</dt><dd>Red</dd>
                  <dt>Release Date:</dt><dd>2011 December 02</dd>
                  <dt>Run Time:</dt><dd>90 minutes</dd>
                </dl>
                <div class="headline">
                  <h4>Synopsis</h4>
                </div>
                <p>
                  A pair of jewels hold the secret to an even greater treasure, but there are so many obstacles in Lupin's way. The smallest one is Maki, a precocious fourteen year old girl who wants Lupin to teach her to be a thief. But what is her tie to the treasure and the mysterious girl Misa, a girl who cannot die? The secrets behind the treasure reach back even into Lupin's past; will the Blood Seal be opened?!
                </p>
                <p>
                  <strong>NOTE:</strong> This special marks the first cast change in sixteen years. When it aired, it earned an average rating of 14.0% with a 15.8% rating in Tokyo's Kanto area.
                </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/tv-specials/blood-seal-eternal-mermaid/blood-seal-eternal-mermaid.jpg" alt="Blood Seal Eternal Mermaid promotional image" />
              </div>
            </div>
          </div>

          <div id="review" class="tab-pane fade in">
            <p>
              Despite much fanfare about a new TV series this year, we instead receive the annual TV special; however, this one truly is special, as it features the first cast change since Yamada Yasuo was taken from us far too soon. Really, this is the only talking point of the special, so let's just dive into the subject. First, I had no qualms about shaking up the cast; it never bothered me that Fuma Clan featured an entirely different cast. If the actors can capture the spirit, the essence of the characters, that is sufficient to immerse me in the story.
            </p>
            <p>
              When the new cast was announced, I had hoped they would be given some leeway to find their own take on the characters. Let them create their own interpretation of the character and breathe new life into them. Unfortunately, it feels like the mandate was the opposite. When Fujiko first spoke, she sounded younger but still sounded like the same voice actress from years past. If I had not known it was a new actress, I doubt I would have realized it from the performance alone.
            </p>
            <p>
              Zenigata and Goemon fare a bit better but still sound too close to the previous actors. Zenigata is still his gruff and grumpy self, but he now sounds more like a slightly older contemporary of Lupin rather than someone ready for the gold watch of retirement. There are flashes of young steel in Goemon's voice, a tone and manner that works well for the character. Pity he was not allowed to explore that more.
            </p>
            <p>
              But what about the plot, Hemingway? Well, it is another bog standard special that suffers from just a touch too much exposition. Once again, the original thefts are simply MacGuffins that point to a larger treasure that no one can truly obtain. There is nothing remotely new or fresh outside of the voices in this special, and that angle was hobbled by trying too hard to recreate the past. If the TV series does come to fruition, let's hope they finally decide to reinvent the franchise rather than endlessly recycling the past.
            </p>
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