<?php
// Add support for post thumbnails
add_theme_support( 'post-thumbnails' ); 

// Add support for full and wide align images.
add_theme_support( 'align-wide' );

// Add read more to excerpts
function update_read_more_link($more) {
  global $post;
  $dir =  get_bloginfo('stylesheet_directory');
  // $chevron = include(THEME_DIR . "/img/search.svg");

  return '<a class="btn btn-clear btn-read-more" href="'. get_permalink($post->ID) . '">Read More <i class="icon-chevron"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg></i></a>';
 }
 add_filter('excerpt_more', 'update_read_more_link');




// Add reusable blocks as sidebar link in admin panel
add_action( 'admin_menu', 'linked_url' );
function linked_url() {
  add_menu_page( 'linked_url', 'Reusable Blocks', 'read', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
}
