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
                  The first anime film held true to the manga roots and provided a gritty story that fumbled at the end with some
                  of the more ludicrous tropes of science fiction. Simply titled <em>Lupin III</em> on its initial release, TMS retitled
                  it to <em>Lupin vs. the Clones</em> in the mid 1980s. US fans that had been tape trading referred to it as
                  <em>Mystery of Mamo</em>; Streamline Pictures used this familiar title for their release even though the name
                  was meant to be spelled Mamaux or Mamoux. The Manga Video UK release renamed the film once again, this time to
                  <em>Secret of Mamo</em>. This name stuck for the subsequent Geneon release but reverted back to <em>Mystery</em>
                  for the Discotek release.
                </p>
                <p>
                  You would think four different titles would be the only record for the film. However, this film is
                  also notable for the number of English language dubs it has received, also four. The very first dub was
                  commissioned for trans-Atlantic airline flights in 1978. Fans referred to it as the &quot;Hong Kong&quot; dub.
                  It then received a dub track from Streamline Pictures in 1995, from Manga Video UK in 1996, and most recently
                  from Geneon in 2003. Fear not&hellip; You do not need to hunt down four separate releases; Discotek released a
                  DVD containing all four English dubs on 2013 February 26.
                </p>
                <p>
                  The film has had its share of edits through these various releases. &quot;Hong Kong&quot; dub renamed all of the
                  characters. Some of the dialogue in the Streamline Pictures version was modernized, and Lupin was referred to
                  as &quot;Wolf&quot; due to the various copyright concerns at the time. Geneon was saddled with a print from the
                  licensor that removed the <em>Justice League</em> parody. Geneon's dub is also considered the most egregiously
                  edited dub; it adds unnecessary profanity throughout the dialogue sometimes adding lines where none was present
                  in the original Japanese audio.
                </p>
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Rupan Sansei</em></dd>
                  <dt>Jacket Color:</dt><dd>Red</dd>
                  <dt>Release Date:</dt><dd>1978 December 16</dd>
                  <dt>Run Time:</dt><dd>102 minutes</dd>
                </dl>
                <div>
                  <a href="http://www.hulu.com/watch/314927" class="linked" target="_blank" title="Watch on Hulu"><img src="/dist/asset/img/hulu-icon.png" /></a>
                  &nbsp;&nbsp;<strong>Buy It:</strong>
                  <a href="http://www.rightstuf.com/catalog/browse/link/t=item,c=right-stuf,v=right-stuf,i=es045,a=lupin-iii-encycloped" class="linked color-green" target="_blank">RightStuf</a>,
                  <a href="http://www.amazon.com/gp/product/B00AIZ2I6Q/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=B00AIZ2I6Q&linkCode=as2&tag=lupiniiiencyc-20&linkId=42FGAARZ3YWFJ6Y6" class="linked color-green" target="_blank">Amazon</a><img src="http://ir-na.amazon-adsystem.com/e/ir?t=lupiniiiencyc-20&l=as2&o=1&a=B00AIZ2I6Q" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                </div>
                <div class="headline">
                  <h4>Synopsis</h4>
                </div>
                <p>
                  Transylvania... Lupin has been captured and hanged to death; the coroner's report confirms that down to the DNA
                  level this was the real Lupin the Third. However, Zenigata refuses to believe Lupin is dead and drives to a
                  castle to view the body. He then proceeds to drive a stake through the heart of Lupin's corpse. The corpse
                  explodes, and Zenigata comes face to face with... Lupin?!
                </p>
                <p>
                  Lupin is surprised by this turn of events but has no time to chat with Zenigata. He is off to Egypt to retrieve
                  the &quot;Philosopher's Stone&quot; from the pharaoh's pyramid. Fujiko has promised to exchange a date with her
                  for the stone. Lupin succeeds in his theft but is double-crossed by Fujiko. As Fujiko hands over the stone to
                  her mysterious employer, she finds out that Lupin has double-crossed her by handing over a fake stone containing
                  a transmitter.
                </p>
                <p>
                  Fujiko's employer is Mamo, a man obsessed with immortality. What follows is a wild chase through Paris, the
                  Caribbean, and Columbia to discover Mamo's secret. Is Mamo immortal as he claims? Is Lupin even the real Lupin?
                </p>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/theatrical-films/secret-of-mamo/secret-of-mamo.jpg" alt="Secret of Mamo Theatrical Poster" />
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