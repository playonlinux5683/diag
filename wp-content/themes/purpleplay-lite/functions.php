<?php
function purpleplay_lite_widgets_init(){
	register_sidebar(array(
		'name' => 'primary-widget-area',
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'secondary-widget-area',
		'id' => 'secondary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'front-featured-area',
		'id' => 'front-featured-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s list-style-none span4">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'first-footer-widget-area',
		'id' => 'first-footer-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'second-footer-widget-area',
		'id' => 'second-footer-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'third-footer-widget-area',
		'id' => 'third-footer-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'fourth-footer-widget-area',
		'id' => 'fourth-footer-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'skt-woocommerce-widget-area',
		'id' => 'skt-woocommerce-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'purpleplay_lite_widgets_init' );

//Registers nav menus for the site
function purpleplay_lite_setup_theme() {
	register_nav_menus( array(
		'Header' => __( 'Primary Navigation','purpleplay-lite'),
	));

	add_editor_style();

	load_theme_textdomain('purpleplay-lite', get_template_directory() . '/languages');
	
	add_theme_support('title-tag');

	add_theme_support('automatic-feed-links');
	
	add_theme_support('post-thumbnails');
	
	add_theme_support('woocommerce');
	
	add_theme_support('custom-header', array( 'flex-width' => true, 'width' => 1600, 'flex-height' => true, 'height' => 600, 'default-image' => get_template_directory_uri() . '/images/header.jpg') );
	
	add_theme_support('custom-background');

	set_post_thumbnail_size( 150, 150, true );

}
add_action( 'after_setup_theme', 'purpleplay_lite_setup_theme' ); 

/******* theme check fix ***********/
if ( ! isset( $content_width ) ){
    $content_width = 900;
}

/*---------------------------------------------------------------------------*/
/* ADMIN SCRIPT: Enqueue scripts in back-end
/*---------------------------------------------------------------------------*/
if( !function_exists('purpleplay_lite_admin_enqueue_scripts') ){
    add_action('admin_enqueue_scripts','purpleplay_lite_admin_enqueue_scripts');
    /**
     * Register scripts for admin panel
     * @return void
     */
    function purpleplay_lite_admin_enqueue_scripts(){	
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		wp_enqueue_style('thickbox');
    }
}

/*  * Loads the Framework Setup File */
require_once get_template_directory() . '/SketchBoard/functions/admin-init.php';

/**
 * Add Customizer 
 */
require get_template_directory() . '/includes/customizer.php';


/**
 * Filter content with empty post title
 *
 * @since Version 1
 */
add_filter('the_title', 'purpleplay_lite_untitled');
function purpleplay_lite_untitled($title) {
	if ($title == '') {
		return __('Untitled', 'purpleplay-lite');
	} else {
		return $title;
	}
}

/**
 * Add SkethThemes File 
 */
require_once(get_template_directory() . '/includes/sketchtheme-upsell.php');