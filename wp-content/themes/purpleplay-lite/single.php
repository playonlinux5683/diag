<?php
/**
 * The Template for displaying all single posts.
 * @package WordPress
 * @SketchThemes
 */
get_header(); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<!-- #Container Area -->
<div id="container" class="clearfix">
	
	<div class="breadcrumb-wrap">
		<div class="breadcrumb-overlay">
			<div class="container">
				<div class="row-fluid">
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
					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h2 class="entry-title"><?php the_title(); ?></h2>
						<?php if(has_post_thumbnail()) { ?>
							<div class="post-image clearfix">
								<?php the_post_thumbnail('full'); ?>
							</div>
						<?php } ?>
						<div class="entry-meta">
								<span class="author-name"> <?php _e('Posted by ','purpleplay-lite'); the_author_posts_link(); ?> </span><?php _e('|', 'purpleplay-lite')?>
								<span class="date-time"><?php the_time('l, j F, Y') ?> </span> <?php _e('|', 'purpleplay-lite')?>	
								<span class="comment"> <?php comments_popup_link(__('No Comments','purpleplay-lite'), __('1 Comment','purpleplay-lite'), __('% Comments ','purpleplay-lite')) ; ?> </span>					
								<span> <?php edit_post_link(' Edit','|','') ; ?></span>
						</div> 
						<div class="entry clearfix">
							<?php the_content(); ?>
							 <div class="post-tags clear">
							  <?php _e('Tag: ','purpleplay-lite');?><?php the_tags(''); ?>
							</div>
							<?php if (has_category()) { ?><span class="category"><?php _e('Categories: ','purpleplay-lite');?><?php the_category(', '); ?><?php } ?></span>
							<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages :','purpleplay-lite').'</strong>','after' => '</p>', __('number','purpleplay-lite'),)); ?>
						</div>
						<div class="comments-template">
							<?php comments_template(); ?>
						</div>
					</div>	
					<?php endwhile; ?>
					<div class="navigation">
						<span class="nav-previous"><?php previous_post_link('&laquo; %link'); ?></span>
						<span class="nav-next"><?php next_post_link(' %link &raquo;'); ?></span>
					</div>
					<?php else : ?>
					<div class="post"><h2><?php _e('Not Found','purpleplay-lite'); ?></h2></div>
					<?php endif; ?>		
				</div>
				<!-- Content -->
				
				<!-- Sider-bar -->
				<div id="sider-bar" class="span3"> 
					<?php get_sidebar(); ?>
				</div>
				<!-- Sider-bar -->
			</div>
		</div>
	</div>
</div>
<!-- #Container Area -->
<?php get_footer(); ?>