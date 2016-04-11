<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
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
						<?php if ( is_day() ) : ?>
							<?php printf( __( 'Daily Archives: <span>%s</span>', 'purpleplay-lite' ), get_the_date() ); ?>
						<?php elseif ( is_month() ) : ?>
							<?php printf( __( 'Monthly Archives: <span>%s</span>', 'purpleplay-lite' ), get_the_date('F Y') ); ?>
						<?php elseif ( is_year() ) : ?>
							<?php printf( __( 'Yearly Archives: <span>%s</span>', 'purpleplay-lite' ), get_the_date('Y') ); ?>
						<?php else : ?>
							<?php _e( 'Blog Archives', 'purpleplay-lite' ); ?>
						<?php endif; ?>
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
				<div id="content" class="span9">
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
				<!-- content -->

				<!-- Sidebar -->
				<div id="sider-bar" class="span3">
					<?php get_sidebar(); ?>	
				</div>				
				<div class="clear"></div>
				<!-- Sidebar -->
			</div>
		</div>
	</div>
</div>
<!-- #Container Area -->
<?php get_footer(); ?>