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

          <div class="title mb-4">
            <h2>
              <a href="<?php the_permalink();?>">
                <?php the_title(); ?>
              </a>
            </h2>
            <div class ="small" style ="opacity:0.6;">
              <span class="postdate"><?php echo get_the_date('Y-m-d')?><?php echo " | "?></span>
              <span class="menu d-inline-block text-danger"><?php the_category() ?></span>
              <span class="tags"><?php echo " | "?><?php the_tags(); ?></span>
            </div>
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
