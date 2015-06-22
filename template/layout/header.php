<?php
/**
 * Common Page Header
 * Based on the wrapbootstrap Unify theme
 */
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
  <head>
    <title><?php echo $pageTitle ?> | Lupin III Encyclopedia</title>

    <?php /** Meta Data */ ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="author" content="<?php echo (isset($pageAuthor) && !empty($pageAuthor)) ? $pageAuthor : 'Luis A. Cruz'; ?>">

    <?php // Favicon ?>
    <?php //link rel="shortcut icon" href="favicon.ico" ?>

    <?php /** CSS Global Compulsory */ ?>
    <link rel="stylesheet" href="/dist/css/wrapbootstrap/unify/HTML/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dist/css/wrapbootstrap/unify/HTML/assets/css/style.css">

    <?php /** CSS Implementing Plugins */ ?>
    <link rel="stylesheet" href="/dist/css/wrapbootstrap/unify/HTML/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="/dist/css/wrapbootstrap/unify/HTML/assets/plugins/font-awesome/css/font-awesome.css">

    <?php /** CSS Theme  */ ?>
    <link rel="stylesheet" href="/dist/css/wrapbootstrap/unify/HTML/assets/css/theme-colors/default.css">

<?php
/** File based CSS */
if( isset( $includeCss ) && is_array( $includeCss ) && !empty( $includeCss ) )
{
  foreach( $includeCss as $css )
  {
?>
    <link rel="stylesheet" href="<?php echo $css; ?>">
<?php
  }
}

/** Inline CSS */
if( isset( $inlineCss ) && is_array( $inlineCss ) && !empty( $inlineCss ) )
{
?>
    <style type="text/css">
      <?php echo implode("\r\n", $inlineCss); ?>
    </style>
<?php
}

/** Overrides of the above */
?>
    <link rel="stylesheet" href="/dist/css/wrapbootstrap/unify/HTML/assets/css/custom.css">
  </head>

  <body>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TBBR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-TBBR');</script>
    <!-- End Google Tag Manager -->

<?php
if(!isset($is404)) {
?>
    <div class="wrapper">

    <?php /** Header */ ?>
    <div class="header<?php if(isset($homeNav)) { ?> margin-bottom-40<?php } ?>">
        <?php /** Top - Left here to ensure padding for header block */ ?>
        <div class="topbar"></div>

        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <?php /** Brand and toggle get grouped for better mobile display */ ?>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                      <img class="img-responsive" src="/dist/asset/img/lupin-encyclopedia-banner.png" id="logo-header" alt="Home | Lupin III Encyclopedia" />
                    </a>
                </div>

                <?php /** Collect the nav links, forms, and other content for toggling */ ?>
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <li<?php if(isset($homeNav)) { ?> class="active"<?php } ?>><a href="/">Home</a></li>

                        <li><a href="/forums">Forums</a></li>

                        <li class="dropdown<?php if(isset($animeNav)) { echo ' active'; } ?>">
                          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Anime
                            <i class="icon-angle-down"></i>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="<?php if(isset($pilotNav)) { echo ' active'; } ?>"><a href="/anime/pilot-film">Pilot Film</a></li>
                            <li class="<?php if(isset($firstTvNav)) { echo ' active'; } ?>"><a href="/anime/tv-series/first">First TV Series</a></li>
                            <li class="<?php if(isset($secondTvNav)) { echo ' active'; } ?>"><a href="/anime/tv-series/second">Second TV Series</a></li>
                            <li class="<?php if(isset($thirdTvNav)) { echo ' active'; } ?>"><a href="/anime/tv-series/third">Third TV Series</a></li>
                            <li class="<?php if(isset($fourthTvNav)) { echo ' active'; } ?>"><a href="/anime/tv-series/fourth">Fourth TV Series</a></li>
                            <li class="<?php if(isset($viiiTvNav)) { echo ' active'; } ?>"><a href="/anime/tv-series/lupin-viii">Lupin VIII TV Series</a></li>
                            <li class="<?php if(isset($fujikoTvNav)) { echo ' active'; } ?>"><a href="/anime/tv-series/woman-called-mine-fujiko">Woman Called Mine Fujiko TV Series</a></li>
                            <li class="<?php if(isset($filmNav)) { echo ' active'; } ?>"><a href="/anime/theatrical-films">Theatrical Films</a></li>
                            <li class="<?php if(isset($specialsNav)) { echo ' active'; } ?>"><a href="/anime/tv-specials">TV Specials</a></li>
                            <li class="<?php if(isset($ovaNav)) { echo ' active'; } ?>"><a href="/anime/original-video-animation">OVA</a></li>
                            <li class="<?php if(isset($nonNav)) { echo ' active'; } ?>"><a href="/anime/non-lupin">Non-Lupin</a></li>
                          </ul>
                        </li>

                        <li<?php if(isset($mangaNav)) { ?> class="active"<?php } ?>><a href="/manga">Manga</a></li>

                        <li<?php if(isset($gamesNav)) { ?> class="active"<?php } ?>><a href="/games">Games</a></li>

                        <li class="dropdown<?php if(isset($profilesNav)) { echo ' active'; } ?>">
                          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Profiles
                            <i class="icon-angle-down"></i>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="<?php if(isset($monkeyPunchNav)) { echo ' active'; } ?>"><a href="/profile/monkey-punch">Monkey Punch</a></li>
                            <li class="<?php if(isset($lupinIIINav)) { echo ' active'; } ?>"><a href="/profile/lupin-iii">Ars&egrave;ne Lupin III</a></li>
                            <li class="<?php if(isset($jigenDaisukeNav)) { echo ' active'; } ?>"><a href="/profile/jigen-daisuke">Jigen Daisuke</a></li>
                            <li class="<?php if(isset($ishikawaGoemonNav)) { echo ' active'; } ?>"><a href="/profile/ishikawa-goemon">Ishikawa Goemon</a></li>
                            <li class="<?php if(isset($mineFujikoNav)) { echo ' active'; } ?>"><a href="/profile/mine-fujiko">Mine Fujiko</a></li>
                            <li class="<?php if(isset($zenigataKoichiNav)) { echo ' active'; } ?>"><a href="/profile/inspector-zenigata-koichi">Inspector Zenigata Koichi</a></li>
                            <li class="<?php if(isset($leblancNav)) { echo ' active'; } ?>"><a href="/profile/maurice-leblanc">Maurice Leblanc</a></li>
                          </ul>
                        </li>

                        <li class="dropdown<?php if(isset($lootNav)) { echo ' active'; } ?>">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Random Loot
                                <i class="icon-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="<?php if(isset($musicNav)) { echo ' active'; } ?>"><a href="/random-loot/music">Music</a></li>
                                <li class="<?php if(isset($mlNav)) { echo ' active'; } ?>"><a href="/random-loot/kent-state-lupin-mailing-list">Kent State Mail List Archive</a></li>
                                <li class="<?php if(isset($newsletterNav)) { echo ' active'; } ?>"><a href="/random-loot/newsletter">Yahoo! Group Newsletter Archive</a></li>
                                <li class="<?php if(isset($tafNav)) { echo ' active'; } ?>"><a href="/random-loot/tokyo-international-anime-fair">Tokyo International Anime Fair</a></li>
                                <li class="<?php if(isset($looseChangeNav)) { echo ' active'; } ?>"><a href="/random-loot/loose-change">Loose Change</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><?php /** /navbar-collapse */ ?>
            </div>
        </div>
    </div>

   <?php /** Breadcrumbs */ ?>
   <div class="breadcrumbs margin-bottom-40<?php if(isset($homeNav)) { ?> hidden<?php } ?>">
   	<div class="container">
           <h1 class="pull-left"><?php echo $pageTitle; ?></h1>
           <ul class="pull-right breadcrumb">
               <li><a href="/">Home</a></li>
<?php
  if( isset($nav) && is_array($nav) && !empty($nav) )
  {
    foreach( $nav as $title => $link )
    {
      $text = $title;
      if(!empty($link))
      {
        $text = '<a href="' . $link . '">' . $text . "</a>";
      }
?>
               <li><?php echo $text; ?></li>
<?php
    }
  }
?>
           </ul>
       </div><?php /** /container */ ?>
   </div><?php /** /breadcrumbs */ ?>
   <?php /** End Breadcrumbs */ ?>
<?php
}