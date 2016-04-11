<?php if( 'none' != get_theme_mod('rational_lite_rat_first_section', 'none') ) {
	$the_query = new WP_Query( array( 'page_id' => get_theme_mod('rational_lite_rat_first_section') ) );
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div id="section1" class="landing-section skt-section skt-default-page">
			<div class="container" >
				<div class="row-fluid">
					<div class="span12">
						<div class="landing-page-title">
							<h3 class="text-white"><?php the_title(); ?></h3>
							<span class="border_center border-white"></span>
						</div>

						<div class="landing-page-content text-white">
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
	<div id="section1" class="landing-section skt-section skt-default-page">
			<div class="container" >
				<div class="row-fluid">
					<div class="span12">
						<div class="landing-page-content text-white">
							<?php echo '<div class="clearfix"><div class="about-contentbox span7 skt_animate_when_almost_visible skt_left-to-right"><h4 class="about-heading">'.__('ABOUT','rational-lite').'</h4><div class="about-bdr"></div><p>'.__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'rational-lite').'</p><p>'.__('It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'rational-lite').'</p><div id="about-read-more"><a class="button-link large-button alignleft" href="#"><span>'.__('GO TO PORTFOLIO', 'rational-lite').'</span></a></div></div><div class="image-wrapper span5 skt_animate_when_almost_visible skt_right-to-left"><img class="alignnone size-full wp-image-251" src="'.get_template_directory_uri().'/images/iphone.png" alt="iphone" width="294" height="487"></div></div>'; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php } ?>