<!-- Footer -->
<?php
if ( is_active_sidebar( 'first-footer-widget-area' ) || is_active_sidebar( 'second-footer-widget-area' ) || is_active_sidebar( 'third-footer-widget-area' ) || is_active_sidebar( 'fourth-footer-widget-area' ) ) :
	?>
	<div class="footer_wrapper">
		<div class="footer" <?php echo "style='background-color:" . onepage_get_option( 'onepage_footer_sidebar_bg_color', '#111' ) . "'"; ?>>
			<div class="container">
				<div class="row">
					<?php
					/* A sidebar in the footer? Yep. You can can customize
					 * your footer with four columns of widgets.
					 */
					get_sidebar( 'footer' );
					?>
				</div>
			</div>
		</div>
		<?php
	endif;
	?>
    <!--</div>-->
    <div class="bottom_footer" <?php echo "style='background-color:" . onepage_get_option( 'onepage_footer_bg_color', '#0d141b' ) . "'"; ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<?php
					$logo = '';
					$logo_text = '';
					$logo_text = onepage_get_option( 'onepage_header_logo_text' );
					if ( isset( $logo_text ) && $logo_text != '' ) {
						$logo = "<h1 class='logo_text_footer'>" . $logo_text . "</h1>";
					} else {
						$logo = "<img src='" . onepage_get_option( 'onepage_header_logo_img', ONEPAGE_DIR_URI . 'assets/images/site_logo.png' ) . "' alt='logo' />";
					}
					echo $logo;
					?>

                    <ul class="footer_social">
                        <li>
                            <a class="fb animated bounce" href="<?php echo esc_url( onepage_get_option( 'onepage_fb_link', '#' ) ); ?>" title="FaceBook" style="animation-delay: .2s"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li >
                            <a class="tw animated bounce" href="<?php echo esc_url( onepage_get_option( 'onepage_tw_link', '#' ) ); ?>" title="Twitter" style="animation-delay: .4s"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li >
                            <a class="gp animated bounce" href="<?php echo esc_url( onepage_get_option( 'onepage_g_plus_link', '#' ) ); ?>" title="Google Plus" style="animation-delay: .6s"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li >
                            <a class="rss animated bounce" href="<?php echo esc_url( onepage_get_option( 'onepage_rss_link', '#' ) ); ?>" title="RSS" style="animation-delay: .8s"><i class="fa fa-fw fa-rss"></i></a>
                        </li>
                        <li >
                            <a class="pn animated bounce" href="<?php echo esc_url( onepage_get_option( 'onepage_pinterest_link', '#' ) ); ?>" title="Pinterest" style="animation-delay: 1s"><i class="fa fa-pinterest-p"></i></a>
                        </li>
                        <li>
                            <a class="ln animated bounce" href="<?php echo esc_url( onepage_get_option( 'onepage_ln_link', '#' ) ); ?>" title="LinkedIn" style="animation-delay: 1.2s"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                    </ul>
                    <p><?php echo esc_attr( onepage_get_option( 'onepage_footer_copyright_text', 'Copyright &copy; InkThemes.com' ) ); ?></p>
                    <div class="scroll-top page-scroll visible-xs visible-sm">
                        <a class="to_top page-scroll" href="#page-top">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>