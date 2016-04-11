<?php if( 'none' != get_theme_mod('rational_lite_rat_third_section', 'none') ) {
	$the_query = new WP_Query( array( 'page_id' => get_theme_mod('rational_lite_rat_third_section') ) );
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div id="section3" class="landing-section skt-section">
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
	<div id="section3" class="landing-section skt-section">
		<div class="container" >
			<div class="row-fluid">
				<div class="span12">
					<div class="landing-page-title">
						<h3><?php _e('SERVICE', 'rational-lite'); ?></h3>
						<span class="border_center"></span>
					</div>

					<div class="landing-page-content">
						<?php echo '<div class="text-center">'.__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'rational-lite').'</div>'; ?>
						<div class="container post-wrap rpage_wrap">
							<div class="row-fluid">
								<div id="services_section">
									<div class="services_sec_first services_inner_sec clearfix">
										<div class="span4">
											<div class="row-fluid">
												<div class="left_icon span4"><i class="fa fa-desktop">&nbsp;</i></div>
												<div class="right_text span8">
												<h4><?php _e('WEB DESIGN', 'rational-lite'); ?></h4>
												<p><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'rational-lite'); ?></p>
												</div>
											</div>
										</div>
										<div class="span4">
											<div class="row-fluid">
												<div class="left_icon span4"><i class="fa fa-desktop">&nbsp;</i></div>
												<div class="right_text span8">
												<h4><?php _e('VIDEO PRODUCTION', 'rational-lite'); ?></h4>
												<p><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'rational-lite'); ?></p>
												</div>
											</div>
										</div>
										<div class="span4">
											<div class="row-fluid">
												<div class="left_icon span4"><i class="fa fa-desktop">&nbsp;</i></div>
												<div class="right_text span8">
												<h4><?php _e('COMPANY ANALYSIS', 'rational-lite'); ?></h4>
												<p><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'rational-lite'); ?></p>
												</div>
											</div>
										</div>
									</div>
									<div class="services_sec_second services_inner_sec clearfix">
										<div class="span4">
											<div class="row-fluid">
												<div class="left_icon span4"><i class="fa fa-desktop">&nbsp;</i></div>
												<div class="right_text span8">
												<h4><?php _e('BRAND CREATION', 'rational-lite'); ?></h4>
												<p><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'rational-lite'); ?></p>
												</div>
											</div>
										</div>
										<div class="span4">
											<div class="row-fluid">
												<div class="left_icon span4"><i class="fa fa-desktop">&nbsp;</i></div>
												<div class="right_text span8">
												<h4><?php _e('STRATEGY PLANNING', 'rational-lite'); ?></h4>
												<p><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'rational-lite'); ?></p>
												</div>
											</div>
										</div>
										<div class="span4">
											<div class="row-fluid">
												<div class="left_icon span4"><i class="fa fa-desktop">&nbsp;</i></div>
												<div class="right_text span8">
												<h4><?php _e('GRAPHIC DESIGN', 'rational-lite'); ?></h4>
												<p><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'rational-lite'); ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
<?php } ?>