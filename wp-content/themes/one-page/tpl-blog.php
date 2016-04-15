<?php
/*
  Template Name: Blog Page
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
				<?php
				$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'paged' => $paged
				);
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						get_template_part( 'templates/content' );
					}
				} else {
					?>
					<div class="post">
						<p>
							<?php _e( 'Sorry, no posts matched your criteria.', 'one-page' ); ?>
						</p>
					</div>
				<?php } ?>
                <div class="clear"></div>
				<?php
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
                <nav id="nav-single"> <span class="nav-previous">
						<?php next_posts_link( __( '&larr; Previous posts', 'one-page' ), $query->max_num_pages ); ?>
                    </span> <span class="nav-next">
						<?php previous_posts_link( __( 'Newer posts &rarr;', 'one-page' ) ); ?>
                    </span> </nav>

            </div>
            <!-- sidebar -->
            <div class="col-md-4">
                <!--Start Sidebar-->
				<?php get_sidebar(); ?>
                <!--End Sidebar-->
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>
