<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/github-gist.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-3273735728404530",
        enable_page_level_ads: true
      });
    </script>

    <title><?php the_title();?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="header" class="py-5">
      <div class="container">
        <div class="wrap d-flex align-items-center">
          <!-- Header content -->
          <div id="bloginfo"><a href="/"><?php bloginfo();?></a></div>
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'menu menu-01 small px-5' ) ); ?>
        </div>
      </div>
    </header>
