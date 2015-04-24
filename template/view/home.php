<?php
$forumRss = array();
$blogRss = array();
try {
  $forumRss = simplexml_load_file("http://www.lupinencyclopedia.com/forums/index.php?action=.xml");
  $eBayRss = simplexml_load_file("http://pipes.yahoo.com/pipes/pipe.run?_id=dbe543e31b0bf07dc00838c34456a978&_render=rss");
} catch(Exception $e) {
  // TODO: Log this appropriately
}
?>
<div class="profile container">

  <div class="profile-body row margin-bottom-20">
    <div class="col-sm-6 md-margin-bottom-20">
      <div class="panel panel-profile no-bg">
        <a class="twitter-timeline" data-dnt="true" href="/sprak/timelines/573644495792766977" data-widget-id="585602612654911490">Lupin the Third</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    </div>

    <div class="col-sm-6 md-margin-bottom-20">
      <div class="panel panel-profile no-bg">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL1145010B3E6D78A9" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div class="profile-body row margin-bottom-20">

    <div class="col-sm-6 md-margin-bottom-20">

      <div class="panel panel-profile no-bg">

        <div class="panel-heading overflow-h">
          <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments-o"></i>Recent Forum Posts</h2>
        </div>

        <div id="scrollbar2" class="panel-body contentHolder">
<?php
if(!empty($forumRss)) {
  foreach($forumRss->{'recent-post'} as $item) {
    $pubTimestamp = strtotime($item->time);
?>

          <div class="profile-event">
            <div class="date-formats">
              <span><?php echo date("d", $pubTimestamp); ?></span>
              <small><?php echo date("M Y", $pubTimestamp); ?></small>
            </div>
            <div class="overflow-h">
              <h3 class="heading-xs"><a href="<?php echo $item->link; ?>"><?php echo $item->subject; ?></a></h3>
              <p>
                <i class="fa fa-pencil"></i> <?php echo $item->poster->name; ?><br />
                <i class="fa fa-folder"></i> <a href="<?php echo $item->board->link; ?>"><?php echo $item->board->name; ?></a>
              </p>
            </div>
          </div>
<?php
  }
}
?>
        </div>

      </div>

    </div>

    <div class="col-sm-6 md-margin-bottom-20">

      <div class="panel panel-profile no-bg">

        <div class="panel-heading overflow-h">
          <h2 class="panel-title heading-sm pull-left"><i class="fa fa-laptop"></i>Recent eBay Auctions</h2>
        </div>

        <div id="scrollbar4" class="panel-body contentHolder">
<?php
if(!empty($eBayRss)) {
  foreach($eBayRss->channel->item as $item) {
?>

              <div class="profile-event">
                <div class="overflow-h">
                  <h3 class="heading-xs"><a href="<?php echo $item->link; ?>" target="_blank"><?php echo $item->title; ?></a></h3>
                  <?php echo $item->description; ?>
                </div>
              </div>
<?php
  }
}
?>
        </div>

      </div>

    </div>

  </div>

</div>