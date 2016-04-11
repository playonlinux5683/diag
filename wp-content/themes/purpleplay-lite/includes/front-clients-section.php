<?php $imagepath =  get_template_directory_uri() . '/images/'; ?>
<!-- full-client-box -->
<div id="full-client-box">
	<div class="container">
		<div class="row-fluid">
			<div class="row-fluid purple-play-top">
				<h2 class="section-heading"><span class="title-border"><?php echo wp_kses_post( get_theme_mod( 'purpleplay_lite_clients_heading','Our Clients') ); ?></span></h2>
				<span class="top-style"></span>
				<div class="top-description"><?php echo wp_kses_post( get_theme_mod('purpleplay_lite_clients_desc', 'Lorem ipsum dolor sit amet, constectuter la elet de') ); ?></div>
			</div>
			<div class="row-fluid purple-play-bottom">
				<ul id="client-logos" class="clearfix">
					<li class="span3 client1">
						<img alt="Client Logo" src="<?php echo esc_url( get_theme_mod('purpleplay_lite_client1', $imagepath.'client1.png') ); ?>" />
					</li>
					<li class="span3 client2">
						<img alt="Client Logo" src="<?php echo esc_url( get_theme_mod('purpleplay_lite_client2', $imagepath.'client2.png') ); ?>" />
					</li>
					<li class="span3 client3">
						<img alt="Client Logo" src="<?php echo esc_url( get_theme_mod('purpleplay_lite_client3', $imagepath.'client3.png') ); ?>" />
					</li>
					<li class="span3 client4">
						<img alt="Client Logo" src="<?php echo esc_url( get_theme_mod('purpleplay_lite_client4', $imagepath.'client4.png') ); ?>" />
					</li>
				</ul>
			</div><!-- /our-clients -->
		</div>
	</div>
</div>
