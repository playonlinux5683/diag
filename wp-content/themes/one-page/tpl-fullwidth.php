<?php
/**
  Template Name: Fullwidth Template
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
            <div class="col-md-12">
                <!--page start-->
                <div class="content-bar">
                    <h1 class="page-title"><?php the_title(); ?></h1>
					<?php
					if ( have_posts() ) : the_post();
						the_content();
					endif;
					?>
                </div>
                <!--End Page-->
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php get_footer(); ?>