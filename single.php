<!--<body>-->

  <!--<header>-->
  <?php get_header(); ?>
  <!--</header>-->

  <div id="page" class="container py-5">

    <div class="wrap">

      <div id ="content" role="main">
        <?php get_template_part('/template-parts/breadcrumb','yoast' ) ?>
        <!-- Page content -->

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
        style="display:block"
        data-ad-format="fluid"
        data-ad-layout-key="-gr-j+37-1y-5z"
        data-ad-client="ca-pub-3273735728404530"
        data-ad-slot="9496531245"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="py-5">
          <div class="title text-center mb-5">
            <h1>
              <a href="<?php the_permalink();?>">
                <?php the_title(); ?>
              </a>
            </h1>
            <div class ="small" style ="opacity:0.6;"><?php echo '發表於  '.get_the_date('Y-m-d')?></div>
          </div>
          <div class="body">
             <?php the_content(); ?>
          </div>
        </article>

        <?php endwhile; else : ?>
      <?php endif; ?>

      </div>

      <?php get_sidebar(); ?>

    </div>

  </div>

  <?php get_footer(); ?>

<!--</body>-->
