<?php
/**
 * The template for displaying 404 pages (Not Found).
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
                <!--page 404 start-->
                <div class="post post_content error sidebar">
                    <span class="bred-tip"></span>
                    <p class="fourzerofourerror"><?php _e( '404 ERROR', 'one-page' ); ?></p>
                    <p class="fourzerofourerror somewhat"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'one-page' ); ?></p>
                    <p class="itseems">
						<?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'one-page' ); ?>
                    </p>
                    <div class="search_page_search">
						<?php get_search_form(); ?>
                    </div>

                </div>
            </div>
            <!-- 404 ends -->
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