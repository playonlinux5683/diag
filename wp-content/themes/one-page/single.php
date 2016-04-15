<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header();
?>
<!-- blog title -->
<div class="homepage_nav_title section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="index_titles blog single"><?php if ( function_exists( 'onepage_breadcrumbs' ) ) onepage_breadcrumbs(); ?></div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- blog title ends -->
<div class="blog_pages_wrapper default_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Start the Loop. -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<!--post start-->
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="post_heading_wrapper">
								<div class="postimage_container">
									<div class="clear"></div>
								</div>
								<h1 class="post_title"><?php the_title(); ?></h1>
								<ul class="post_meta">
									<li class="day"><span class="glyphicon glyphicon-calendar"></span><?php echo get_the_time( 'd' ) ?></li>
									<li class="month"><?php echo get_the_time( 'M' ) ?></li>
									<li class="year"><?php echo get_the_time( 'Y' ) ?></li>
									<li class="posted_by"><span class="glyphicon glyphicon-user"></span><span>by&nbsp;</span><?php the_author_posts_link(); ?></li>
									<li><span>&nbsp;&#124;&nbsp;&nbsp;<?php the_category( ', ' ); ?></span></li>
									<li class="post_comment"><?php comments_popup_link( __( 'No Comments.', 'one-page' ), __( '1 Comment.', 'one-page' ), __( '% Comments.', 'one-page' ), '', '' ); ?></li>
								</ul>
							</div>
							<div class="post_content">
								<?php
								the_content();
								wp_link_pages( array( 'before' => '<div class="clear"></div><div class="page-link"><span>' . __( 'Pages:', 'one-page' ) . '</span>', 'after' => '</div>' ) );
								?>
							</div>
							<div class="clear"></div>
						</div>
						<!--End Post-->
						<?php
					endwhile;
				else:
					?>
					<div class="blogs_page_container">
						<p>
							<?php _e( 'Sorry, no posts matched your criteria.', 'one-page' ); ?>
						</p>
					</div>
				<?php endif; ?>
                <nav id="nav-single"> <span class="nav-previous">
						<?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous Post ', 'one-page' ) ); ?>
                    </span> <span class="nav-next">
						<?php next_post_link( '%link', __( 'Next Post <span class="meta-nav">&rarr;</span>', 'one-page' ) ); ?>
                    </span> </nav>
                <div class="clear"></div>
                <div class="comment_section">
                    <!--Start Comment list-->
					<?php comments_template( '', true ); ?>
                    <!--End Comment Form-->
                </div>
            </div>
            <!--Sidebar-->
            <div class="col-md-4">
                <!--Start Sidebar-->
				<?php get_sidebar(); ?>
                <!--End Sidebar-->
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>