<?php $bg_color 	 			=	esc_attr(get_theme_mod( 'purpleplay_lite_pri_color', '#504aa7')); ?>
<?php $skt_logo_wdth 			=	esc_attr(get_theme_mod( 'purpleplay_lite_logo_width','154')); ?>
<?php $skt_logo_hght 			=	esc_attr(get_theme_mod( 'purpleplay_lite_logo_height','37')); ?>
<?php $_background_image_size	=	esc_attr(get_theme_mod('background_size', 'cover')); ?>


<?php function purpleplay_lite_skeHex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
	$hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
	$rgbArray = array();
	if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
		$colorVal = hexdec($hexStr);
		$rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
		$rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
		$rgbArray['blue'] = 0xFF & $colorVal;
	} elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
		$rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
		$rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
		$rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
	} else {
		return false; //Invalid hex color code
	}
return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
} 

$rgb=array();
$rgb = purpleplay_lite_skeHex2RGB($bg_color);
$R = $rgb['red'];
$G = $rgb['green'];
$B = $rgb['blue'];
$rgbcolor = "rgba(". $R .",". $G .",". $B .",.3)";
$bdrrgbcolor = "rgba(". $R .",". $G .",". $B .",.7)";

?>

<style>
body.custom-background {
	background-size: <?php echo $_background_image_size; ?>;
}
<?php if( get_header_image() ) { ?>
	.breadcrumb-wrap{background: url('<?php header_image(); ?>') no-repeat scroll center center <?php echo $bg_color; ?>; }
<?php } ?>

<?php if( !display_header_text() ) { ?>
	#site-title { display: none; }
<?php } ?>

.menu ul li.current_page_item > a,.menu ul li a:hover,.element, #cta,.skin-bg,div.next,div.prev,.filter .current a,.filter a:hover,.post-image span, div.slider-nav span.left:hover,div.slider-nav span.right:hover,#respond .form-submit input,.filter li .selected,.widget_tag_cloud a:hover,.lightbox span,.front-img-wrap,.skt-slide-controls a.skt-prev-slide,.skt-slide-controls a.skt-next-slide,.woocommerce-info:before, .member-data, .c-hamburger--htx, #mini-menu li.current_page_item > a {
	background-color: <?php echo $bg_color; ?>;
}
ul#mini-menu li ul li a:hover,ul#mini-menu li a:hover,.pagenavi span.current,#content .contact-left form input[type="submit"],#sider-bar form input[type="submit"].wpcf7-submit,#footer-widget-area form input[type="submit"].wpcf7-submit,#mainnav,.slider-link-box .over-color,a#backtop,thead th, #content input[type="submit"] {
	background: <?php echo $bg_color; ?>;
}
#header,.title-border,#footer .widget-title > span,.menu ul li.item_hover > a,.menu ul li.current_page_item > a,.menu ul li.current-menu-ancestor > a, .menu ul li.current-menu-parent > a,.author-name,.menu ul li a:hover,.jcarousel-clip ul li,.skin-border,.post-image img,#content input:focus, #content textarea:focus,.callto-actionbtn,#respond .form-submit input,.ske_tab_h ul.ske_tabs li.active,.ske_tab_v ul.ske_tabs li.active,.slider-attach,#content .fullwidthmap #map,#content .project_wrap .isotope-item img,#content .contact-left form textarea:focus,#content #contact-page form textarea.error:focus,#content .contact-left form input[type="text"]:focus,#content .contact-left form input[type="email"]:focus,#content .contact-left form input[type="url"]:focus,#content .contact-left form input[type="tel"]:focus,#content .contact-left form input[type="number"]:focus,#content .contact-left form input[type="range"]:focus,#content .contact-left form input[type="date"]:focus,#content .contact-left form input[type="file"]:focus,#content .mapwrap,#content .contact-left form input[type="submit"],#sider-bar form input[type="submit"].wpcf7-submit,#footer-widget-area form input[type="submit"].wpcf7-submit,.skt-slide,.front-img-wrap,.widget-container.flickrimg li:hover,.widget-container.sktmultisocialstream li:hover,.widget-container .skt-portfolio-widget li:hover,.woocommerce-info,#sider-bar form input[type="text"]:focus,#sider-bar form input[type="email"]:focus,#sider-bar form input[type="url"]:focus,#sider-bar form input[type="tel"]:focus,#sider-bar form input[type="number"]:focus,#sider-bar form input[type="range"]:focus,#sider-bar form input[type="date"]:focus,#sider-bar form input[type="file"]:focus,#sider-bar form textarea:focus,#footer-widget-area form input[type="text"]:focus,#footer-widget-area form input[type="email"]:focus,#footer-widget-area form input[type="url"]:focus,#footer-widget-area form input[type="tel"]:focus,#footer-widget-area form input[type="number"]:focus,#footer-widget-area form input[type="range"]:focus,#footer-widget-area form input[type="date"]:focus,#footer-widget-area form input[type="file"]:focus,#footer-widget-area form textarea:focus, #content input[type="submit"] {
	border-color:<?php echo $bg_color; ?>;
}
.callto-actionbtn a:before,.callto-actionbtn a,a:hover,.readmorebtn a,.skin-color,.entry-title a:hover,.breadcrumb a,.widget-container li:hover,.social li a:before,.reply a:hover,#site_map li:hover:before,.testmonial-icon.titleimg:before,.latest-icon.titleimg:before {
	color:<?php echo $bg_color; ?>;
}
#header {
	background-color: #fff;
	box-shadow: 0 3px <?php echo $bg_color; ?>;
}
.menu ul li ul {
	border-bottom-color:<?php echo $bg_color; ?>;
}
#logo img,#floating_logo img {
	height:<?php echo $skt_logo_hght; ?>px;
	width:<?php echo $skt_logo_wdth; ?>px;
}
/* New CSS */
.callto-action-bg.span12.skin-border {
	background-color: <?php echo $rgbcolor; ?>;
}
.link-post a:hover:before,.zoom-img a:hover:before {
	background-color: <?php echo $bg_color; ?>;
}
#notificationbar{
	background-color: <?php echo $bg_color; ?> !important;
}
#nbar_downArr{
	border-right-color:  <?php echo $bg_color; ?> !important;
}

.element{
	-webkit-box-shadow: 0 0 0 3px <?php echo $bg_color; ?>;
  	-moz-box-shadow:   0 0 0 3px <?php echo $bg_color; ?>;
	box-shadow: 0 0 0 3px <?php echo $bg_color; ?>;
}
</style>