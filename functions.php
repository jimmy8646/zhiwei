<?php
/**
 * Register our css and javascript file
 *
 */
function add_custom_scripts() {
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 

  wp_enqueue_style('styles', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js');

}
add_action('wp_enqueue_scripts', 'add_custom_scripts');

/**
 * thumbails
 *
 */
add_theme_support('post-thumbnails');

function add_custom_sizes()
{
    add_image_size('400X250', 400, 250, array( 'center', 'center'));
}
add_action('after_setup_theme', 'add_custom_sizes');

/**
 * Register menu
 *
 */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function register_widgets_init() {

	register_sidebar( array(
		'name'          => 'sidebar-first',
		'id'            => 'sidebar-first',
		'before_widget' => '<div class ="widget-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'register_widgets_init' );

/**
 * change readmore text
 *
 */
function set_more_link() {
  return '<a class="more-link d-block mt-5"  style ="color:inherit" href="' . get_permalink() . '">閱讀全文»</a>';
}
add_filter( 'the_content_more_link', 'set_more_link' );
?>
