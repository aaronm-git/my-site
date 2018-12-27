<?php
// Load stylesheets
wp_enqueue_style( 'style', get_stylesheet_uri() );

// Enable support for custom logo.
add_theme_support( 'custom-logo', array(
	'height'      => 1000,
	'width'       => 1000,
	'flex-height' => true,
) );



?>