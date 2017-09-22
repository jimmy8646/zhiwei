<!--<body>-->

  <!--<header>-->
  <?php get_header(); ?>
  <!--</header>-->

  <div id="page" class="container py-5">

    <div class="wrap">

      <div id ="content" role="main">
        <?php get_template_part('/template-parts/breadcrumb','yoast' ) ?>
        <!-- Page content -->

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
