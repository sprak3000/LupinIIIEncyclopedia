<div class="profile container">

  <div class="profile-body row margin-bottom-20">
    <div class="col-sm-6 md-margin-bottom-20">
      <div class="panel panel-profile no-bg">
        <a class="twitter-timeline" data-dnt="true" href="https://www.twitter.com/sprak/timelines/573644495792766977" data-widget-id="585602612654911490">Lupin the Third</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
    </div>

    <div class="col-sm-6 md-margin-bottom-20">
      <div class="panel panel-profile no-bg responsive-video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL1145010B3E6D78A9" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div class="profile-body row margin-bottom-20">

    <div class="col-sm-6 md-margin-bottom-20">

      <div class="panel panel-profile no-bg">

        <div class="panel-heading overflow-h">
          <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments-o"></i>Recent Lupin III Club Forum Posts</h2>
          <span class="pull-right"><a href="https://lupiniii.club/index.php?forums/-/index.rss" title="Subscribe to Feed" target="_blank"><i class="fa fa-rss-square"></i></a></span>
        </div>

        <div id="scrollbar2" class="panel-body contentHolder">
<?php
if(!empty($forumRss)) {
  foreach($forumRss->channel->item as $item) {
    $pubTimestamp = time();
    if(false === stripos($item->pubDate, "Today")) {
        $pubTimestamp = strtotime($item->pubDate);
    }
?>

          <div class="profile-event">
            <div class="date-formats">
              <span><?php echo date("d", $pubTimestamp); ?></span>
              <small><?php echo date("M Y", $pubTimestamp); ?></small>
            </div>
            <div class="overflow-h">
              <h3 class="heading-xs"><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h3>
              <p>
                <i class="fa fa-pencil"></i> <?php echo $item->author; ?><br />
                <i class="fa fa-folder"></i> <a href="<?php echo $item->categoryLink; ?>"><?php echo $item->category; ?></a>
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
          <span class="pull-right"><a href="/rss/ebay" title="Subscribe to Feed" target="_blank"><i class="fa fa-rss-square"></i></a></span>
        </div>

        <div id="scrollbar4" class="panel-body contentHolder">
<?php
if(!empty($eBayRss)) {
  $count = 0;
  foreach($eBayRss->channel->item as $item) {
?>

              <div class="profile-event">
                <div class="overflow-h">
                  <h3 class="heading-xs"><a href="<?php echo $item->link; ?>" target="_blank"><?php echo $item->title; ?></a></h3>
                  <?php echo str_replace("http:", "", $item->description); ?>
                </div>
              </div>
<?php
    if(24 === $count++) {
      break;
    }
  }
}
?>
        </div>

      </div>

    </div>

  </div>

</div>
