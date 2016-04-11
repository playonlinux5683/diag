<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "page" div.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since PurplePlay Lite 1.0.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div id="header" class="skehead-headernav clearfix">
	<div class="glow">
		<div id="skehead">
			<div class="container">
				<div class="row-fluid">
					<!-- #logo -->
					<div id="logo" class="span4">
						<?php if( get_theme_mod( 'purpleplay_lite_logo_img', '') ) { ?>
							<div class="logo_inner">
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" style="display: table;line-height: 0;" ><img class="logo" src="<?php echo get_theme_mod( 'purpleplay_lite_logo_img', ''); ?>" alt="<?php echo get_theme_mod( 'purpleplay_lite_logo_img', ''); ?>" /></a>
							</div>
						<?php } else { ?>
						<!-- #description -->
							<div id="site-title" class="logo_desp logo_inner">
								<a id="sktsite-title" href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a>
								<div id="site-description"><?php bloginfo( 'description' ); ?></div>
							</div>
						<!-- #description -->
						<?php } ?>
					</div>
					<!-- #logo -->
					
					<!-- .top-nav-menu --> 
					<div class="top-nav-menu span8">
						<div class="top-nav-menu">
							<?php 
								if( has_nav_menu( 'Header' ) ) {
									wp_nav_menu(array( 'container_class' => 'instaapp-menu', 'container_id' => 'skenav', 'menu_id' => 'menu-main','menu' => 'Primary Menu','theme_location' => 'Header' ));
								} else {
							?>
							<div class="instaapp-menu" id="skenav">
								<ul id="menu-main" class="menu">
									<?php wp_list_pages('title_li=&depth=0'); ?>
								</ul>
							</div>
							<?php } ?>
						</div>
					</div>
					<!-- .top-nav-menu -->
				</div>
			</div>
		</div>
		<!-- #skehead -->
	</div>
	<!-- glow --> 
</div>
<div class="header-clone"></div>
<!-- #header -->