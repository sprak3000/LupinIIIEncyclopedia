<div class="container">

  <div class="row">

    <div class="col-md-8">
      <p>Title translates roughly to &quot;The Greatest Brain Battle in History&quot;. It is a combination of platform action
      with <em>Professor Layton</em> style puzzles to solve. Knowledge of the Japanese language is necessary for some
      puzzles, but you can unlock most of the content without knowing any. As you solve puzzles, new areas will open up.</p>

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

    <div class="col-md-4">
      <div class="servive-block rounded-2x servive-block-u">
        <img class="img-responsive center-block" src="/dist/asset/img/games/nintendo/ds/shijyou-saidai-no-sunou-ikusa.jpg" alt="Shijyou Saidai no Sunou Ikusa box cover" />
        <dl>
          <dt>Company:</dt><dd>Bandai Namco</dd>
          <dt>Release Date:</dt><dd>2010 February 4</dd>
          <dt>Price:</dt><dd>5229&yen;</dd>
          <dt>Genre:</dt><dd>Action, Puzzle</dd>
        </dl>
      </div>
    </div>

  </div>

</div>