<?php

function rational_lite_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->remove_control('header_textcolor');

	// ====================================
	// = Background Image Size for custom-background
	// ====================================
	$wp_customize->add_setting( 'background_size', array(
		'default'        => 'auto',
		'theme_supports' => 'custom-background',
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('background_size', array(
		'label' => __('Breadcrumb Background Image Size','rational-lite'),
		'section' => 'background_image',
	));
	
	// ====================================
	// = Rational Lite Theme Pannel
	// ==================================== 
	$wp_customize->add_panel( 'sketchthemes', array(
		'title' => __( 'Home Page Options', 'rational-lite'),
		'priority' => 1,
		'active_callback' => 'is_front_page'
	) );

	// ====================================
	// = Rational Lite Theme Sections
	// ====================================
	$wp_customize->add_section( 'home_feature_settings' , array(
		'title' => __('Home Featured Section','rational-lite'),
		'panel' => 'sketchthemes'
	) );
	$wp_customize->add_section( 'home_page_settings' , array(
		'title' => __('Home Landing Page Section','rational-lite'),
		'panel' => 'sketchthemes'
	) );
	$wp_customize->add_section( 'home_blog_settings' , array(
		'title' => __('Home Blog Section','rational-lite'),
		'panel' => 'sketchthemes'
	) );

	$wp_customize->add_section( 'blog_page_settings' , array(
		'priority' => 2,
		'title' => __('Blog Page Settings','rational-lite'),
	) );

	$wp_customize->add_section( 'social_settings' , array(
		'priority' => 3,
		'title' => __('Social Links','rational-lite'),

	) );
	$wp_customize->add_section( 'footer_settings' , array(
		'priority' => 4,
		'title' => __('Footer Settings','rational-lite'),
	) );

	// ====================================
	// = General Settings Sections
	// ====================================
	$wp_customize->add_setting( 'rational_lite_pri_color', array(
		'default'           => '#394f87',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rational_lite_pri_color', array(
		'label'       => __( 'Color Scheme', 'rational-lite' ),
		'section'     => 'colors',
	) ) );

	// ====================================
	// = Header Settings Sections
	// ====================================
	$wp_customize->add_setting( 'rational_lite_logo_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'rational_lite_logo_img', array(
		'priority' => 1,
		'label' => __( 'Logo Image', 'rational-lite' ),
		'section' => 'title_tagline',
		'mime_type' => 'image',
	) ) );

	
	$wp_customize->add_setting( 'rational_lite_fbook_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('rational_lite_fbook_link', array(
		'label' => __('Facebook Link', 'rational-lite'),
		'description' => __('Enter Facebook Link.', 'rational-lite'),
		'section' => 'social_settings',
	));

	$wp_customize->add_setting( 'rational_lite_twitter_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('rational_lite_twitter_link', array(
		'label' => __('Twitter Link', 'rational-lite'),
		'description' => __('Enter Twitter link.', 'rational-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'rational_lite_pinterest_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('rational_lite_pinterest_link', array(
		'label' => __('Pinterest Link', 'rational-lite'),
		'description' => __('Enter Pinterest link.', 'rational-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'rational_lite_dribbble_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('rational_lite_dribbble_link', array(
		'label' => __('Dribbble Link', 'rational-lite'),
		'description' => __('Enter Dribbble link.', 'rational-lite'),
		'section' => 'social_settings',
	));
	$wp_customize->add_setting( 'rational_lite_tumblr_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('rational_lite_tumblr_link', array(
		'label' => __('Tumbler Link', 'rational-lite'),
		'description' => __('Enter Tumbler link.', 'rational-lite'),
		'section' => 'social_settings',
	));
	
	// ====================================
	// = Home Page Settings Sections
	// ====================================
	$wp_customize->add_setting( 'rational_lite_home_blog_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'rational_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'rational_lite_home_blog_sec', array(
		'label' => __( 'Home Blog Section ON/OFF', 'rational-lite' ),
		'section' => 'home_blog_settings',
		'type' => 'radio',
		'choices' => array(
			'on' => __('ON', 'rational-lite'),
			'off'=> __('OFF', 'rational-lite')
		),
	) );

	$wp_customize->add_setting( 'rational_lite_home_blog_title', array(
		'default'        => __('Blog', 'rational-lite'),
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_home_blog_title', array(
		'label' => __('Home Blog Section Title','rational-lite'),
		'section' => 'home_blog_settings',
	));

	$wp_customize->add_setting( 'rational_lite_home_blog_num', array(
		'default'        => '6',
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_home_blog_num', array(
		'label' => __('Number Of Blogs','rational-lite'),
		'section' => 'home_blog_settings',
	));

	
	$pages = get_pages();
	$rational_lite_landing_pages = array();
	$rational_lite_landing_pages['none'] = __('Select Page', 'rational-lite');
	foreach ( $pages as $page ) {
		$key = $page->ID;
		$rational_lite_landing_pages[$key] = $page->post_title;
	}
	$wp_customize->add_setting( 'rational_lite_rat_first_section', array(
		'default'           => '',
		'sanitize_callback' => 'rational_lite_sanitize_pages'
	) );
	$wp_customize->add_control( 'rational_lite_rat_first_section', array(
		'type' => 'select',
		'section' => 'home_page_settings',
		'label' => __( 'Select page for first landing section.', 'rational-lite' ),
		'choices' => $rational_lite_landing_pages,
	) );
	$wp_customize->add_setting( 'rational_lite_rat_second_section', array(
		'default'           => '',
		'sanitize_callback' => 'rational_lite_sanitize_pages'
	) );
	$wp_customize->add_control( 'rational_lite_rat_second_section', array(
		'type' => 'select',
		'section' => 'home_page_settings',
		'label' => __( 'Select page for second landing section.', 'rational-lite' ),
		'choices' => $rational_lite_landing_pages,
	) );
	$wp_customize->add_setting( 'rational_lite_rat_third_section', array(
		'default'           => '',
		'sanitize_callback' => 'rational_lite_sanitize_pages'
	) );
	$wp_customize->add_control( 'rational_lite_rat_third_section', array(
		'type' => 'select',
		'section' => 'home_page_settings',
		'label' => __( 'Select page for third landing section.', 'rational-lite' ),
		'choices' => $rational_lite_landing_pages,
	) );

	// ====================================
	// = Home Featured Box Sections
	// ====================================
	$wp_customize->add_setting( 'rational_lite_first_feature_title', array(
		'default'        => __('First Feature Heading', 'rational-lite'),
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_first_feature_title', array(
		'label' => __('First Featured Box Heading','rational-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'rational_lite_first_feature_icon', array(
		'default'        => 'fa-desktop',
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_first_feature_icon', array(
		'label' => __('First Featured Box Icon Class','rational-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'rational_lite_first_feature_content', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.', 'rational-lite'),
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_first_feature_content', array(
		'label' => __('First Featured Box Content','rational-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'rational_lite_first_feature_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('rational_lite_first_feature_link', array(
		'type' => 'url',
		'label' => __('First Featured Box Link','rational-lite'),
		'section' => 'home_feature_settings',
	));
	// Second Feature
	$wp_customize->add_setting( 'rational_lite_second_feature_title', array(
		'default'        => '',
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_second_feature_title', array(
		'label' => __('Second Featured Box Heading','rational-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'rational_lite_second_feature_icon', array(
		'default'        => 'fa-code',
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_second_feature_icon', array(
		'label' => __('Second Featured Box Icon Class','rational-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'rational_lite_second_feature_content', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.', 'rational-lite'),
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_second_feature_content', array(
		'label' => __('Second Featured Box Content','rational-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'rational_lite_second_feature_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('rational_lite_second_feature_link', array(
		'type' => 'url',
		'label' => __('Second Featured Box Link','rational-lite'),
		'section' => 'home_feature_settings',
	));
	// Third Feature
	$wp_customize->add_setting( 'rational_lite_third_feature_title', array(
		'default'        => '',
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_third_feature_title', array(
		'label' => __('Third Featured Box Heading','rational-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'rational_lite_third_feature_icon', array(
		'default'        => 'fa-cog',
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_third_feature_icon', array(
		'label' => __('Third Featured Box Icon Class','rational-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'rational_lite_third_feature_content', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.', 'rational-lite'),
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_third_feature_content', array(
		'label' => __('Third Featured Box Content','rational-lite'),
		'section' => 'home_feature_settings',
	));
	$wp_customize->add_setting( 'rational_lite_third_feature_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('rational_lite_third_feature_link', array(
		'type' => 'url',
		'label' => __('Third Featured Box Link','rational-lite'),
		'section' => 'home_feature_settings',
	));

	// ====================================
	// = Blog Page Settings Sections
	// ====================================
	$wp_customize->add_setting( 'rational_lite_blogpage_heading', array(
		'default'        => __('Blog', 'rational-lite'),
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
	));
	$wp_customize->add_control('rational_lite_copyright', array(
		'label' => __('Copyright Text','rational-lite'),
		'section' => 'blog_page_settings',
		'settings' => 'rational_lite_copyright',
	));

	// ====================================
	// = Footer Settings Sections
	// ====================================
	$wp_customize->add_setting( 'rational_lite_copyright', array(
		'default'        => __('Proudly Powered by WordPress', 'rational-lite'),
		'sanitize_callback' => 'rational_lite_sanitize_textarea',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('rational_lite_copyright', array(
		'label' => __('Copyright Text','rational-lite'),
		'section' => 'footer_settings',
	));

}
add_action( 'customize_register', 'rational_lite_customize_register' );

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Twenty Fifteen 1.0
 */
function rational_lite_customize_preview_js() {
	wp_enqueue_script( 'rational-lite-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20150924', true );
}
add_action( 'customize_preview_init', 'rational_lite_customize_preview_js' );


// sanitize textarea
function rational_lite_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function rational_lite_sanitize_on_off( $input ) {
	$valid = array(
		'on' => __('ON', 'rational-lite'),
		'off'=> __('OFF', 'rational-lite')
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function rational_lite_sanitize_background_repeat( $input ) {
	$valid = array(
		'no-repeat'  => __('No Repeat', 'rational-lite'),
		'repeat'     => __('Tile', 'rational-lite'),
		'repeat-x'   => __('Tile Horizontally', 'rational-lite'),
		'repeat-y'   => __('Tile Vertically', 'rational-lite'),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function rational_lite_sanitize_background_position( $input ) {
	$valid = array(
		'left'       => __('Left', 'rational-lite'),
		'center'     => __('Center', 'rational-lite'),
		'right'      => __('Right', 'rational-lite'),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function rational_lite_sanitize_background_attachment( $input ) {
	$valid = array(
		'scroll'     => __('Scroll', 'rational-lite'),
		'fixed'      => __('Fixed', 'rational-lite'),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function rational_lite_active_breadcrumb_image( $control ) {
	if ( $control->manager->get_setting('breadcrumbbg_image')->value() != '' ) {
		return true;
	} else {
		return false;
	}
}

function rational_lite_sanitize_pages( $input ) {
	$pages = get_pages();
	$valid = array();
	$valid['none'] = __('Select Page', 'rational-lite');
	foreach ( $pages as $page ) {
		$key = $page->ID;
		$valid[$key] = $page->post_title;
	}
	
	if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

?>