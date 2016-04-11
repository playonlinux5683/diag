<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "page" div and all content after.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since PurplePlay Lite 1.0.0
 */
?>
<!-- #Footer Area -->
<div id="footer-area" class="skt-section">
	<div class="container">
		<div class="row-fluid">
			<div id="footer" class="page">
				<div id="foot-sidebar">
					<?php get_sidebar('footer'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="bottom_wrapper row-fluid">
			<div id="site-info" class="span6"><?php echo get_theme_mod( 'purpleplay_lite_copyright_text', 'Copright &copy; Powered By WordPress'); ?></div>
			<div class="owner span6"><?php _e('PurplePlay Lite By','purpleplay-lite'); ?><a href="<?php echo esc_url('https://sketchthemes.com'); ?>" target="_blank" title="<?php _e('Premium WordPress Themes','purpleplay-lite'); ?>"><?php _e('SketchThemes','purpleplay-lite'); ?></a></div>
		</div><!-- #bottom_wrapper -->
	</div>
</div>
<!-- #Footer Area -->
<?php wp_footer(); ?>
</body>
</html>