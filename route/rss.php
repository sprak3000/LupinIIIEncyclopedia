<?php
use sprak3000\lupinencyclopedia\Slim\Page;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\app;

$pageUtil = new Page\Util();

/**
 * Routes for /games and below
 */
$app->group('/rss', function (App $app) use ($pageUtil) {
  /**
   * Route for eBay Auctions
   */
  $app->get('/ebay', function (Request $req,  Response $res, $args = []) use ($app, $pageUtil) {
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

        $hasUrl = isset($config['ebay']['url']) && !empty($config['ebay']['url']);
        $hasApiKey = isset($config['ebay']['apiKey']) && !empty($config['ebay']['apiKey']);
        $hasKeywords = isset($config['ebay']['keywords']) && !empty($config['ebay']['keywords']);

        if ($hasUrl && $hasApiKey && $hasKeywords) {
          $ebayUrl = str_replace('__APIKEY__', $config['ebay']['apiKey'], $config['ebay']['url']);
          $ebayUrl = str_replace('__KEYWORDS__', implode("+", $config['ebay']['keywords']), $ebayUrl);

          if(isset($config['ebay']['categories']['exclude']) && !empty($config['ebay']['categories']['exclude'])) {
            $excludes = [];
            foreach($config['ebay']['categories']['exclude'] as $index => $exclude) {
              $excludes[] = "itemFilter(0).value(" . $index . ")=" . $exclude;
            }

            $ebayUrl = str_replace('__EXCLUDECATEGORIES__', implode("&", $excludes), $ebayUrl);
          }


          $ebayResults = file_get_contents($ebayUrl);

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

      $res = $res->withHeader('Content-Type', 'text/xml; charset=utf-8');
    } catch (Exception $e) {
      // TODO: Log this appropriately
    }
    return $this->view->render($res, 'view/rss/ebay.php', $pageData);
  })->setName('ebay-rss');
});
