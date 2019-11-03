<?php


/**
 * Custom template functions for this theme.
 */

require get_template_directory() . '/inc/template-functions.php';


/**
 * Add custom classes to each comment, as author and awaiting comments
 * needs custom classes to standout.
 *
 * @since   0.0.1
 * @version 0.0.1
 */

add_filter( 'comment_class' , 'custom_comment_classes' , 10 , 5 );

function custom_comment_classes ( $classes, $class, $comment_ID, $comment, $post_id ){
    
    if( 'unapproved' === wp_get_comment_status( $comment ) && is_array( $classes ) )
        
        $classes[] = 'awaiting-moderation';
        
    if( get_the_author() == get_comment_author() )
        
        $classes[] = 'author_comment';

    return $classes;
    
}

/**
 * Change the excerpt length.
 *
 * @since   0.0.1
 * @version 0.0.1
 */

function new_excerpt_length( $length ){
    
    return 100;
    
}

add_filter( 'excerpt_length' , 'new_excerpt_length' );

/**
 * Remove wordpress version number.
 *
 * @since   0.0.1
 * @version 0.0.1
 */

remove_action( 'wp_head' , 'wp_generator' );

/**
 * Hide login errors.
 *
 * @since   0.0.1
 * @version 0.0.1
 */

function hide_login_errors(){
    
    return 'Thanks, you broke me!';
    
}

add_filter( 'login_errors' , 'hide_login_errors' );

/**
 * Disable xml-rpc.
 *
 * @since   0.0.1
 * @version 0.0.1
 */

add_filter( 'xmlrpc_enabled' , '__return_false' );

/**
 * Register the header menu.
 *
 * @since   0.0.1
 * @version 0.0.1
 */

function register_my_menus() {
    
  register_nav_menus(
      
    array( 'header-menu' => __( 'Header Menu' ) )
      
  );
    
}

add_action( 'init' , 'register_my_menus' );

/**
 * Add default posts and comments RSS feed links to head.
 *
 * @since   0.0.1
 * @version 0.0.1
 */

add_theme_support( 'automatic-feed-links' ); 
        
/**
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 *
 * @since   0.0.1
 * @version 0.0.1 
 */

add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 *
 * @since   0.0.1
 * @version 0.0.1 
 */

add_theme_support( 'post-thumbnails' );

add_image_size( 'minimal2017-featured-image', 700, 9999, true );

add_image_size( 'minimal2017-thumbnail-avatar', 100, 100, true );

/**
 * If more than one page exists, return TRUE.
 */

function show_posts_nav(){
 
    global $wp_query;
    return ( $wp_query->max_num_pages > 1 );
 
}

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since   0.0.1
 * @version 0.0.1
 */

function minimal2017_javascript_detection(){
    
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
    
}

add_action( 'wp_head' , 'minimal2017_javascript_detection' , 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 *
 * @since   0.0.1
 * @version 0.0.1
 */

function minimal2017_pingback_header(){
    
	if ( is_singular() && pings_open() ){
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
    
}

add_action( 'wp_head' , 'minimal2017_pingback_header' );

/**
 * Enqueue scripts and styles.
 *
 * @since   0.0.1
 * @version 0.0.1 
 */

function minimal2017_scripts() {
if( !is_404() ){
	// theme stylesheet.
	wp_enqueue_style( 'minimal2017-style' , get_stylesheet_uri() , '' , 1.1);
    
    // global js file
	wp_enqueue_script( 'minimal2017-gobal' , get_theme_file_uri( 'assets/js/global.min.js' ) , '' , 1.1, true );
}
    
    if( is_404() ){
        // theme 404 stylesheet.
        //wp_enqueue_style( 'minimal2017-404' , get_theme_file_uri( 'assets/css/404.min.css' )  , '' , 1.1, true );
    }
 
}

add_action( 'wp_enqueue_scripts' , 'minimal2017_scripts' );