<?php
/**
 * Register our css and javascript file
 *
 */
function add_custom_scripts() {

  wp_enqueue_style('styles', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js');

}
add_action('wp_enqueue_scripts', 'add_custom_scripts');
?>

<?php
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
?>


<?php
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
?>
