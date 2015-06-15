<?php
use sprak3000\lupinencyclopedia\Slim\Page;

$pageUtil = new Page\Util();

/**
 * Routes for /games and below
 */
$app->group('/rss', function () use ($app, $pageUtil) {
  /**
   * Route for eBay Auctions
   */
  $app->get('/ebay', function () use ($app, $pageUtil) {
    $pageData = [];
    $pageData['ebayResults'] = [];

    try {
      $configFile = file_get_contents(__DIR__ . '/../application/config.json');
      if (false !== $configFile) {
        $config = json_decode($configFile, true);

        $pageData['excludedCategories'] = [];
        if (isset($config['ebay']['excludedCategories']) && is_array($config['ebay']['excludedCategories'])) {
          $pageData['excludedCategories'] = array_flip($config['ebay']['excludedCategories']);
        }

        if (isset($config['ebay']['url']) && !empty($config['ebay']['url']) && isset($config['ebay']['apiKey']) && !empty($config['ebay']['apiKey'])) {
          $ebayResults = file_get_contents(str_replace('__APIKEY__', $config['ebay']['apiKey'], $config['ebay']['url']));
          if (false !== $ebayResults) {
            $ebayResults = json_decode($ebayResults, true);
            if (isset($ebayResults['findItemsAdvancedResponse'][0]['searchResult'][0]['item'])
              && is_array($ebayResults['findItemsAdvancedResponse'][0]['searchResult'][0]['item'])
              && !empty($ebayResults['findItemsAdvancedResponse'][0]['searchResult'][0]['item'])
            ) {
              $pageData['ebayResults'] = $ebayResults['findItemsAdvancedResponse'][0]['searchResult'][0]['item'];
            }
          }
        }
      }

      $app->response->headers->set('Content-Type', 'text/xml; charset=utf-8');
      $app->render('view/rss/ebay.php', $pageData);
    } catch (Exception $e) {
      // TODO: Log this appropriately
    }
  })->name('ebay-rss');
});