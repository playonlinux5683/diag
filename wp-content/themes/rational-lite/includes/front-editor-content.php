<?php if ( 'page' == get_option( 'show_on_front' ) ) { ?>
<!-- PAGE EDITER CONTENT -->
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div id="front-content-box" class="skt-section">
			<div class="container">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?> 
<?php } ?>


<?php  if( get_theme_mod('rational_lite_home_blog_sec', 'on') == 'on') { ?>
<div id="front-posts-box" class="landing-section skt-section">
	<div class="container">
		<div class="row-fluid">
			<div class="landing-page-title">
				<h3><?php echo esc_attr( get_theme_mod( 'rational_lite_home_blog_title', __('Blog', 'rational-lite') ) ); ?></h3>
				<span class="border_center"></span>
			</div>
		</div>
		<div class="row-fluid front-blog-wrap">
			<?php $rational_lite_blogno = get_theme_mod('rational_lite_home_blog_num', '6' );
				$rational_lite_latest_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $rational_lite_blogno,'ignore_sticky_posts' => true ) );
			?>
			<?php if ( $rational_lite_latest_loop->have_posts() ) : ?>

			<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $rational_lite_latest_loop->have_posts() ) : $rational_lite_latest_loop->the_post(); ?>
					<div class="inner_blog span6">
						<div class="skt_blog_middle">
							<h2 class="skt_blog_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="blogtext">
								<?php $post_content = get_the_excerpt();
						 			echo rational_lite_limit_words($post_content, 40); 
						  		?>
							</div>

						</div>

						<div class="skt_blog_bottom">
							<!--Post Details-->
							<div class="news-details">
								<div class="row-fluid">
									<p class="post-admin span6"><?php _e('by : ','rational-lite'); the_author_posts_link(); ?></p>
									<p class="post-comments span6"><span class="skt_blog_commt"><i class="fa fa-comments-o"></i> <?php comments_popup_link( __('No Comments ', 'rational-lite'), __('1 Comment ', 'rational-lite'), __('% Comments ', 'rational-lite') ) ; ?></span></p>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'rational-lite' ); ?></p>
			<?php endif; ?>
		</div>
 	</div>
</div>
<?php } ?>