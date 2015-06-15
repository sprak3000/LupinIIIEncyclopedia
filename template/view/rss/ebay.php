<?php
$currentDate = date('D, j M Y H:i:s +0000');
?>
<?xml version="1.0"?>
<rss version="2.0" xmlns:geo="http://www.w3.org/2003/01/geo/wgs84_pos#" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>Lupin the Third eBay Search</title>
    <description>Recent listings of Lupin the Third merchandise on eBay</description>
    <link>http://www.lupinencyclopedia.com/rss/ebay</link>
    <pubDate><?php echo $currentDate; ?>Mon, 15 Jun 2015 00:45:29 +0000</pubDate>
    <generator>http://www.lupinencyclopedia.com/rss/ebay</generator>
<?php
foreach($ebayResults as $item) {
  if(!isset($excludedCategories[ intval($item['primaryCategory'][0]['categoryId'][0]) ])) {
    $ebayItemId = $item['itemId'][0];
    $currentPrice = preg_replace('/^(\d+\.\d)$/', '${1}0', $item['sellingStatus'][0]['convertedCurrentPrice'][0]['__value__']);
    $currency = $item['sellingStatus'][0]['currentPrice'][0]['@currencyId'];
    $started = date('D, j M Y H:i:s +0000' ,strtotime($item['listingInfo'][0]['startTime'][0]));
    $endsOn = date('l, Y M j', strtotime($item['listingInfo'][0]['endTime'][0]));
?>
    <item>
      <title><?php echo htmlspecialchars($item['title'][0]); ?></title>
      <link><?php echo htmlspecialchars($item['viewItemURL'][0]); ?></link>
      <description><![CDATA[<div><div style="margin-right:20px;float:left;"><img src="<?php echo $item['galleryURL'][0]; ?>"/></div><div><strong>Current Price:</strong> <?php echo $currentPrice . ' ' . $currency; ?> (<?php echo (isset($item['sellingStatus'][0]['bidCount'][0])) ? $item['sellingStatus'][0]['bidCount'][0] : '0'; ?> bids)</div><div><strong>End Date:</strong> <?php echo $endsOn; ?></div><div><a rel="nofollow" target="_blank" href="<?php echo $item['viewItemURL'][0]; ?>">Bid Now</a> | <a rel="nofollow" target="_blank" href="http://cgi1.ebay.com/ws/eBayISAPI.dll?MfcISAPICommand=MakeTrack&item=<?php echo $ebayItemId; ?>">Add to Watch List</a></div></div>]]></description>
      <guid isPermaLink="false"><?php echo htmlspecialchars($item['viewItemURL'][0]); ?></guid>
      <pubDate><?php echo $started; ?></pubDate>
    </item>
<?php
  }
}
?>
  </channel>
</rss>