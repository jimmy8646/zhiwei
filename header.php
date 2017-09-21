<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/agate.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <title><?php the_title();?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="header">
      <!-- Header content -->
      <h1><a href="/"><?php bloginfo();?></a></h1>
      <div><?php bloginfo('description') ?></div>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'header-menu' ) ); ?>
    </header>
