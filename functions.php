<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */

	// Options Framework (https://github.com/devinsays/options-framework-plugin)
	if ( !function_exists( 'optionsframework_init' ) ) {
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/_/inc/' );
		require_once dirname( __FILE__ ) . '/_/inc/options-framework.php';
	}

	// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_setup() {
		load_theme_textdomain( 'html5reset', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status' ) );
		register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );
		add_theme_support( 'post-thumbnails' );
	}
	add_action( 'after_setup_theme', 'html5reset_setup' );

	// WP Title (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() )
			return $title;

//		 Add the site name.
		$title .= get_bloginfo( 'name' );

//		 Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";

//		 Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'html5reset' ), max( $paged, $page ) );

		return $title;
	}
	add_filter( 'wp_title', 'html5reset_wp_title', 10, 2 );



/*------------------------------------*\
    Functions
\*------------------------------------*/

// Load jQuery
if ( !function_exists( 'core_mods' ) ) {
	function core_mods() {
		if ( !is_admin() ) {
			wp_deregister_script( 'jquery' );
			wp_deregister_script( 'wp-embed' );
			wp_register_script( 'jquery', ( "//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" ),  false, null, true);
			wp_enqueue_script( 'jquery' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'core_mods' );
}

// Custom Menu
register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );

// Widgets
if ( function_exists('register_sidebar' )) {
	function html5reset_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Sidebar Widgets', 'html5reset' ),
			'id'            => 'sidebar-primary',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	add_action( 'widgets_init', 'html5reset_widgets_init' );
}

/* ENVIRONMENT
========================================================================== */
//Get the current environment. We need this to ensure that our dev assets don't go to production
function getEnvironment() {
	$templatePath;

    if ($_SERVER['HTTP_HOST'] == "localhost" || $_SERVER['HTTP_HOST'] == "127.0.0.1") {
       $templatePath = 'dev';
    } else {
        $templatePath = 'assets';
    }

    return $templatePath;

}

/* ASSETS CONFIGURATION
========================================================================== */
//Get the correct asset based in the current environment of the page. Use this togheter with "gulp-rev" for a pseuso "asset pipeline"
function asset_path($filename) {

	if (getEnvironment() === 'dev') {

		echo get_template_directory_uri().'/'.getEnvironment().'/'.$filename;

	} else {

		$manifest_path = get_template_directory() . '/assets/rev-manifest.json';

	    if (file_exists($manifest_path)) {
	        $manifest = json_decode(file_get_contents($manifest_path), TRUE);
	    } else {
	        $manifest = array();
	    }

	    if (array_key_exists($filename, $manifest)) {
	        echo get_template_directory_uri().'/'.getEnvironment().'/'.$manifest[$filename];
	    }

	}

    // return get_template_directory_uri().'/'.getEnvironment().'/'.$filename;

}

/* CUSTOM IMAGE SIZES
========================================================================== */
//Custom Thumb sizes
if ( function_exists( 'add_theme_support' ) ) {

	//Post Highlight Thumb
	add_image_size('highlight-thumb', 620, 300, 9999);

	//Post Thumb
	add_image_size('post-thumb', 300, 170, 9999);

	//Event Thumb
	add_image_size('event-thumb', 540, 300, 9999);

	//Event Thumb Small
	add_image_size('event-thumb-small', 380, 300, 9999);

	//Ticker Background-size
	add_image_size('ticker-background', 580, 334, 9999);

	//Weekly Thumb
	add_image_size('weekly-thumb', 460, 223, 9999);

	//UPDATES The large default wordpress width to the post container width
	update_option( 'large_size_w', 940 );

	//SPEAKER THUMB
	add_image_size('speaker-thumb', 40, 40, 9999);

}

/* CLEAN WORDPRESS DEFAULTS
========================================================================== */
	//Remove the comments injected styles
	function removeRecentCommentsStyle() {
		add_filter( 'show_recent_comments_widget_style', '__return_false' );
	}
	add_action( 'widgets_init', 'removeRecentCommentsStyle' );

	//Remove rss feeds and other non significant links
	remove_action ('wp_head', 'rsd_link');
	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3); // Remove category feeds
	remove_action('wp_head', 'feed_links', 2); // Remove Post and Comment Feeds
	function remove_feed () {
	   remove_theme_support( 'automatic-feed-links' );
	}
	add_action( 'after_theme_support', 'remove_feed' );

	//Remove Emojis
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	function dequeue_devicepx() {
		wp_dequeue_script( 'devicepx' );
	}
	add_action( 'wp_enqueue_scripts', 'dequeue_devicepx', 20 );


	//REMOVES THE <p> TAG AROUND A <img> TAG INSIDE THE POST
	function filter_ptags_on_images($content) {
    	$content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    	return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
	}
	add_filter('acf_the_content', 'filter_ptags_on_images', 1000);
	add_filter('the_content', 'filter_ptags_on_images', 1000);


/* CONTENT FILTERS
========================================================================== */
	//Append a wrapper before the iframe embeds. like youtube, vimeo, etc
	add_filter('embed_oembed_html', 'wrap_embed_with_div', 10, 3);
	function wrap_embed_with_div($html, $url, $attr) {
	    return "<div class=\"embed-figure__container\">".$html."</div>";
	}

	//Adds the "current-menu-item" class inside custom post type menu items
	function add_current_nav_class($classes, $item) {

	    // Getting the current post details
	    global $post;

	    // Get post ID, if nothing found set to NULL
	    $id = ( isset( $post->ID ) ? get_the_ID() : NULL );

	    // Checking if post ID exist...
	    if (isset( $id )){

	        // Getting the post type of the current post
	        $current_post_type = get_post_type_object(get_post_type($post->ID));

	        // Getting the rewrite slug containing the post type's ancestors
	        $ancestor_slug = $current_post_type->rewrite['slug'];

	        // Split the slug into an array of ancestors and then slice off the direct parent.
	        $ancestors = explode('/',$ancestor_slug);
	        $parent = array_pop($ancestors);

	        // Getting the URL of the menu item
	        $menu_slug = strtolower(trim($item->url));

	        // If the menu item URL contains the post type's parent
	        if (!empty($menu_slug) && !empty($parent) && strpos($menu_slug,$parent) !== false) {
	            $classes[] = 'current-menu-item';
	        }

	        // If the menu item URL contains any of the post type's ancestors
	        foreach ( $ancestors as $ancestor ) {
	            if (strpos($menu_slug,$ancestor) !== false) {
	                $classes[] = 'current-page-ancestor';
	            }
	        }
	    }
	    // Return the corrected set of classes to be added to the menu item
	    return $classes;

	} add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );


/* OPTIONS PAGE SETTINGS -> COLOCAR ISSO EM UM PLUGIN DEPOIS
========================================================================== */
	if( function_exists('acf_add_options_page') ) {

	 	// add parent
		$parent = acf_add_options_page(array(
			'page_title' 	=> 'Configurações do Portal',
			'menu_title' 	=> 'Configurações do Portal',
			'redirect' 		=> true
		));

		// add sub page
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Vídeos',
			'menu_title' 	=> 'Vídeos',
			'parent_slug' 	=> $parent['menu_slug']
		));

		// add sub page
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Artigos Destaque',
			'menu_title' 	=> 'Artigos Destaque',
			'parent_slug' 	=> $parent['menu_slug']
		));

		// add home highligth
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Destaque do Header',
			'menu_title' 	=> 'Destaque do Header',
			'parent_slug' 	=> $parent['menu_slug']
		));

		// add home highligth
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Ticker',
			'menu_title' 	=> 'Ticker',
			'parent_slug' 	=> $parent['menu_slug']
		));

		// add home highligth
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Weekly',
			'menu_title' 	=> 'Weekly',
			'parent_slug' 	=> $parent['menu_slug']
		));

		// add Agenda settings
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Agenda',
			'menu_title' 	=> 'Agenda',
			'parent_slug' 	=> $parent['menu_slug']
		));

	}

?>
