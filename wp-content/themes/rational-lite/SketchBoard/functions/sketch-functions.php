<?php
/***************** EXCERPT LENGTH ************/
function rational_lite_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'rational_lite_excerpt_length');

/***************** READ MORE ****************/
function rational_lite_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'rational_lite_excerpt_more');

function rational_lite_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

function rational_lite_class_name($classes) {
	$classes[] = 'rational-lite';
	return $classes;
}
add_filter('body_class','rational_lite_class_name');