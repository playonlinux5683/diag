<?php

/***************** EXCERPT LENGTH *****************/
function purpleplay_lite_excerpt_length($length) {
	return 25;
}
add_filter('excerpt_length', 'purpleplay_lite_excerpt_length');

/***************** READ MORE *****************/
function purpleplay_lite_excerpt_more($more) {
	global $post;
	return ' [...]';
}
add_filter('excerpt_more', 'purpleplay_lite_excerpt_more');

/********************************************
 EXCERPT CONTROLL FUNCTION
*********************************************/
function purpleplay_lite_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

/***************************/
function purpleplay_lite_header_stylingopt()
{
	
	wp_enqueue_script('skt_animated_header',get_template_directory_uri().'/js/cbpAnimatedHeader.js',array('jquery'),'1.0',true );

	if( get_theme_mod( 'purpleplay_lite_noticification_on_off', 'on') == 'on') { ?>
	<div id="notificationbar">
        <span class="fa fa-close notification-close"></span>
        <div class="wrapper-notifi" >
            <div class="notification-content notifi-color">
				<?php echo wp_kses_post(get_theme_mod('purpleplay_lite_noticification_text','<div class="notification-content notifi-color"><div class="ntfy-text"> Get <strong>Best Services</strong> from Our Business.<button>Go Now</button></div></div>')); ?>
            </div>
        </div>
    </div>
    <?php }
} 
add_action('wp_footer','purpleplay_lite_header_stylingopt');