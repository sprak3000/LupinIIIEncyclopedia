<?php
/**
 * Route for the homepage
 */
$app->get('/', function () use ($app) {
  $includeCss = [];
  $includeCss[] = '/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/profile.css';
  $includeCss[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/perfect-scrollbar.css';

  $includeJs = [];
  $includeJs[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/jquery.mousewheel.js';
  $includeJs[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/perfect-scrollbar.js';

  $inlineJs = [];
  $inlineJs[] = "jQuery(document).ready(function ($) { \"use strict\"; $('.contentHolder').perfectScrollbar(); });";

  $pageData = [];
  $pageData['pageTitle'] = 'Home';
  $pageData['pageAuthor'] = 'Luis A. Cruz';
  $pageData['pageDescription'] = '';

  $pageData['includeCss'] = $includeCss;
  $pageData['includeJs'] = $includeJs;
  $pageData['inlineJs'] = $inlineJs;

  $pageData['homeNav'] = true;

  $pageData['forumRss'] = [];
  $pageData['eBayRss'] = [];

  try {
    $pageData['forumRss'] = simplexml_load_file("http://www.lupinencyclopedia.com/forums/index.php?action=.xml");
  } catch (Exception $e) {
    // TODO: Log this appropriately
  }

  try {
    $pageData['ebayResults'] = [];
    $configFile = file_get_contents(__DIR__ . '/../application/config.json');
    if (false !== $configFile) {
      $config = json_decode($configFile, true);
      if (isset($config['ebay']['url']) && !empty($config['ebay']['url']) && isset($config['ebay']['apiKey']) && !empty($config['ebay']['apiKey'])) {
        $ebayResults = file_get_contents(str_replace('__APIKEY__', $config['ebay']['apiKey'], $config['ebay']['url']));
        if (false !== $ebayResults) {
          $ebayResults = json_decode($ebayResults, true);

          if (isset($ebayResults['findItemsAdvancedResponse'][0]['searchResult'][0]['item'])
            && is_array($ebayResults['findItemsAdvancedResponse'][0]['searchResult'][0]['item'])
            && !empty($ebayResults['findItemsAdvancedResponse'][0]['searchResult'][0]['item'])
          ) {
            $pageData['ebayResults'] = array_slice($ebayResults['findItemsAdvancedResponse'][0]['searchResult'][0]['item'], 0, 25);
          }
        }
      }
    }
  } catch (Exception $e) {
    // TODO: Log this appropriately
  }

  $app->render('view/home.php', $pageData);
})->name('homepage');