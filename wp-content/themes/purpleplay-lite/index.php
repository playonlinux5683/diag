<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>

<div id="container" class="clearfix">
	<div class="breadcrumb-wrap">
		<div class="breadcrumb-overlay">
			<div class="container">
				<div class="row-fluid">
					<div class="page-title span6">
						<?php echo wp_kses_post(get_theme_mod('blog_title', 'purpleplay-lite')); ?>
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

<?php get_footer(); ?>
