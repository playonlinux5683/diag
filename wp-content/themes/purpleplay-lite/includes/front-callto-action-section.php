<?php
$_purpleplay_lite_cta_content = get_theme_mod( 'purpleplay_lite_cta_content', 'This is beautiful, Clean and easy to customize, unique, responsive WordPress theme With lot&#39;s of shortcodes and features and perfectly suitable for any kind of business.');
$_purpleplay_lite_cta_link = get_theme_mod( 'purpleplay_lite_cta_btn_link', '#');
$_purpleplay_lite_cta_text = get_theme_mod( 'purpleplay_lite_cta_btn_text', 'Download Theme');
?>
<div id="cta" class="skt-section">
	<div class="container">
		<div class="row-fluid">
				<div class="span8">
					<h3 class="cta-text"><?php echo wp_kses_post($_purpleplay_lite_cta_content); ?></h3>
				</div>
				<?php if( $_purpleplay_lite_cta_link != '' ) { ?>
					<div class="callto-actionbtn span4"><a href="<?php echo esc_url($_purpleplay_lite_cta_link); ?>"><?php echo esc_attr($_purpleplay_lite_cta_text); ?></a></div>
				<?php } ?>
			</div> <!--#callto-action-bg-->
			<div class="clear"></div>
		</div>
	</div>
</div>