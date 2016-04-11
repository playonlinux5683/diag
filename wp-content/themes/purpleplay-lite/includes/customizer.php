<?php

function purpleplay_lite_customize_register( $wp_customize ) {

	// define image directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->remove_control( 'header_textcolor' );

	// ====================================
	// = Background Image Size for custom-background
	// ====================================
	$wp_customize->add_setting( 'background_size', array(
		'default'       	=> 'cover',
		'theme_supports'	=> 'custom-background',
		'sanitize_callback' => 'purpleplay_lite_sanitize_textarea',
	));
	$wp_customize->add_control('background_size', array(
		'section'		=> 'background_image',
		'label' 		=> __('Background Image Size','purpleplay-lite'),
	));

	// ====================================
	// = Theme Color
	// ====================================
	$wp_customize->add_setting( 'purpleplay_lite_pri_color', array(
		'default'           => '#504aa7' ,
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'purpleplay_lite_pri_color', array(
		'priority' 		=> 1,
		'section'     	=> 'colors',
		'label'       	=> __( 'Theme Color', 'purpleplay-lite' ),
	) ) );

	// ====================================
	// = Purple Play Theme Pannels
	// ====================================
	$wp_customize->add_panel( 'front_page_settings', array(
		'title' 	=> __( 'Front Page Settings','purpleplay-lite'),
		'priority' 	=> 10,
		'active_callback' => 'purpleplay_lite_active_static_front_page'
	) );
	
	$wp_customize->add_panel( 'genral_settings', array(
		'title' 	=> __( 'General Settings','purpleplay-lite'),
		'priority' 	=> 11,
	) );


	// ====================================
	// = SECTIONS
	// ====================================
	
	// = Genral Sections
	// ====================================
	$wp_customize->add_section( 'logo_section' , array(
		'title' 		=> __('Site Logo','purpleplay-lite'),
		'panel' 		=> 'genral_settings',
	) );
	$wp_customize->add_section( 'blog_section' , array(
		'title' 		=> __('Blog Settings','purpleplay-lite'),
		'panel' 		=> 'genral_settings',
	) );
	$wp_customize->add_section( 'notification_section' , array(
		'title' 		=> __('Notification Bar Settings','purpleplay-lite'),
		'panel' 		=> 'genral_settings',
	) );
	$wp_customize->add_section( 'copyright_section' , array(
		'title' 		=> __('Copyright Settings','purpleplay-lite'),
		'panel' 		=> 'genral_settings',
	) );

	
	// = Front Page Sections
	// ====================================
	$wp_customize->add_section( 'front_feature_section' , array(
		'title' 		=> __('Feature Box Section','purpleplay-lite'),
		'priority' 		=> 1,
		'panel' 		=> 'front_page_settings',
	) );
	$wp_customize->add_section( 'front_editor_section' , array(
		'title' 		=> __('Editor Content ','purpleplay-lite'),
		'priority' 		=> 2,
		'panel' 		=> 'front_page_settings',
	) );
	$wp_customize->add_section( 'front_cta_section' , array(
		'title' 		=> __('Call to Action Section','purpleplay-lite'),
		'priority' 		=> 3,
		'panel' 		=> 'front_page_settings',
	) );
	$wp_customize->add_section( 'front_client_section' , array(
		'title' 		=> __('Clients Section','purpleplay-lite'),
		'priority' 		=> 4,
		'panel' 		=> 'front_page_settings',
	) );


	// ====================================
	// = SETTINGS
	// ====================================

	// = Genral Sections Settings -> Logo n Favicon
	// ============================================
	$wp_customize->add_setting( 'purpleplay_lite_logo_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'purpleplay_lite_logo_img', array(
		'section' 		=> 'logo_section',
		'label' 		=> __( 'Logo Image', 'purpleplay-lite' ),
		'description' 	=> __('Uplaod your beautiful logo image from here. Recomended size 220x40 px.', 'purpleplay-lite' ),
	) ) );
	$wp_customize->add_setting( 'purpleplay_lite_logo_width', array(
		'default'        => '200',
		'sanitize_callback' => 'purpleplay_lite_sanitize_textarea',
	));
	$wp_customize->add_control('purpleplay_lite_logo_width', array(
		'section' => 'logo_section',
		'label' => __('Logo Width','purpleplay-lite'),
		'description' => __('in pixels','purpleplay-lite'),
	));
	$wp_customize->add_setting( 'purpleplay_lite_logo_height', array(
		'default'        => '40',
		'sanitize_callback' => 'purpleplay_lite_sanitize_textarea',
	));
	$wp_customize->add_control('purpleplay_lite_logo_height', array(
		'section' => 'logo_section',
		'label' => __('Logo Height','purpleplay-lite'),
		'description' => __('in pixels','purpleplay-lite'),
	));
	 
	// = Blog Sections Settings -> Blog Section
	// ===============================================
	$wp_customize->add_setting( 'blog_title', array(
		'default'        => 'Blog Page',
		'sanitize_callback' => 'purpleplay_lite_sanitize_textarea',
	));
	$wp_customize->add_control('blog_title', array(
		'section' => 'blog_section',
		'label' => __('Blog Page Title','purpleplay-lite'),
	));
	
	// = Notificaation Settings -> Notificaation Section
	// ===============================================
	$wp_customize->add_setting( 'purpleplay_lite_noticification_on_off', array(
		'default'           => 'on',
		'sanitize_callback' => 'purpleplay_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'purpleplay_lite_noticification_on_off', array(
		'type' => 'select',
		'section' => 'notification_section',
		'label' => __( 'Notification Bar On/Off', 'purpleplay-lite' ),
		'choices' => array(
			'on' => __('On', 'purpleplay-lite' ),
			'off'=> __('Off', 'purpleplay-lite' ),
		),
	) );
	
	$wp_customize->add_setting( 'purpleplay_lite_noticification_text', array(
		'default' => '<div class="notification-content notifi-color"><div class="ntfy-text"> Get <strong>Best Services</strong> from Our Business.<button>Go Now</button></div></div>',
		'sanitize_callback' => 'purpleplay_lite_sanitize_textarea',
	));
	$wp_customize->add_control('purpleplay_lite_noticification_text', array(
		'section' => 'notification_section',
		'label' => __('Notification Text','purpleplay-lite'),
		'description' => __('You can write HTML as well','purpleplay-lite'),
	));


	// = Footer Sections Settings -> Copyright Section
	// ===============================================
	$wp_customize->add_setting( 'purpleplay_lite_copyright_text', array(
		'default'        => __('Copyright 2015 - Proudly Powered by WordPress.','purpleplay-lite'),
		'sanitize_callback' => 'purpleplay_lite_sanitize_textarea',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control('purpleplay_lite_copyright_text', array(
		'section' => 'copyright_section',
		'label' => __('Copyright Text','purpleplay-lite'),
	));


	// = Front Page Sections Settings -> Feature Box Section
	// =====================================================
	$wp_customize->add_setting( 'purpleplay_lite_feature_section_on', array(
		'default'           => 'on',
		'sanitize_callback' => 'purpleplay_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'purpleplay_lite_feature_section_on', array(
		'type' => 'select',
		'section' => 'front_feature_section',
		'label' => __( 'Feature Box Section', 'purpleplay-lite' ),
		'choices' => array(
			'on' => __('On', 'purpleplay-lite' ),
			'off'=> __('Off', 'purpleplay-lite' ),
		),
		'description' => __( "On/Off the featured box section. Add the featured widget in 'front-featured-area'.", "purpleplay-lite"),
	) );


	// = Front Page Sections Settings -> Editor Section
	// ================================================
	$wp_customize->add_setting( 'purpleplay_lite_editor_section_on', array(
		'default'           => 'on',
		'sanitize_callback' => 'purpleplay_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'purpleplay_lite_editor_section_on', array(
		'type' => 'select',
		'section' => 'front_editor_section',
		'label' => __( 'Editor Content ON/OFF', 'purpleplay-lite' ),
		'choices' => array(
			'on' => __('On', 'purpleplay-lite' ),
			'off'=> __('Off', 'purpleplay-lite' ),
		),
	) );

	// = Front Page Sections Settings -> Call To Action Section
	// ========================================================
	$wp_customize->add_setting( 'purpleplay_lite_cta_section_on', array(
		'default'           => 'on',
		'sanitize_callback' => 'purpleplay_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'purpleplay_lite_cta_section_on', array(
		'type' => 'select',
		'section' => 'front_cta_section',
		'label' => __( 'Call to Action Section', 'purpleplay-lite' ),
		'choices' => array(
			'on' => __('On', 'purpleplay-lite' ),
			'off'=> __('Off', 'purpleplay-lite' ),
		),
	) );

	$wp_customize->add_setting( 'purpleplay_lite_cta_content', array(
		'default' => 'This is beautiful, Clean and easy to customize, unique, responsive WordPress theme With lot\'s of shortcodes and features and perfectly suitable for any kind of business.',
		'sanitize_callback' => 'purpleplay_lite_sanitize_textarea',
	));
	$wp_customize->add_control('purpleplay_lite_cta_content', array(
		'type'	=> 'textarea',
		'section' => 'front_cta_section',
		'label' => __('Call to Action Content','purpleplay-lite'),
		'active_callback' => 'purpleplay_lite_active_cta_section'
	));

	$wp_customize->add_setting( 'purpleplay_lite_cta_btn_text', array(
		'default'           => 'Download Theme',
		'sanitize_callback' => 'purpleplay_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( 'purpleplay_lite_cta_btn_text', array(
	    'section'     => 'front_cta_section',
	    'label'       => 'Button Text',
	    'active_callback' => 'purpleplay_lite_active_cta_section',
	) );

	$wp_customize->add_setting( 'purpleplay_lite_cta_btn_link', array(
		'default'           => 'http://',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'purpleplay_lite_cta_btn_link', array(
	    'section'     => 'front_cta_section',
	    'label'       => 'Button Link',
	    'active_callback' => 'purpleplay_lite_active_cta_section',
	) );

	// = Front Page Sections Settings -> Clients Section
	// =================================================
	$wp_customize->add_setting( 'purpleplay_lite_clients_section_on', array(
		'default'           => 'on',
		'sanitize_callback' => 'purpleplay_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'purpleplay_lite_clients_section_on', array(
		'type' => 'select',
		'section' => 'front_client_section',
		'label' => __( 'Clients Section', 'purpleplay-lite' ),
		'choices' => array(
			'on' => __('On', 'purpleplay-lite' ),
			'off'=> __('Off', 'purpleplay-lite' ),
		),
	) );

	$wp_customize->add_setting( 'purpleplay_lite_clients_heading', array(
		'default'           => 'Our Clients',
		'sanitize_callback' => 'purpleplay_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( 'purpleplay_lite_clients_heading', array(
	    'section'     => 'front_client_section',
	    'label'       => 'Clients Section Heading',
	    'active_callback' => 'purpleplay_lite_active_clients_section',
	) );

	$wp_customize->add_setting( 'purpleplay_lite_clients_desc', array(
		'default'           => 'Lorem ipsum dolor sit amet, constectuter la elet de',
		'sanitize_callback' => 'purpleplay_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( 'purpleplay_lite_clients_desc', array(
	    'type'	=> 'textarea',
	    'section'     => 'front_client_section',
	    'label'       => 'Clients Section Heading',
	    'active_callback' => 'purpleplay_lite_active_clients_section',
	) );

	$wp_customize->add_setting( 'purpleplay_lite_client1', array(
		'default'           => $imagepath.'client1.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'purpleplay_lite_client1', array(
		'section' 		=> 'front_client_section',
		'label' 		=> __( 'Client1 Image', 'purpleplay-lite' ),
		'description' 	=> __('Uplaod client 1 logo image from here. Recomended size 270x65 px.', 'purpleplay-lite' ),
		'active_callback' => 'purpleplay_lite_active_clients_section',
	) ) );
	$wp_customize->add_setting( 'purpleplay_lite_client2', array(
		'default'           => $imagepath.'client2.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'purpleplay_lite_client2', array(
		'section' 		=> 'front_client_section',
		'label' 		=> __( 'Client2 Image', 'purpleplay-lite' ),
		'description' 	=> __('Uplaod client 2 logo image from here. Recomended size 270x65 px.', 'purpleplay-lite' ),
		'active_callback' => 'purpleplay_lite_active_clients_section',
	) ) );
	$wp_customize->add_setting( 'purpleplay_lite_client3', array(
		'default'           => $imagepath.'client3.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'purpleplay_lite_client3', array(
		'section' 		=> 'front_client_section',
		'label' 		=> __( 'Client3 Image', 'purpleplay-lite' ),
		'description' 	=> __('Uplaod client 3 logo image from here. Recomended size 270x65 px.', 'purpleplay-lite' ),
		'active_callback' => 'purpleplay_lite_active_clients_section',
	) ) );
	$wp_customize->add_setting( 'purpleplay_lite_client4', array(
		'default'           => $imagepath.'client4.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'purpleplay_lite_client4', array(
		'section' 		=> 'front_client_section',
		'label' 		=> __( 'Client4 Image', 'purpleplay-lite' ),
		'description' 	=> __('Uplaod client 4 logo image from here. Recomended size 270x65 px.', 'purpleplay-lite' ),
		'active_callback' => 'purpleplay_lite_active_clients_section',
	) ) );
}
add_action( 'customize_register', 'purpleplay_lite_customize_register' );

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Purple Play 1.0
 */
function purpleplay_lite_customize_preview_js() {
	wp_enqueue_script( 'purple-play-lite-customize-preview', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' , 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'purpleplay_lite_customize_preview_js' );

// sanitize textarea
function purpleplay_lite_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

// sanitize on-off
function purpleplay_lite_sanitize_on_off( $input ) {
	if ( $input == 'on' ) {
        return 'on';
    } else {
        return 'off';
    }
}

// active static front page
function purpleplay_lite_active_static_front_page( $control ) {
	if ('page' == get_option( 'show_on_front' ) && is_front_page() ) {
		return true;
	} else {
		return false;
	}
}

// active client section
function purpleplay_lite_active_clients_section( $control ) {
	if ( $control->manager->get_setting('purpleplay_lite_clients_section_on')->value() == 'on' && is_front_page() ) {
		return true;
	} else {
		return false;
	}
}

// active call to action section
function purpleplay_lite_active_cta_section( $control ) {
	if ( $control->manager->get_setting('purpleplay_lite_cta_section_on')->value() == 'on' && 'page' == is_front_page() ) {
		return true;
	} else {
		return false;
	}
}