<?php

namespace sprak3000\lupinencyclopedia\Slim\Page;

class Data
{
    protected $includeCSS = [];
    protected $includeJS = [];
    protected $inlineJS = [];
    protected $title = '';
    protected $description = '';
    protected $navigation = [];
    protected $images = [];
    protected $forumRSS;
    protected $eBayRSS;
    protected $is404 = false;
    protected $pageUtil;
    protected $animeNewsNetworkData;

    public function __construct()
    {
        $this->pageUtil = new Util();
    }

    public function withTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function withDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }

    public function withNavigation(array $navigation)
    {
        $this->navigation = $navigation;
        return $this;
    }

    public function withGallery(string $galleryPath = '')
    {
        $this->includeCSS[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';
        $this->includeCSS[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';
        $this->includeJS[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
        $this->includeJS[] = '/dist/unify-1.8/js/plugins/fancy-box.js';
        $this->inlineJS[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';

        if ($galleryPath !== '') {
            $this->images = $this->pageUtil->GetImagesForGallery($galleryPath);
        }

        return $this;
    }

    public function withAnimeNewsNetworkData(int $id)
    {
        $this->animeNewsNetworkData = $this->pageUtil->GetAnimeData($id);
        return $this;
    }

    public function withTVTimeline($startItem)
    {
        $this->includeCSS[] = '/dist/css/timeline/assets/css/card.css';
        $this->includeJS[] = '/dist/js/timeline/assets/js/jquery.timeline.min.js';
        $this->inlineJS[] = 'jQuery(document).ready(function() { jQuery("#episode-timeline").timeline({startItem : "' . $startItem . '", closeText : "x"}); });';
        return $this;
    }

    public function withTimeline()
    {
        $this->includeCSS[] = '/dist/unify-1.8/css/pages/shortcode_timeline1.css';
        return $this;
    }

    public function withNewsletter()
    {
        $this->includeCSS[] = '/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/blog.css';
        $this->includeJS[] = '/bower_components/handlebars/handlebars.min.js';
        $this->includeJS[] = '/dist/js/Newsletter.js';
        return $this;
    }

    public function withMailingList()
    {
        $this->includeCSS[] = '/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/page_search.css';
        $this->includeCSS[] = '/dist/css/MailingList.css';
        $this->includeJS[] = '/bower_components/lodash/dist/lodash.min.js';
        $this->includeJS[] = '/bower_components/backbone/backbone.js';
        $this->includeJS[] = '/bower_components/handlebars/handlebars.min.js';
        $this->includeJS[] = '/dist/js/MailingList.js';
        return $this;
    }

    public function withForumRSS()
    {
        $this->addScrollbar();

        try {
            $this->forumRSS = simplexml_load_file("http://www.lupinencyclopedia.com/forums/index.php?action=.xml");
        } catch (Exception $e) {
            // TODO: Log this appropriately
        }

        return $this;
    }

    public function withEbayRSS()
    {
        $this->addScrollbar();

        try {
            $this->eBayRSS = simplexml_load_file("http://www.lupinencyclopedia.com/rss/ebay");
        } catch (Exception $e) {
            // TODO: Log this appropriately
        }

        return $this;
    }

    public function with404()
    {
        $this->includeCSS[] = '/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/page_404_error1.css';
        $this->includeJS[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/backstretch/jquery.backstretch.min.js';
        $this->inlineJS[] = '$.backstretch(["/dist/asset/img/404-bg-1.jpg"], {});';
        $this->is404 = true;
        return $this;
    }

    public function data(array $additionalOptions = [])
    {
        return array_merge([
            'pageTitle' => $this->title,
            'pageDescription' => $this->description,

            'images' => $this->images,
            'annData' => $this->animeNewsNetworkData,

            'includeCss' => $this->includeCSS,

            'includeJs' => $this->includeJS,
            'inlineJs' => $this->inlineJS,

            'nav' => $this->navigation,
            'is404' => $this->is404,

            'forumRss' => $this->forumRSS,
            'eBayRss' => $this->eBayRSS,
        ],
            $additionalOptions);
    }

    protected function addScrollbar()
    {
        if (!in_array('/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/profile.css', $this->includeCSS)) {
            $this->includeCSS[] = '/dist/css/wrapbootstrap/unify/HTML/assets/css/pages/profile.css';
            $this->includeCSS[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/perfect-scrollbar.css';

            $this->includeJS[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/jquery.mousewheel.js';
            $this->includeJS[] = '/dist/js/wrapbootstrap/unify/HTML/assets/plugins/scrollbar/src/perfect-scrollbar.js';

            $this->inlineJS[] = "jQuery(document).ready(function ($) { \"use strict\"; $('.contentHolder').perfectScrollbar(); });";
        }
    }
}
