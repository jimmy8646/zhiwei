<!--<body>-->

  <!--<header>-->
  <?php get_header(); ?>
  <!--</header>-->

  <div id="page" class="container py-4 mb-5">

    <div class="wrap">

      <div id ="content" role="main">

        <!-- Page content -->

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="py-5">

          <div class="title mb-5">
            <h1>
              <a href="<?php the_permalink();?>">
                <?php the_title(); ?>
              </a>
            </h1>
          </div>

          <div class="body">
             <?php the_content(); ?>
          </div>

          <?php if(has_post_thumbnail()): ?>
            <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail('400X250'); ?>
            </a>
          <?php endif; ?>



        </article>

      <?php endwhile; ?>

      <?php the_posts_pagination(array(
	       'mid_size'  => 10,
	       'prev_text' => __( '<', 'textdomain' ),
	       'next_text' => __( '>', 'textdomain' ),
       ) ); ?>

      <?php endif; ?>

      </div>

      <?php get_sidebar(); ?>

    </div>

  </div>

  <?php get_footer(); ?>

<!--</body>-->
