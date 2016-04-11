<?php
/***********************************************
*  ENQUQUE CSS AND JAVASCRIPT
************************************************/
function rational_lite_theme_stylesheet()
{
	global $is_IE;
	$theme = wp_get_theme();
	
	wp_enqueue_script('rational-custom-js', get_template_directory_uri() .'/js/custom.js', array('jquery'), '1.0', true );
	wp_enqueue_script('comment-reply');
	wp_enqueue_script('hoverIntent');
	wp_enqueue_script('jquery-superfish', get_template_directory_uri().'/js/superfish.js', array('jquery'), '1.7.4', true);
	wp_enqueue_script('jquery-cbpAnimatedHeader', get_template_directory_uri().'/js/cbpAnimatedHeader.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jquery-easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jquery'),'1.3', true);
	wp_enqueue_script('jquery-waypoints', get_template_directory_uri().'/js/waypoints.js', array('jquery'), '2.0.2', true);
	
	wp_enqueue_style('rational-style', get_stylesheet_uri(), false, $theme->Version);
	wp_enqueue_style('rational-animation-stylesheet', get_template_directory_uri().'/css/skt-animation.css', array(), $theme->Version);
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css', array(), '4.5');
	
	/*SUPERFISH*/
	wp_enqueue_style('jquery-superfish', get_template_directory_uri().'/css/superfish.css', array(), $theme->Version);
	wp_enqueue_style('rational-bootstrap-responsive-theme-stylesheet', get_template_directory_uri().'/css/bootstrap-responsive.css', array(), $theme->Version);
	
	/*GOOGLE FONTS*/
	wp_enqueue_style('google-font-lato','//fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300', array(), $theme->Version);
	
	/* ENQUEUE STYLE FOR IE BROWSER */
	if($is_IE ) {
		wp_enqueue_style('rational-ie-style', get_template_directory_uri().'/css/ie-style.css', array(), $theme->Version  );
		wp_enqueue_style('rational-awesome-theme-stylesheet', get_template_directory_uri().'/css/font-awesome-ie7.css', array(), $theme->Version );
	}

}
add_action('wp_enqueue_scripts', 'rational_lite_theme_stylesheet');

function rational_lite_head() {

	require_once( get_template_directory().'/includes/rational-custom-css.php' );
 
}
add_action('wp_head', 'rational_lite_head');