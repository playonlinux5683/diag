<?php 
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<?php global $rational_lite_shortname; ?>
<div class="main-wrapper-item">
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

<div class="container post-wrap">
	<div class="row-fluid">
		<div id="container" class="span8">
			<div id="content">  
					<div class="post" id="post-<?php the_ID(); ?>">
				
						<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
						<div class="featured-image-shadow-box">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<?php } ?>

						<div class="bread-title">
							<h1 class="title">
								<?php the_title(); ?>
							</h1>
							<div class="clearfix"></div>
						</div>

						<div class="skepost-meta clearfix">
						    <span class="date"><?php _e('On','rational-lite');?> <?php the_time('F j, Y') ?>,</span>
				            <span class="author-name"><?php _e('Posted by ','rational-lite'); the_author_posts_link(); ?>,</span>
							<?php if (has_category()) { ?><span class="category"><?php _e('in ','rational-lite');?><?php the_category(', '); ?>,</span><?php } ?>
				            <?php the_tags('<span class="tags">tags ',', ','</span>,'); ?>
				            <span class="comments"><?php _e('With ','rational-lite');?><?php comments_popup_link(__('No Comments ','rational-lite'), __('1 Comment ','rational-lite'), __('% Comments ','rational-lite')) ; ?></span>
				        </div>
						<!-- skepost-meta -->

						<div class="skepost clearfix">
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'rational-lite' ) ); ?>
							<?php 
								wp_link_pages( array(
									'before'      => '<p><strong>' . __( 'Pages:', 'rational-lite' ) . '</strong>',
									'after'       => '</p>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
								) );
							?>
						</div>
						<!-- skepost -->

						<div class="navigation"> 
							<span class="nav-previous"><?php previous_post_link( __('&larr; %link','rational-lite')); ?></span>
							<span class="nav-next"><?php next_post_link( __('%link &rarr;','rational-lite')); ?></span> 
						</div>
						<div class="clearfix"></div>
						<div class="comments-template">
							<?php comments_template( '', true ); ?>
						</div>
					</div>
				<!-- post -->
				<?php endwhile; ?>
				<?php else :  ?>

				<div class="post">
					<h2><?php _e('Post Does Not Exist','rational-lite'); ?></h2>
				</div>
				<?php endif; ?>
			</div><!-- content --> 
		</div><!-- container --> 

		<!-- Sidebar -->
		<div id="sidebar" class="span3">
			<?php get_sidebar(); ?>
		</div>
		<!-- Sidebar --> 

	</div>
 </div>
</div>
<?php get_footer(); ?>