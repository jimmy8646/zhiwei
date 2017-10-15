<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/github-gist.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <!-- Global Site Tag - Google Adsence -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-3273735728404530",
        enable_page_level_ads: true
      });
    </script>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107138136-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());
      gtag('config', 'UA-107138136-1');
    </script>

    <title>
      <?php if(is_single()): ?>
        <?php the_title();?>
      <?php else: ?>
        <?php bloginfo();?>
      <?php endif; ?>
    </title>


    <?php wp_head(); ?>
  </head>
  <body>
    <div id="header-top" style="display:none;">
      <div id="rwd-menu" class="container menu-02 p-3">
        <div class ="d-flex flex-column">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'menu small' ) ); ?>
          <?php get_search_form() ?>
        </div>
      </div>
    </div>
    <header id="header" class="py-5">
      <div class="container">
        <div class="wrap d-flex align-items-center justify-content-md-start justify-content-between">
          <!-- Header content -->
          <div id="bloginfo"><a href="/"><?php bloginfo();?></a></div>
          <div class="hidden-md-down"><?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'menu menu-01 small px-5' ) ); ?></div>
          <div class="hidden-md-down"><?php get_search_form() ?></div>
          <div class="hidden-md-up p-2 card" onclick="toggle('header-top')"><i class="fa fa-bars m-0"></i></div>
        </div>
      </div>
    </header>
