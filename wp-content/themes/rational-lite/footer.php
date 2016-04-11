<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
?>

<div class="clearfix"></div>
</div>
<!-- #main --> 
<?php
$rational_lite_fb_url		= get_theme_mod('rational_lite_fbook_link', '#');
$rational_lite_tw_url		= get_theme_mod('rational_lite_twitter_link', '#');
$rational_lite_pin_url		= get_theme_mod('rational_lite_pinterest_link', '#');
$rational_lite_drib_url		= get_theme_mod('rational_lite_dribbble_link', '#');
$rational_lite_tumb_url		= get_theme_mod('rational_lite_tumblr_link', '#');
?>

<!-- #footer -->
<div id="footer" class="skt-section">

	<div id="footer_top">
		<div class="container clearfix">
			<div class="row-fluid">
				<!-- Footer Follow Us Section Start -->
				<div class="social-icons text-center">
					<?php if( $rational_lite_fb_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_fb_url ); ?>" target="_blank" title="<?php _e('Facebook', 'rational-lite'); ?>"><i class="fa fa-facebook"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_tw_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_tw_url ); ?>" target="_blank" title="<?php _e('Twitter', 'rational-lite'); ?>"><i class="fa fa-twitter"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_pin_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_pin_url ); ?>" target="_blank" title="<?php _e('Pinterest', 'rational-lite'); ?>"><i class="fa fa-pinterest"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_drib_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_drib_url ); ?>" target="_blank" title="<?php _e('dribbble', 'rational-lite'); ?>"><i class="fa fa-dribbble"></i></a> </div>
					<?php } ?>
					<?php if( $rational_lite_tumb_url != '' ){ ?>
						<div class="footer-social"> <a href="<?php echo esc_url( $rational_lite_tumb_url ); ?>" target="_blank" title="<?php _e('tumblr', 'rational-lite'); ?>"><i class="fa fa-tumblr"></i></a> </div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div id="footer_arrow"></div>
	</div>

	<div class="third_wrapper">
		<div class="container">
			<div class="row-fluid">
				<div class="copyright span6 alpha omega"> <?php echo wp_kses_post( get_theme_mod( 'rational_lite_copyright', __('Proudly Powered by WordPress', 'rational-lite') ) ); ?> </div>
				<div class="owner span6 alpha omega"><?php _e('Rational Theme by','rational-lite'); ?> <a href="<?php echo esc_url('https://sketchthemes.com/'); ?>" ><?php _e('SketchThemes','rational-lite'); ?></a></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!-- third_wrapper --> 
</div>
<!-- #footer -->

</div>
<!-- #wrapper -->
	<a href="JavaScript:void(0);" title="<?php _e('Back To Top', 'rational-lite') ?>" id="backtop"></a>
	<?php wp_footer(); ?>
</body>
</html>