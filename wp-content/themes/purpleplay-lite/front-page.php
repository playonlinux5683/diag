<?php 

get_header();

include( 'includes/front-bgimage-section.php');

if( get_theme_mod( 'purpleplay_lite_feature_section_on', 'on') == 'on' ) {	// Featured Content
	include( 'includes/front-feature-box-section.php');
}

if ( 'page' == get_option( 'show_on_front' ) && get_theme_mod( 'purpleplay_lite_editor_section_on', 'on') == 'on' ) { ?>
	<!-- PAGE EDITER CONTENT -->
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="skt-section front-page-content">
				<div class="container">
					<div class="row-fluid"> 
						<?php the_content(); ?>
					</div>
					<div class="border-content-box bottom-space"></div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
<?php }

if( get_theme_mod( 'purpleplay_lite_cta_section_on', 'on') == 'on') {			// Call To Action
	include( 'includes/front-callto-action-section.php');
}

if( get_theme_mod( 'purpleplay_lite_clients_section_on', 'on') == 'on' ) {	// Client Logo Section
	include( 'includes/front-clients-section.php');
}
		
get_footer();
?>