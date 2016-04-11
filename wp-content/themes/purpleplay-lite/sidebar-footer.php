<div id="footer-widget-area" role="complementary" class="row-fluid">
	<div id="first" class="span3 widget widget-area">
		<ul class="xoxo">
			<?php if( is_active_sidebar('first-footer-widget-area') ) { ?>
				<?php dynamic_sidebar( 'first-footer-widget-area'  ); ?>
			<?php } else {
				/**
				 * Filter the arguments for the Recent Posts widget.
				 *
				 * @since 3.4.0
				 *
				 * @see WP_Query::get_posts()
				 *
				 * @param array $args An array of arguments used to retrieve the recent posts.
				 */
				$r = new WP_Query( apply_filters( 'widget_posts_args', array('posts_per_page'=>5, 'no_found_rows'=>true, 'post_status'=>'publish', 'ignore_sticky_posts'=>true ) ) );

				if ($r->have_posts()) :
			?>
				<div class="widget-container widget_recent_entries">
					<h3 class="widget-title"><?php _e('Recent Posts', 'purpleplay-lite'); ?></h3>
					<ul>
					<?php while ( $r->have_posts() ) : $r->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a></li>
					<?php endwhile; ?>
					</ul>
				</div>
			<?php
				// Reset the global $the_post as this query will have stomped on it
				wp_reset_postdata();
				endif;
			?>
			<?php } ?>
		</ul>

	</div><!-- #first .widget-area -->


	<div id="second" class="span3 widget widget-area">
		<ul class="xoxo">
			<?php if( is_active_sidebar('second-footer-widget-area') ) { ?>
				<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			<?php } else { ?>
				<div class="widget-container widget_search">
					<h3 class="widget-title"><?php _e('Search','purpleplay-lite'); ?></h3>
					<div class="search-box">
						<form method="get" class="searchform" id="searchform" action="<?php echo esc_url( home_url('/') ); ?>" role="search">
							<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'purpleplay-lite' ); ?>" />
							<div class="search-icon">
								<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'purpleplay-lite' ); ?>" />
							</div>
						</form>
					</div>
				</div>

				<div class="widget-container widget_tag_cloud">
					<h3 class="widget-title"><?php _e('Tag Cloud','purpleplay-lite'); ?></h3>
					<div class="tagcloud">
						<?php wp_tag_cloud( array('number' => 7) );  ?>
					</div>
				</div>

			<?php } ?>
		</ul>
	</div><!-- #second .widget-area -->


	<div id="third" class="span3 widget widget-area">
		<ul class="xoxo">
			<?php if( is_active_sidebar('third-footer-widget-area') ) { ?>
				<?php dynamic_sidebar( 'third-footer-widget-area'  ); ?>
			<?php } else {
				/**
				 * Filter the arguments for the Recent Posts widget.
				 *
				 * @since 3.4.0
				 *
				 * @see WP_Query::get_posts()
				 *
				 * @param array $args An array of arguments used to retrieve the recent posts.
				 */
				$r = new WP_Query( apply_filters( 'widget_posts_args', array('posts_per_page'=>5, 'no_found_rows'=>true, 'post_status'=>'publish', 'ignore_sticky_posts'=>true ) ) );

				if ($r->have_posts()) :
			?>
				<div class="widget-container widget_recent_entries">
					<h3 class="widget-title"><?php _e('Recent Posts', 'purpleplay-lite'); ?></h3>
					<ul>
					<?php while ( $r->have_posts() ) : $r->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a></li>
					<?php endwhile; ?>
					</ul>
				</div>
			<?php
				// Reset the global $the_post as this query will have stomped on it
				wp_reset_postdata();
				endif;
			?>
			<?php } ?>
		</ul>
	</div><!-- #third .widget-area -->

	<div id="fourth" class="span3 widget widget-area">
		<ul class="xoxo">
			<?php if( is_active_sidebar('fourth-footer-widget-area') ) { ?>
				<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
			<?php } else { ?>
				<div class="widget-container widget_text">
					<h3 class="widget-title"><?php _e('Contact Us','purpleplay-lite'); ?></h3>
				    <div class="textwidget">
				        <!-- Footer Contact Section HTML Starts -->
				        <div class="footer-contact-info">
				        	<span class="footer-map-marker"><i class="fa fa-map-marker"></i></span>
				            <p><?php _e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean com modo ligula elet dolor. Lorem ipsum dolor sit amet.','purpleplay-lite'); ?></p><p></p>
				        </div>

				        <div class="footer-contact-info">
				        	<span class="footer-phone"><i class="fa fa-phone"></i></span>
				            <p><a href="tel:013-6455-54552"><?php _e('013-6455-54552','purpleplay-lite'); ?></a></p>
				        </div>

				        <div class="footer-contact-info">
				        	<span class="footer-envelope"><i class="fa fa-envelope"></i></span>
				            <p><a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">someone@example.com</a></p>
				        </div>
				        <!-- Footer Contact Section HTML Ends -->
				    </div>
				</div>
			<?php } ?>
		</ul>
	</div><!-- #third .widget-area -->

</div><!-- #footer-widget-area -->