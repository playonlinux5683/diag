<?php
$slider1 = onepage_get_option( 'onepage_slider_image_1' );
$slider2 = onepage_get_option( 'onepage_slider_image_2' );
$slider3 = onepage_get_option( 'onepage_slider_image_3' );
$slider4 = onepage_get_option( 'onepage_slider_image_4' );
$slider5 = onepage_get_option( 'onepage_slider_image_5' );

$slider_flag = false;

if ( $slider1 || $slider2 || $slider3 || $slider4 || $slider5 ) {
	$slider_flag = true;
}

$slider_default = array();

$slider_default['slider1'] = array(
	'onepage_slider_trans' => 'horizontal',
	'onepage_slider_image' => ONEPAGE_DIR_URI . "assets/images/1.jpg",
	'onepage_slider_heading' => __( 'Best One Page WordPress Theme', 'one-page' ),
	'onepage_slider_subheading' => __( 'Give Your Business Website A New Shape.', 'one-page' ),
	'onepage_slider_button_link' => '#',
	'onepage_slider_button_text' => __( 'Create Your Website!', 'one-page' ),
	'onepage_slider_overlay' => 'rgba(29, 105, 165, 0.82)',
);
$slider_default['slider2'] = array(
	'onepage_slider_trans' => 'horizontal',
	'onepage_slider_image' => ONEPAGE_DIR_URI . "assets/images/2.jpg",
	'onepage_slider_heading' => __( 'Theme You Never Experienced Before', 'one-page' ),
	'onepage_slider_subheading' => __( 'One page has all essential features for your website.', 'one-page' ),
	'onepage_slider_button_link' => '#',
	'onepage_slider_button_text' => __( 'Create Your Website!', 'one-page' ),
	'onepage_slider_overlay' => 'rgba(29, 105, 165, 0.82)',
);

$sliders['slider1'] = array(
	'onepage_slider_trans' => onepage_get_option( 'onepage_slider_trans_1', 'horizontal' ),
	'onepage_slider_image' => onepage_get_option( 'onepage_slider_image_1' ),
	'onepage_slider_heading' => onepage_get_option( 'onepage_slider_heading_1' ),
	'onepage_slider_subheading' => onepage_get_option( 'onepage_slider_subheading_1' ),
	'onepage_slider_button_link' => onepage_get_option( 'onepage_slider_button_link_1' ),
	'onepage_slider_button_text' => onepage_get_option( 'onepage_slider_button_text_1' ),
	'onepage_slider_overlay' => onepage_get_option( 'onepage_slider_overlay_1' ),
);
$sliders['slider2'] = array(
	'onepage_slider_trans' => onepage_get_option( 'onepage_slider_trans_2', 'horizontal' ),
	'onepage_slider_image' => onepage_get_option( 'onepage_slider_image_2' ),
	'onepage_slider_heading' => onepage_get_option( 'onepage_slider_heading_2' ),
	'onepage_slider_subheading' => onepage_get_option( 'onepage_slider_subheading_2' ),
	'onepage_slider_button_link' => onepage_get_option( 'onepage_slider_button_link_2' ),
	'onepage_slider_button_text' => onepage_get_option( 'onepage_slider_button_text_2' ),
	'onepage_slider_overlay' => onepage_get_option( 'onepage_slider_overlay_2' ),
);
$sliders['slider3'] = array(
	'onepage_slider_trans' => onepage_get_option( 'onepage_slider_trans_3', 'horizontal' ),
	'onepage_slider_image' => onepage_get_option( 'onepage_slider_image_3' ),
	'onepage_slider_heading' => onepage_get_option( 'onepage_slider_heading_3' ),
	'onepage_slider_subheading' => onepage_get_option( 'onepage_slider_subheading_3' ),
	'onepage_slider_button_link' => onepage_get_option( 'onepage_slider_button_link_3' ),
	'onepage_slider_button_text' => onepage_get_option( 'onepage_slider_button_text_3' ),
	'onepage_slider_overlay' => onepage_get_option( 'onepage_slider_overlay_3' ),
);
$sliders['slider4'] = array(
	'onepage_slider_trans' => onepage_get_option( 'onepage_slider_trans_4', 'horizontal' ),
	'onepage_slider_image' => onepage_get_option( 'onepage_slider_image_4' ),
	'onepage_slider_heading' => onepage_get_option( 'onepage_slider_heading_4' ),
	'onepage_slider_subheading' => onepage_get_option( 'onepage_slider_subheading_4' ),
	'onepage_slider_button_link' => onepage_get_option( 'onepage_slider_button_link_4' ),
	'onepage_slider_button_text' => onepage_get_option( 'onepage_slider_button_text_4' ),
	'onepage_slider_overlay' => onepage_get_option( 'onepage_slider_overlay_4' ),
);
$sliders['slider5'] = array(
	'onepage_slider_trans' => onepage_get_option( 'onepage_slider_trans_5', 'horizontal' ),
	'onepage_slider_image' => onepage_get_option( 'onepage_slider_image_5' ),
	'onepage_slider_heading' => onepage_get_option( 'onepage_slider_heading_5' ),
	'onepage_slider_subheading' => onepage_get_option( 'onepage_slider_subheading_5' ),
	'onepage_slider_button_link' => onepage_get_option( 'onepage_slider_button_link_5' ),
	'onepage_slider_button_text' => onepage_get_option( 'onepage_slider_button_text_5' ),
	'onepage_slider_overlay' => onepage_get_option( 'onepage_slider_overlay_5' ),
);

if ( !$slider_flag ) {
	$sliders = array_merge( $sliders, $slider_default );
}
//echo '<pre>'.print_r($sliders,true).'</pre>';
?>
<!-- slider section-->
<section class="section_1">
    <div id="slider" class="sl-slider-wrapper">
        <div class="sl-slider">

			<?php
			if ( !empty( $sliders ) ) {
				foreach ( $sliders as $key => $slider ) {
					if ( !empty( $slider['onepage_slider_image'] ) ) {
						?>
						<!-- Slider 1 -->
						<div class="sl-slide" data-orientation="<?php echo esc_attr( $slider['onepage_slider_trans'] ); ?>" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
							<div class="sl-slide-inner">
								<div class="bg-img bg-img-1"><img src='<?php echo esc_url( $slider['onepage_slider_image'] ); ?>' alt=""/></div>
								<div class="slider_caption_wrapper">
									<div class="slider_caption">
										<h2><?php echo esc_attr( $slider['onepage_slider_heading'] ); ?></h2>
										<div class="slider_sep"></div>
										<p><?php echo esc_attr( $slider['onepage_slider_subheading'] ); ?></p>
										<a class="slider_button" href="<?php echo esc_url( $slider['onepage_slider_button_link'] ); ?>"><?php echo esc_attr( $slider['onepage_slider_button_text'] ); ?></a>
									</div>
								</div>
								<div class="slider_overlay" <?php echo "style='background-color:" . $slider['onepage_slider_overlay'] . "'"; ?>></div>
							</div>
						</div>
						<!-- /Slider 1 -->
						<?php
					}
				}
			}
			?>

        </div><!-- /sl-slider -->
        <nav id="nav-arrows" class="nav-arrows">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="glyphicon glyphicon-chevron-right"></span>
        </nav>
    </div>
</section>
<!-- /slider section-->

