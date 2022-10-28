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
            <div class="clearfix media">
              <div class="headline">
                <h2>History</h2>
              </div>
              <img class="img-responsive pull-right" src="/dist/asset/img/anime/pilot-film/pilot-film.jpg" alt="Lupin III in the Pilot Film" />
              <p>
                In August 1967, Futabasha Publishing's <em>Manga Action</em> weekly magazine began running a new manga by
                <a href="http://en.wikipedia.org/wiki/Monkey_Punch" class="linked color-green" target="_blank">Kazuhiko Kato</a>, a.k.a. &quot;Monkey Punch&quot;.
                The title enchanted many of the Japanese readers including a man named
                <a href="http://www.animenewsnetwork.com/encyclopedia/people.php?id=8501" class="linked color-green" target="_blank">Yutaka Fujioka</a>, an
                executive for Tokyo Movie Shinsha Co. (TMS). TMS decided to purchase the rights to make an animated version of the
                manga in the same year.
              </p>
              <p>
                Originally, TMS planned to team up with Toho and produce a theatrical film. Some of the best talent &ndash;
                including Osumi Masaki, Shibayama Tsutomu, and Otsuka Yasuo &ndash; were brought together and feverishly worked on producing
                the &quot;Pilot Film&quot;. It was assumed during the planning phase the film would be released in theaters and then
                later on television; this resulted in two versions being made, a Cinemascope and TV version.
              </p>
              <p>
                When the pilot film was completed in 1969, it had consumed a great deal of time and money; TMS and Toho could not
                come to terms about budget for the film. This and several other problems caused the pilot film to never reach
                theaters. TMS decided to sell &quot;Lupin III&quot; as a anime series for television despite its more adult-oriented
                making it a difficult sell. In October 1971, TMS managed to sell the idea to Yomiuri TV (YTV), and the rest is history.
              </p>

              <div class="headline">
                <h2>Plot</h2>
              </div>
              <p>
                The door opens in a dark room spilling light into it; a man stands in the doorway and empties a submachine gun
                into the room.
              </p>
              <p>
                Cut to Inspector Zenigata playing shogi over the phone trying to keep his opponent on the line while a trace is
                made. Zenigata calls checkmate; his opponent does likewise telling Zenigata that the pieces are fake. Zenigata
                examines the backs of the pieces to find &quot;Lupin III&quot; written on them. This infuriates Zenigata, but the trace
                went through! The call is coming from a phone booth outside. Zenigata rushes out to find the booth empty except
                for a shogi piece with the name &quot;Zenigata&quot; written on it. He throws the playing piece, and it explodes!
              </p>
              <p>
                Lupin, Jigen, and Fujiko end up being trapped by Zenigata in an old mansion. Zenigata attempts to storm the
                mansion but fails; he falls back outside dragging his injured policemen with him. It is a stalemate; Lupin
                cannot get out, and Zenigata cannot get into the mansion. Suddenly, the famous private investigator Akechi Kogoro
                suggests that Zenigata throw a grappling hook through a second floor window. He then suggests that Zenigata tie
                the other end to a car bumper.
              </p>
              <p>
                Akechi starts the car up and begins to drive off; Zenigata chases after him trying to find out what to do next.
                Akechi reaches to his face and pulls off a mask. It was really Lupin in disguise! Lupin disguised himself as an
                injured policman to get out of the mansion. As he drives off, Zenigata sees that the grappling hook has been
                attached to a make-shift kite that carries Jigen and Fujiko away.
              </p>
            </div>
          </div>

          <div id="cast" class="tab-pane fade in">
            <div class="row">
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li>
                    <strong>Ars&egrave;ne Lupin III:</strong>
                    <ul>
                      <li>Nozawa Yasutomo (Standard Version)</li>
                      <li>Hirokawa Taichiro (Cinemascope Version)</li>
                    </ul>
                  </li>
                  <li>
                    <strong>Jigen Daisuke:</strong>
                    <ul>
                      <li>Kobayashi Kiyoshi</li>
                    </ul>
                  </li>
                  <li>
                    <strong>Mine Fujiko:</strong>
                    <ul>
                      <li>Masuyama Eiko</li>
                    </ul>
                  </li>
                </ul>
              </div>

              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li>
                    <strong>Ishikawa Goemon:</strong>
                    <ul>
                      <li>Kobayashi Osamu (Standard Version)</li>
                      <li>Naya Goro (Cinemascope Version)</li>
                    </ul>
                  </li>
                  <li>
                    <strong>Inspector Zenigata:</strong>
                    <ul>
                      <li>Otsuka Norio (Standard Version)</li>
                      <li>Chikaishi Shinsuke (Cinemascope Version)</li>
                    </ul>
                  </li>
                </ul>
              </div>

              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li>
                    <strong>Akechi Kogoro:</strong>
                    <ul>
                      <li>Takagi Kin (Standard Version)</li>
                      <li>Kimura Koichi (Cinemascope Version)</li>
                    </ul>
                  </li>
                  <li>
                    <strong>Narrator:</strong>
                    <ul>
                      <li>Tanaka Nobuo</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div id="media" class="tab-pane fade in">
              <?php echo $view->renderPageFragment('partial/media.php', ['partial' => true, 'images' => $images]); ?>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>
