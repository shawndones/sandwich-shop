<?php

function enqueue_scripts(){

	$dir =  get_bloginfo('stylesheet_directory');

	# enqueue jquery
	wp_enqueue_script('jquery', $dir . '/js/libs/jquery-3.3.1.min.js');

	# enqueue custom scripts
	wp_enqueue_script('scripts', $dir . '/js/scripts.js', array('jquery'),  THEME_VERSION, true);

	# enqueue custom styles
	// wp_enqueue_style( 'font_roboto', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap', array(), THEME_VERSION );
	wp_enqueue_style( 'style', $dir . '/style.css', array(), THEME_VERSION );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');



