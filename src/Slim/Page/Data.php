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
    protected $gamesNavigation = false;
    protected $images = [];
    protected $pageUtil;

    public function __construct()
    {
        $this->pageUtil = new Util();
    }

    public function withTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function withDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function withNavigation($navigation)
    {
        $this->navigation = $navigation;
        return $this;
    }

    public function withGamesNavigation()
    {
        $this->gamesNavigation = true;
        return $this;
    }

    public function withGallery($galleryPath)
    {
        $this->includeCSS[] = '/dist/css/wrapbootstrap/unify/HTML/assets-1.4/css/app.css';
        $this->includeCSS[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.css';
        $this->includeJS[] = '/dist/unify-1.8/plugins/fancybox/source/jquery.fancybox.pack.js';
        $this->includeJS[] = '/dist/unify-1.8/js/plugins/fancy-box.js';
        $this->inlineJS[] = 'jQuery(document).ready(function() { FancyBox.initFancybox(); });';
        $this->images = $this->pageUtil->GetImagesForGallery($galleryPath);
        return $this;
    }

    public function data()
    {
        return [
            'pageTitle' => $this->title,
            'pageDescription' => $this->description,

            'images' => $this->images,

            'includeCss' => $this->includeCSS,

            'includeJs' => $this->includeJS,
            'inlineJs' => $this->inlineJS,

            'nav' => $this->navigation,
            'gamesNav' => $this->gamesNavigation,
        ];
    }
}
