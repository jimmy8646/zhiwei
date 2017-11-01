<!--<body>-->

  <!--<header>-->
  <?php get_header(); ?>
  <!--</header>-->

  <div id="page" class="container py-5">

    <div class="wrap">

      <div id ="content" role="main">
        <?php get_template_part('/template-parts/breadcrumb', 'yoast') ?>
        <!-- Page content -->

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- GGININ -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-5572684550404573"
             data-ad-slot="3529613996"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="py-5">
          <div class="title text-center mb-5">
            <h1>
              <a href="<?php the_permalink();?>">
                <?php the_title(); ?>
              </a>
            </h1>
            <div class ="small" style ="opacity:0.6;">
              <span class="postdate"><?php echo get_the_date('Y-m-d')?><?php echo " | "?></span>
              <span class="menu d-inline-block text-danger"><?php the_category() ?></span>
              <span class="tags"><?php echo " | "?><?php the_tags(); ?></span>
            </div>
          </div>
          <div class="body">
             <?php the_content(); ?>
          </div>

          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- GGININ -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-5572684550404573"
                 data-ad-slot="3529613996"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

          <?php
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
          ?>

        </article>

        <?php endwhile; else : ?>
      <?php endif; ?>

      </div>

      <?php get_sidebar(); ?>

    </div>

  </div>

  <?php get_footer(); ?>

<!--</body>-->
