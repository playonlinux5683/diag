<!-- Start the Loop. -->
<!--post start-->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post_heading_wrapper">
        <div class="postimage_container">
            <span class="thumb">
				<?php if ( (function_exists( 'has_post_thumbnail' )) && (has_post_thumbnail()) ) { ?>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
					<?php
				} else {
					echo onepage_main_image();
				}
				?>
                <span>
					<?php
					// Get the Name of First Category
//Fetching all the categories for the post and displaying first pocket
					the_category( ', ' );
					?>
                </span>
            </span>
            <div class="clear"></div>
        </div>
        <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( __( 'Permanent Link to %s', 'one-page' ), get_the_title() ); ?>"><?php the_title(); ?></a></h1>
        <ul class="post_meta">
            <li class="day"><span class="glyphicon glyphicon-calendar"></span><?php echo get_the_time( 'd' ) ?></li>
            <li class="month"><?php echo get_the_time( 'M' ) ?></li>
            <li class="year"><?php echo get_the_time( 'Y' ) ?></li>
            <li class="posted_by"><span class="glyphicon glyphicon-user"></span><span><?php _e( 'by&nbsp;', 'one-page' ); ?></span><?php the_author_posts_link(); ?></li>
            <li class="post_comment"></span><?php comments_popup_link( __( 'No Comments.', 'one-page' ), __( '1 Comment.', 'one-page' ), __( '% Comments.', 'one-page' ), '', '' ); ?></li>
        </ul>
    </div>
    <div class="post_content">
		<?php the_excerpt(); ?>
        <a class="read-more" href="<?php the_permalink() ?>"><?php echo onepage_get_option( 'onepage_blog_read_more_text', __( 'Read More...', 'one-page' ) ); ?></a>
    </div>
    <div class="clear"></div>
</div>
<!--End Post-->
