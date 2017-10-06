# Lupin III Encyclopedia Web Site

This is the source code for the Lupin III Encyclopedia web site [www.lupinencyclopedia.com](http://www.lupinencyclopedia.com).
You can fork it, install it on your own server, and have a nearly complete (see notes below) version of the site to alter
as you see fit. Do be kind and at least acknowledge this original source, if you do host your own version.

## What is Required

You must install the site on server using PHP 7.

## What You Do NOT Get

While most of the site is built on open source software, there are two main components that are paid pieces of software.
I use the [Unify](https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697) theme for the site HTML
and CSS. Unify is based off of [Bootstrap](http://getbootstrap.com/); you should be able to plug any Bootstrap based
theme into your fork, alter the paths to CSS, and have it look decent.

I also use [Content Timeline](http://www.shindiristudio.com/plugins/html-plugins/content-timeline-jq/) jQuery
plugin for rendering the timelines seen on the anime pages, etc. There is likely no equivalent plugin that you could
drop in its place. If you do not wish to invest in the plugin, you will need to rework the sections that use it.

## What You DO Get

You get... everything else! All the content, images, etc. I have curated over the years. This is an exact replica of
the site content as it appears on [www.lupinencyclopedia.com](http://www.lupinencyclopedia.com).

## Installation

   ```bash
   $ git clone git@github.com:sprak3000/LupinIIIEncyclopedia.git
   $ composer install
   ```

## Documentation

All additional documentation can be found in the [doc](https://github.com/sprak3000/LupinIIIEncyclopedia/tree/master/doc)
folder.

## Contributing

* [Getting Started](https://github.com/sprak3000/git@github.com:sprak3000/LupinIIIEncyclopedia.git/blob/master/doc/CONTRIBUTING.md)
* [Bug Reports](https://github.com/sprak3000/git@github.com:sprak3000/LupinIIIEncyclopedia.git/blob/master/doc/CONTRIBUTING.md#bug-reports)
* [Feature Requests](https://github.com/sprak3000/git@github.com:sprak3000/LupinIIIEncyclopedia.git/blob/master/doc/CONTRIBUTING.md#feature-requests)
* [Pull Requests](https://github.com/sprak3000/git@github.com:sprak3000/LupinIIIEncyclopedia.git/blob/master/doc/CONTRIBUTING.md#pull-requests)