<?php if( 'none' != get_theme_mod('rational_lite_rat_second_section', 'none') ) {
	$the_query = new WP_Query( array( 'page_id' => get_theme_mod('rational_lite_rat_second_section') ) );
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div id="section2" class="landing-section skt-section">
			<div class="container" >
				<div class="row-fluid">
					<div class="span12">
						<div class="landing-page-title">
							<h3><?php the_title(); ?></h3>
							<span class="border_center"></span>
						</div>

						<div class="landing-page-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php break;
		endwhile;
		wp_reset_postdata();
	endif;
} else { ?>
	<div id="section2" class="landing-section skt-section">
		<div class="container" >
			<div class="row-fluid">
				<div class="span12">
					<div class="landing-page-title">
						<h3><?php _e('OUR TEAM', 'rational-lite'); ?></h3>
						<span class="border_center"></span>
					</div>

					<div class="landing-page-content">
						<div class="skepost text-center clearfix">
							<div class="team span3 skt_animate_when_almost_visible skt_bottom-to-top skt_start_animation">
							<img src="<?php echo get_template_directory_uri(); ?>/images/tm-1.jpg" alt="" width="220" height="260" class="user">		<h5 class="black">Mary Patricia</h5></div>

							<div class="team span3 skt_animate_when_almost_visible skt_bottom-to-top skt_start_animation">
							<img src="<?php echo get_template_directory_uri(); ?>/images/tm-1.jpg" alt="" width="220" height="260" class="user">		<h5 class="black">Albert Jonathan</h5></div>

							<div class="team span3 skt_animate_when_almost_visible skt_bottom-to-top skt_start_animation">
							<img src="<?php echo get_template_directory_uri(); ?>/images/tm-1.jpg" alt="" width="220" height="260" class="user">		<h5 class="black">Ronald Donald</h5></div>

							<div class="team span3 skt_animate_when_almost_visible skt_bottom-to-top skt_start_animation">
							<img src="<?php echo get_template_directory_uri(); ?>/images/tm-1.jpg" alt="" width="220" height="260" class="user">		<h5 class="black">John Carter</h5></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>