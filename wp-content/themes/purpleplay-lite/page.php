<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since PurplePlay Lite 1.0.0
 */

get_header(); ?>

<!-- #Container Area -->
<div id="container" class="clearfix">
	
	<div class="breadcrumb-wrap">
		<div class="breadcrumb-overlay">
			<div class="container">
				<div class="row-fluid">
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					<div class="page-title span6">
						<?php the_title(); ?>
					</div>
					<div class="skt-breadcrumb span6">
						<?php if ((class_exists('purpleplay_lite_breadcrumb_class'))) {$skt_breadcumb->custom_breadcrumb();} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
		

	<div id="wrapper">
		<div class="container clearfix">
			<div class="row-fluid">
				<!-- Content -->
				<div id="content" class="span9">
					<div <?php post_class('clearfix'); ?> id="post-<?php the_ID(); ?>">
						<div class="entry">
							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages :','purpleplay-lite').'</strong>','after' => '</p>', __('number','purpleplay-lite'),)); ?>
						</div>
					</div>
					<!--Start Comment box-->
					<?php comments_template(); ?>
					<!--End comment Section-->
					<?php endwhile; ?>
					<?php else : ?>
					<div class="post"><h2><?php _e('Not Found','purpleplay-lite'); ?></h2></div>
					<?php endif; ?>		
				</div>


				<div id="sider-bar" class="span3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- #Container Area -->
<?php get_footer(); ?>