<?php 
/*
Template Name: Full Width
*/
get_header();

?>
<div id="full_Width" class="clearfix">
	
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
				<div id="content">
					<div class="post" id="post-<?php the_ID(); ?>">
						<div class="entry clearfix">
							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages :','purpleplay-lite').'</strong>','after' => '</p>', __('number','purpleplay-lite'),)); ?>
							<?php edit_post_link(__('Edit','purpleplay-lite'), '<p>', '</p>'); ?>
						</div>
					</div>
					<!-- post -->
					<?php endwhile; ?>
					<?php else :  ?>
					<div class="post">
						<h2><?php _e('Not Found','purpleplay-lite'); ?></h2>
					</div>
					<?php endif; ?>
				</div>
				<!-- content -->
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>