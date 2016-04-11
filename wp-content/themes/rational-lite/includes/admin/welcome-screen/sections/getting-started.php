<?php
/**
 * Getting started template
 */

$customizer_url = admin_url() . 'customize.php' ;
$image_page = get_template_directory_uri().'/includes/admin/welcome-screen/img/';
?>

<div id="getting_started" class="rational-lite-tab-pane active">

	<div class="rational-tab-pane-center">

		<h1 class="rational-lite-welcome-title">Welcome to Rational Lite! <?php if( !empty($rational_lite['Version']) ): ?> <sup id="rational-lite-theme-version"><?php echo esc_attr( $rational_lite['Version'] ); ?> </sup><?php endif; ?></h1>

		<p><?php esc_html_e( 'Our one of the popular free minimal, responsive and Elegant Business WordPress theme, Rational Lite!','rational-lite'); ?></p>
		<p><?php esc_html_e( 'We want to make sure you have the best experience using Rational Lite and that is why we gathered here all the necessary informations for you. We hope you will enjoy using Rational Lite, as much as we enjoy creating great products.', 'rational-lite' ); ?>

	</div>

	<hr />

	<div class="rational-tab-pane-center">

		<h1><?php esc_html_e( 'Getting started', 'rational-lite' ); ?></h1>

		<h4><?php esc_html_e( 'Customize everything in a single place.' ,'rational-lite' ); ?></h4>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'rational-lite' ); ?></p>
		<p><a href="<?php echo esc_url( $customizer_url ); ?>" class="button button-primary"><?php esc_html_e( 'Go to Customizer', 'rational-lite' ); ?></a></p>
		<p><img src="<?php echo $image_page; ?>settings.png" alt="Rational Lite Settings"></p>

	</div>

	<hr />

	<div class="rational-tab-pane-center">

		<h1><?php esc_html_e( 'FAQ', 'rational-lite' ); ?></h1>

	</div>

	<div class="rational-tab-pane-half rational-tab-pane-first-half">

		<h4><?php esc_html_e( 'Create a child theme', 'rational-lite' ); ?></h4>
		<p><?php esc_html_e( 'If you want to make changes to the theme\'s files, those changes are likely to be overwritten when you next update the theme. In order to prevent that from happening, you need to create a child theme. For this, please follow the documentation below.', 'rational-lite' ); ?></p>
		<p><a href="<?php echo esc_url( 'https://codex.wordpress.org/Child_Themes' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'rational-lite' ); ?></a></p>

		<hr />
		
		<h4><?php esc_html_e( 'Translate Rational Lite', 'rational-lite' ); ?></h4>
		<p><?php esc_html_e( 'In the below documentation you will find an easy way to translate Rational Lite into your native language or any other language you need for you site.', 'rational-lite' ); ?></p>
		<p><a href="<?php echo esc_url( 'https://sketchthemes.com/blog/effective-steps-to-translate-your-wordpress-theme-using-qtranslate-x/' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'rational-lite' ); ?></a></p>

		<hr />

		<h4><?php esc_html_e( 'What if I have any problems?', 'rational-lite' ); ?></h4>
		<p><?php esc_html_e( 'In case of any problems or help you can search to see if your topic has been started already or post a new support topic.', 'rational-lite' ); ?></p>
		<p><a href="<?php echo esc_url( 'https://wordpress.org/support/theme/rational-lite' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'rational-lite' ); ?></a></p>

	</div>

	<div class="rational-tab-pane-half">

		<h4><?php esc_html_e( 'How to set front page?', 'rational-lite' ); ?></h4>
		<p><?php esc_html_e( 'You can set the front page to a static page from "Setting -> Reading" or "Appearance -> Customize -> Static Front Page" Option.', 'rational-lite' ); ?></p>
		<p><img src="<?php echo $image_page; ?>settings-front-page.png" alt="Front Page Setting"></p>
		<p><?php esc_html_e( 'For more details','rational-lite'); ?> <a href="<?php echo esc_url( 'https://codex.wordpress.org/Creating_a_Static_Front_Page#WordPress_Static_Front_Page_Process/' ); ?>" class="button"><?php esc_html_e( 'View how to do this', 'rational-lite' ); ?></a></p>
				
	</div>

	<div class="rational-lite-clear"></div>
	<hr />

	<div class="rational-tab-pane">

		<h4><?php esc_html_e( 'How to set Front Page Header Image?', 'rational-lite' ); ?></h4>
		<p><strong>Q. <?php esc_html_e( 'I want to show slider on my front page.', 'rational-lite' ); ?></strong></p>
		<p>=> <?php esc_html_e( 'The pro theme has option to add slider on front page.', 'rational-lite' ); ?></p>
		<hr />
		<p><img src="<?php echo $image_page; ?>settings-header-image.png" alt="Front Page Setting"></p>

		<div class="rational-tab-pane-sep"></div>
		
		<h4><?php esc_html_e( 'How to configure featured boxes?', 'rational-lite' ); ?></h4>
		<hr />
		<p><img src="<?php echo $image_page; ?>settings-features.png" alt="Front Page Setting"></p>

		<div class="rational-tab-pane-sep"></div>
		
		<h4><?php esc_html_e( 'How to set landing pages?', 'rational-lite' ); ?></h4>
		<p><strong>Q. <?php esc_html_e( 'I want to add more landing pages.', 'rational-lite' ); ?></strong></p>
		<p>=> <?php esc_html_e( 'There are only 3 landing pages can be add in lite version. The pro version is completly one pager and you can add any number of landing pages.', 'rational-lite' ); ?></p>
		<hr />
		<p><img src="<?php echo $image_page; ?>settings-landing-page.png" alt="Front Page Setting"></p>

		<div class="rational-tab-pane-sep"></div>
		
		<h4><?php esc_html_e( 'How to set landing navigation?', 'rational-lite' ); ?></h4>
		<p><?php esc_html_e( 'You can configure landing navigation from Appearance->Menus or Custsomize Menus. Create custom link and add to menu finally save menu as Main Navigation.', 'rational-lite' ); ?></p>
		<hr />
		<p><img src="<?php echo $image_page; ?>settings-landing-nav.png" alt="Front Page Setting"></p>
		
		<div class="rational-tab-pane-sep"></div>
		
		<h4><?php esc_html_e( 'How to configure social links in footer?', 'rational-lite' ); ?></h4>
		<hr />
		<p><img src="<?php echo $image_page; ?>settings-social-links.png" alt="Front Page Setting"></p>
	</div>

</div>
