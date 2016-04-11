<?php
/**
 * The template for displaying search results pages.
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
					<div class="page-title span6">
						<?php printf( __( 'Search Results for: %s', 'purpleplay-lite' ), '<span>' . get_search_query() . '</span>' ); ?>
					</div>
					<div class="skt-breadcrumb span6">
						<?php if ((class_exists('purpleplay_lite_breadcrumb_class'))) {$skt_breadcumb->custom_breadcrumb();} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb -->

	<div id="wrapper">
		<div class="container clearfix">
			<div class="row-fluid">
				<div id="content" class="span9 ">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h2 class="entry-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="post-image clearfix">
						<?php if(has_post_thumbnail()) { ?>
							<?php $thumbsrc = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ,'full'); ?>
							<a href="<?php echo esc_url($thumbsrc); ?>" class="zoombox" rel="prettyPhoto"><img src="<?php echo esc_url($thumbsrc);?>" alt="blog-thumbnail" style="height: 270px;" /><span></span></a>
						<?php } ?>
						</div>
						<div class="entry-meta">
							<span class="author-name"> <?php _e('Posted by ','purpleplay-lite'); the_author_posts_link(); ?> </span><?php _e('|', 'purpleplay-lite')?>
							<span class="date-time"><?php the_time('l, j F, Y') ?> </span> <?php _e('|', 'purpleplay-lite')?>	
							<span class="comment"> <?php comments_popup_link(__('No Comments','purpleplay-lite'), __('1 Comment','purpleplay-lite'), __('% Comments ','purpleplay-lite')) ; ?> </span>					
							<span> <?php edit_post_link(' Edit','|','') ; ?></span>
						</div> 
						<div class="entry clearfix">
							<?php the_excerpt(); ?>
						</div>
					</div>
					<?php endwhile; ?>
					<div class="navigation">

							<div class="alignleft"><?php previous_posts_link(__('&larr;Previous','purpleplay-lite')) ?></div>
							<div class="alignright"><?php next_posts_link(__('Next&rarr;','purpleplay-lite'),'') ?></div>

					</div>
				<?php else : ?>
					<div class="post"><h2><?php _e('Not Found','purpleplay-lite'); ?></h2></div>
				<?php endif; ?>		
				</div>
				<!-- Content -->

				<div id="sider-bar" class="span3"> 
					<?php get_sidebar(); ?>
				</div>
				<!-- Sidebar -->
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>