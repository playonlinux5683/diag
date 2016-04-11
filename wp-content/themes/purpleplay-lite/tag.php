<?php
/**
 * The template for displaying tag archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
						<?php if ((class_exists('purpleplay_lite_breadcrumb_class'))) {$skt_breadcumb->custom_breadcrumb();} ?>
					</div>
					<div class="page-title span6">
						<?php printf( __( 'Tag Archives: %s', 'purpleplay-lite' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="wrapper">
		<div class="container clearfix">
		  	<div class="row-fluid">
				<!-- Content -->
				<div id="content" class="span9 ">
					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
								<h2 class="entry-title">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h2>
								<?php get_template_part( 'content' ); ?>
							</div>
							<div class="clearfix"></div>
							<!---->	<div class="border-post"></div> <!---->
						<?php endwhile; ?>
						
						<div class="navigation">
							<div class="alignleft"><?php previous_posts_link(__('&larr;Previous','purpleplay-lite')) ?></div>
							<div class="alignright"><?php next_posts_link(__('Next&rarr;','purpleplay-lite'),'') ?></div>
						</div>
					
					<?php else : ?>
						<div class="post">
						<h2><?php _e('Not Found','purpleplay-lite'); ?></h2>
						</div>
					<?php endif; ?>		
				</div>
				
				<!-- Sider-bar -->
				<div id="sider-bar" class="span3"> 
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- #container -->
<?php get_footer(); ?>