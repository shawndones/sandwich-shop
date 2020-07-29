<?php
// register menus
function register_my_menus() {
  register_nav_menus(
    array(
      'primary-nav' => __( 'Primary Navigation' ),
      'footer-nav' => __( 'Footer Navigation' ),
      'utility-nav' => __( 'Utility Navigation' ),
      '404-nav' => __( '404 Navigation' )
    )
  );
}
add_action( 'init', 'register_my_menus' );