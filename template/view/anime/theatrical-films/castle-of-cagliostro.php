<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="tab-v1">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
          <li><a data-toggle="tab" href="#cast">Cast</a></li>
          <li><a data-toggle="tab" href="#staff">Staff</a></li>
        </ul>

        <div class="tab-content">

          <div id="overview" class="tab-pane fade in active">
            <div class="row">
              <div class="col-md-10">
                <p>
                  The legendary Miyazaki Hayao directed the most famous and well-known entry in the franchise and produced a film that
                  was a radical departure from the manga and previous film
                  <a href="/anime/theatrical-films/secret-of-mamo" class="linked color-green">Secret of Mamo</a>. Miyazaki wanted to
                  portray his idea of a &quot;hero&quot; in the film and turned Lupin into a more happy-go-lucky character. The
                  change was not well received initially by audiences in Japan but gained popularity through subsequent re-releases.
                  It has long been rumored that the film was so well received at one point, that it was prized by the Cannes Film
                  Festival. However, there is no record of this in the Cannes Film Festival archives.
                </p>
                <p>
                  The film has received two English dubs; Streamline Pictures first dubbed it in 1991 and deviated slightly from
                  the original dialogue to better fit the lip syncing. Their release also altered the opening credits sequence.
                  A second dub was commissioned by Manga Entertainment in 2000 and spiced things up by adding profanity. This was
                  not well received, as <em>Cagliostro</em> has long been considered one of the most family friendly films anime
                  and the franchise has produced. It also altered the opening credits. Discotek is slated to release their version
                  of the film in 2014 and feature both of these dubs.
                </p>
                <p>
                  Chris Meadows created his own
                  <a href="http://www.terrania.us/journal/2004/08/lupin-iii-castle-of-cagliostro.html" target="_blank" class="linked color-green">commentary track</a>
                  for the film. It is an audio track you have to manually sync with your playback of the film, but it contains
                  a wealth of information about the film and the franchise.
                </p>
                <dl class="dl-horizontal">
                  <dt>Japanese Title:</dt><dd><em>Rupan Sansei: Kariosutoro no Shiro</em></dd>
                  <dt>Jacket Color:</dt><dd>Green</dd>
                  <dt>Release Date:</dt><dd>1979 December 15</dd>
                  <dt>Run Time:</dt><dd>100 minutes</dd>
                </dl>
              </div>
              <div class="col-md-2">
                <img class="img-responsive" src="/dist/asset/img/anime/theatrical-films/castle-of-cagliostro/castle-of-cagliostro.jpg" alt="Castle of Cagliostro Theatrical Poster" />
              </div>
            </div>
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
