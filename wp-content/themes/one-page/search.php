<?php
/**
 * The template for displaying Search Results pages.
 *
 *
 */
get_header();
?>
<!-- blog title -->
<div class="homepage_nav_title section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="index_titles blog single"><?php printf( __( 'Search Results for: %s', 'one-page' ), '' . get_search_query() . '' ); ?></div>
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
                <!--page start-->
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) {
						the_post();
						get_template_part( 'templates/content' );
					}
				else :
					?>
					<article id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<h1 class="entry-title">
								<?php _e( 'Nothing Found', 'one-page' ); ?>
							</h1>
						</header>
						<!-- .entry-header -->
						<div class="entry-content">
							<p>
								<?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'one-page' ); ?>
							</p>
							<?php get_search_form(); ?>
						</div>
						<!-- .entry-content -->
					</article>
				<?php endif; ?>
                <div class="clear"></div>
                <nav id="nav-single"> <span class="nav-previous">
						<?php next_posts_link( __( '&larr; Older posts', 'one-page' ) ); ?>
                    </span> <span class="nav-next">
						<?php previous_posts_link( __( 'Newer posts &rarr;', 'one-page' ) ); ?>
                    </span> </nav>

                <!--End Page-->
                <div class="clear"></div>
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