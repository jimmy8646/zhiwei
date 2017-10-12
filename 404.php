<!--<body>-->

  <!--<header>-->
  <?php get_header(); ?>
  <!--</header>-->

  <div id="page" class="container py-4 mb-5">

    <div class="wrap">

      <div id ="content" role="main">
        <div class="pt-5">
          <h2 class="mb-3">此頁面不存在 :</h2>
          <p>可以參考下列網站連結，或回去 <a href="/">文章列表</a> 觀看 : </p>
        </div>

        <hr class="mb-5">

        <?php
          $id=1513;
          //$id=43;
          $post = get_post($id);
          echo apply_filters('the_content', $post->post_content);

        ?>
      </div>

      <?php get_sidebar(); ?>

    </div>

  </div>

  <?php get_footer(); ?>

<!--</body>-->
