<?php
add_action( 'init', 'register_my_menus' );
add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );
function register_my_menus() {
 register_nav_menus(
 array( 'top-navigation' => __( 'MenuHo' ))
 );
}
?>