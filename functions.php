<?php
// turn off automatic development updates
define( 'WP_AUTO_UPDATE_CORE', false );

define('THEME_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('THEME_VERSION', time());

# Enqueue Custom Scripts
require_once( __DIR__ . '/inc/enqueue-scripts.php');

# HELPER FUNCTIONS
require_once( __DIR__ . '/inc/helpers.php');

# SITE ADJUSTMENTS
require_once( __DIR__ . '/inc/config/register-colors.php');
require_once( __DIR__ . '/inc/config/register-menus.php');

?>
