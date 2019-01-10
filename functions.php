<?php
	// Load stylesheets
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// Enable support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 1000,
		'width'       => 1000,
		'flex-height' => true,
	) );
	
	//Posts excerpt settings
	function new_excerpt_more( $more ) {
		return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );

	//Blog page post filter and pagination
	function post_pagination( $query ) {
		$sticky = get_option( 'sticky_posts' );
		if ($query->is_home() && $query->is_main_query() ) {
			$query->set( 'posts_per_page', '5' );
			$query->set('post__not_in', get_option('sticky_posts'));

		}
	}
	add_action( 'pre_get_posts', 'post_pagination' );

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

		function df_disable_comments_post_types_support() {
			$post_types = get_post_types();
			foreach ($post_types as $post_type) {
				if(post_type_supports($post_type, 'comments')) {
					remove_post_type_support($post_type, 'comments');
					remove_post_type_support($post_type, 'trackbacks');
				}
			}
		}
		add_action('admin_init', 'df_disable_comments_post_types_support');
		// Close comments on the front-end
		function df_disable_comments_status() {
			return false;
		}
		add_filter('comments_open', 'df_disable_comments_status', 20, 2);
		add_filter('pings_open', 'df_disable_comments_status', 20, 2);
		// Hide existing comments
		function df_disable_comments_hide_existing_comments($comments) {
			$comments = array();
			return $comments;
		}
		add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
		// Remove comments page in menu
		function df_disable_comments_admin_menu() {
			remove_menu_page('edit-comments.php');
		}
		add_action('admin_menu', 'df_disable_comments_admin_menu');
		// Redirect any user trying to access comments page
		function df_disable_comments_admin_menu_redirect() {
			global $pagenow;
			if ($pagenow === 'edit-comments.php') {
				wp_redirect(admin_url()); exit;
			}
		}
		add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
		// Remove comments metabox from dashboard
		function df_disable_comments_dashboard() {
			remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
		}
		add_action('admin_init', 'df_disable_comments_dashboard');
		// Remove comments links from admin bar
		function df_disable_comments_admin_bar() {
			if (is_admin_bar_showing()) {
				remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
			}
		}
		add_action('init', 'df_disable_comments_admin_bar');
		
	}
?>