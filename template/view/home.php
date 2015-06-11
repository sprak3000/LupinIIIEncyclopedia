<div class="profile container">

  <div class="profile-body row margin-bottom-20">
    <div class="col-sm-6 md-margin-bottom-20">
      <div class="panel panel-profile no-bg">
        <a class="twitter-timeline" data-dnt="true" href="/sprak/timelines/573644495792766977" data-widget-id="585602612654911490">Lupin the Third</a>
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
          <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments-o"></i>Recent Forum Posts</h2>
        </div>

        <div id="scrollbar2" class="panel-body contentHolder">
<?php
if(!empty($forumRss)) {
  foreach($forumRss->{'recent-post'} as $item) {
    $pubTimestamp = time();
    if(false === stripos($item->time, "Today")) {
      $pubTimestamp = strtotime($item->time);
    }
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
if(!empty($ebayResults)) {
  foreach($ebayResults as $item) {
    $ebayItemId = $item['itemId'][0];

    $currentPrice = preg_replace('/^(\d+\.\d)$/', '${1}0', $item['sellingStatus'][0]['convertedCurrentPrice'][0]['__value__']);
    $currency = $item['sellingStatus'][0]['currentPrice'][0]['@currencyId'];
//Wednesday, 2015 Jun 17
    $endsOn = date('l, Y M j', strtotime($item['listingInfo'][0]['endTime'][0]));
?>

              <div class="profile-event">
                <div class="overflow-h">
                  <h3 class="heading-xs"><a href="<?php echo $item['viewItemURL'][0]; ?>" target="_blank"><?php echo $item['title'][0]; ?></a></h3>
                  <div>
                    <div style="margin-right:20px;float:left;">
                      <img src="<?php echo $item['galleryURL'][0]; ?>" />
                    </div>
                    <div>
                      <strong>Current Price:</strong> <?php echo $currentPrice . ' ' . $currency; ?> (<?php echo (isset($item['sellingStatus'][0]['bidCount'][0])) ? $item['sellingStatus'][0]['bidCount'][0] : '0'; ?> bids)
                    </div>
                    <div>
                      <strong>End Date:</strong> <?php echo $endsOn; ?>
                    </div>
                    <div>
                      <a rel="nofollow" target="_blank" href="<?php echo $item['viewItemURL'][0]; ?>">Bid Now</a> | <a rel="nofollow" target="_blank" href="http://cgi1.ebay.com/ws/eBayISAPI.dll?MfcISAPICommand=MakeTrack&item=<?php echo $ebayItemId; ?>">Add to Watch List</a>
                    </div>
                  </div>
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