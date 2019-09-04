<?php
// Load the theme stylesheets
function theme_styles()
{
	// Example of loading a jQuery slideshow plugin just on the homepage
	// wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );

	// Load all of the styles that need to appear on all pages
	wp_enqueue_style('pure', get_template_directory_uri() . '/resources/css/pure-min.css');
	wp_enqueue_style('grids-responsive', get_template_directory_uri() . '/resources/css/grids-responsive-min.css');
	wp_enqueue_style('blog', get_template_directory_uri() . '/resources/css/blog.css');
	wp_enqueue_style('main', get_stylesheet_uri());

	// Conditionally load the FlexSlider CSS on the homepage
	// if(is_page('home')) {
	// 	wp_enqueue_style('flexslider');
	// }
}

// Website logo/profile picture
function website_logo_url()
{
	if (has_custom_logo()) {
		$custom_logo_id = get_theme_mod('custom_logo');
		$image = wp_get_attachment_image_src($custom_logo_id, 'full');
		echo $image[0];
	} else {
		echo get_template_directory_uri() . "/resources/pictures/default-pic.png";
	}
}

add_action('wp_enqueue_scripts', 'theme_styles');

// Enable support for custom logo.
add_theme_support('custom-logo', array(
	'height'      => 1000,
	'width'       => 1000,
	'flex-height' => true,
));

// Show only sticky posts
function onlyStickyPosts()
{
	$sticky = get_option('sticky_posts');
	// check if there are any
	if (!empty($sticky)) {
		// optional: sort the newest IDs first
		rsort($sticky);
		// override the query
		$args = array(
			'post__in' => $sticky
		);
		query_posts($args);
		// the loop
		while (have_posts()) {
			the_post();
			// your code
			get_template_part('article');
		}
	}
	wp_reset_query();
}

// Show posts
function showPosts()
{
	while (have_posts()) {
		the_post();
		get_template_part('article');
	}
	the_posts_pagination();
	wp_reset_query();
}

//Posts excerpt settings
function new_excerpt_more($more)
{
	return ' <a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Blog page post filter and pagination
function post_pagination($query)
{
	$sticky = get_option('sticky_posts');
	if ($query->is_home() && $query->is_main_query()) {
		$query->set('posts_per_page', '5');
		$query->set('post__not_in', get_option('sticky_posts'));
	}
}
add_action('pre_get_posts', 'post_pagination');

if (function_exists('register_sidebar')) {
	// Define Sidebar Widget Area 1
	register_sidebar(array(
		'name' => __('Widget Area 1', 'html5blank'),
		'description' => __('Description for this widget-area...', 'html5blank'),
		'id' => 'widget-area-1',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	// Define Sidebar Widget Area 2
	register_sidebar(array(
		'name' => __('Widget Area 2', 'html5blank'),
		'description' => __('Description for this widget-area...', 'html5blank'),
		'id' => 'widget-area-2',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	function df_disable_comments_post_types_support()
	{
		$post_types = get_post_types();
		foreach ($post_types as $post_type) {
			if (post_type_supports($post_type, 'comments')) {
				remove_post_type_support($post_type, 'comments');
				remove_post_type_support($post_type, 'trackbacks');
			}
		}
	}
	add_action('admin_init', 'df_disable_comments_post_types_support');
	// Close comments on the front-end
	function df_disable_comments_status()
	{
		return false;
	}
	add_filter('comments_open', 'df_disable_comments_status', 20, 2);
	add_filter('pings_open', 'df_disable_comments_status', 20, 2);
	// Hide existing comments
	function df_disable_comments_hide_existing_comments($comments)
	{
		$comments = array();
		return $comments;
	}
	add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
	// Remove comments page in menu
	function df_disable_comments_admin_menu()
	{
		remove_menu_page('edit-comments.php');
	}
	add_action('admin_menu', 'df_disable_comments_admin_menu');
	// Redirect any user trying to access comments page
	function df_disable_comments_admin_menu_redirect()
	{
		global $pagenow;
		if ($pagenow === 'edit-comments.php') {
			wp_redirect(admin_url());
			exit;
		}
	}
	add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
	// Remove comments metabox from dashboard
	function df_disable_comments_dashboard()
	{
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
	}
	add_action('admin_init', 'df_disable_comments_dashboard');
	// Remove comments links from admin bar
	function df_disable_comments_admin_bar()
	{
		if (is_admin_bar_showing()) {
			remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
		}
	}
	add_action('init', 'df_disable_comments_admin_bar');

	// Replace footer menu links classes with pure's classes
	add_filter('wp_list_pages', create_function('$t', 'return str_replace("<li ", "<li class=\"pure-menu-item\" ", $t);'));
	add_filter('wp_list_pages', create_function('$t', 'return str_replace("<a ", "<a class=\"pure-menu-link\" ", $t);'));

	// Main menu filter
	add_filter('wp_list_pages', create_function('$t', 'return str_replace("<li ", "<li class=\"pure-menu-item\" ", $t);'));
	add_filter('wp_list_pages', create_function('$t', 'return str_replace("<a ", "<a class=\"pure-menu-link\" ", $t);'));
}
