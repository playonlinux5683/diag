<?php
/*
Template Name: Full Width Template
*/
?>

<?php get_header(); ?>
<?php global $rational_lite_shortname; ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<div class="bread-title-holder">
	<div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
	<div class="container">
		<div class="row-fluid">
		  <div class="container_inner clearfix">
			<h1 class="title"><?php the_title(); ?></h1>
				<?php 
						if ((class_exists('rational_lite_breadcumb_class'))) {$rational_lite_breadcumb->rational_lite_custom_breadcrumb();}
				?>
		   </div>
		 </div>
	</div>
</div>

<div class="page-content fullwidth-temp">
	<div class="container post-wrap">
		<div class="row-fluid">
			<div id="content" class="span12">
				<div class="post" id="post-<?php the_ID(); ?>">
					<div class="skepost">
						<?php the_content(); ?>
						<?php 
							wp_link_pages( array(
								'before'      => '<p><strong>' . __( 'Pages:', 'rational-lite' ) . '</strong>',
								'after'       => '</p>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) );
						?>
						<?php edit_post_link( __('Edit', 'rational-lite') , '', ''); ?>	
					</div>
					<!-- skepost -->
				</div>
				<!-- post -->

				<?php endwhile; ?>
				<?php else :  ?>
					<div class="post">
						<h2><?php _e('Not Found','rational-lite'); ?></h2>
					</div>
				<?php endif; ?>
			</div>
			<!-- content --> 
		</div>
	</div>
</div>
<?php get_footer(); ?>