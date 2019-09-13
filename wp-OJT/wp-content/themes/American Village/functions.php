<?php
    add_theme_support('post-thumbnails');
function new_excerpt_more($more) {
  return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>

<?php
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}
?>
