<!--<body>-->

  <!--<header>-->
  <?php get_header(); ?>
  <!--</header>-->

  <div id="page">

    <div class="wrap">

      <div id ="content" role="main">

        <!-- Page content -->

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article>
          <div class="title">
            <a href="<?php the_permalink();?>">
              <?php the_title(); ?>
            </a>
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
