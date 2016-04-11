<?php
/**
 * Welcome Screen Class
 */
class Rational_Welcome {

	/**
	 * Constructor for the welcome screen
	 */
	public function __construct() {

		/* create dashbord page */
		add_action( 'admin_menu', array( $this, 'rational_lite_welcome_register_menu' ) );

		/* activation notice */
		add_action( 'load-themes.php', array( $this, 'rational_lite_activation_admin_notice' ) );

		/* enqueue script and style for welcome screen */
		add_action( 'admin_enqueue_scripts', array( $this, 'rational_lite_welcome_style_and_scripts' ) );

		/* enqueue script for customizer */
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'rational_lite_welcome_scripts_for_customizer' ) );

		/* load welcome screen */
		add_action( 'rational_lite_welcome', array( $this, 'rational_lite_welcome_getting_started' ), 	    10 );
		add_action( 'rational_lite_welcome', array( $this, 'rational_lite_welcome_github' ), 		            20 );
		add_action( 'rational_lite_welcome', array( $this, 'rational_lite_welcome_changelog' ), 				30 );
		add_action( 'rational_lite_welcome', array( $this, 'rational_lite_welcome_free_pro' ), 				40 );

		/* ajax callback for dismissable required actions */
		add_action( 'wp_ajax_rational_lite_dismiss_required_action', array( $this, 'rational_lite_dismiss_required_action_callback') );
		add_action( 'wp_ajax_nopriv_rational_lite_dismiss_required_action', array($this, 'rational_lite_dismiss_required_action_callback') );

	}

	/**
	 * Creates the dashboard page
	 * @see  add_theme_page()
	 * @since 1.8.2.4
	 */
	public function rational_lite_welcome_register_menu() {
		add_theme_page( 'About Rational Lite', 'About Rational Lite', 'activate_plugins', 'rational-lite-welcome', array( $this, 'rational_lite_welcome_screen' ) );
	}

	/**
	 * Adds an admin notice upon successful activation.
	 * @since 1.8.2.4
	 */
	public function rational_lite_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
			add_action( 'admin_notices', array( $this, 'rational_lite_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 * @since 1.8.2.4
	 */
	public function rational_lite_welcome_admin_notice() {
		?>
			<div class="updated notice is-dismissible">
				<p><?php echo sprintf( esc_html__( 'Welcome! Thank you for choosing Rational Lite! To fully take advantage of the best our theme can offer please make sure you visit our %swelcome page%s.', 'rational-lite' ), '<a href="' . esc_url( admin_url( 'themes.php?page=rational-lite-welcome' ) ) . '">', '</a>' ); ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=rational-lite-welcome' ) ); ?>" class="button" style="text-decoration: none;"><?php _e( 'Get started with Rational Lite', 'rational-lite' ); ?></a></p>
			</div>
		<?php
	}

	/**
	 * Load welcome screen css and javascript
	 * @since  1.8.2.4
	 */
	public function rational_lite_welcome_style_and_scripts( $hook_suffix ) {

		if ( 'appearance_page_rational-lite-welcome' == $hook_suffix ) {
			wp_enqueue_style( 'rational-lite-welcome-screen-css', get_template_directory_uri() . '/includes/admin/welcome-screen/css/welcome.css' );
			wp_enqueue_script( 'rational-lite-welcome-screen-js', get_template_directory_uri() . '/includes/admin/welcome-screen/js/welcome.js', array('jquery') );

			global $rational_required_actions;

			$nr_actions_required = 0;

			/* get number of required actions */
			if( get_option('rational_show_required_actions') ):
				$rational_show_required_actions = get_option('rational_show_required_actions');
			else:
				$rational_show_required_actions = array();
			endif;

			if( !empty($rational_required_actions) ):
				foreach( $rational_required_actions as $rational_required_action_value ):
					if(( !isset( $rational_required_action_value['check'] ) || ( isset( $rational_required_action_value['check'] ) && ( $rational_required_action_value['check'] == false ) ) ) && ((isset($rational_show_required_actions[$rational_required_action_value['id']]) && ($rational_show_required_actions[$rational_required_action_value['id']] == true)) || !isset($rational_show_required_actions[$rational_required_action_value['id']]) )) :
						$nr_actions_required++;
					endif;
				endforeach;
			endif;

			wp_localize_script( 'rational-lite-welcome-screen-js', 'rationalLiteWelcomeScreenObject', array(
				'nr_actions_required' => $nr_actions_required,
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'no_required_actions_text' => __( 'Hooray! There are no required actions for you right now.','rational-lite' )
			) );
		}
	}

	/**
	 * Load scripts for customizer page
	 * @since  1.8.2.4
	 */
	public function rational_lite_welcome_scripts_for_customizer() {

		wp_enqueue_style( 'rational-lite-welcome-screen-customizer-css', get_template_directory_uri() . '/includes/admin/welcome-screen/css/welcome_customizer.css' );
		wp_enqueue_script( 'rational-lite-welcome-screen-customizer-js', get_template_directory_uri() . '/includes/admin/welcome-screen/js/welcome_customizer.js', array('jquery'), '20120206', true );

		global $rational_required_actions;

		$nr_actions_required = 0;

		/* get number of required actions */
		if( get_option('rational_show_required_actions') ):
			$rational_show_required_actions = get_option('rational_show_required_actions');
		else:
			$rational_show_required_actions = array();
		endif;

		if( !empty($rational_required_actions) ):
			foreach( $rational_required_actions as $rational_required_action_value ):
				if(( !isset( $rational_required_action_value['check'] ) || ( isset( $rational_required_action_value['check'] ) && ( $rational_required_action_value['check'] == false ) ) ) && ((isset($rational_show_required_actions[$rational_required_action_value['id']]) && ($rational_show_required_actions[$rational_required_action_value['id']] == true)) || !isset($rational_show_required_actions[$rational_required_action_value['id']]) )) :
					$nr_actions_required++;
				endif;
			endforeach;
		endif;

		wp_localize_script( 'rational-lite-welcome-screen-customizer-js', 'rationalLiteWelcomeScreenCustomizerObject', array(
			'nr_actions_required' => $nr_actions_required,
			'aboutpage' => esc_url( admin_url( 'themes.php?page=rational-lite-welcome#actions_required' ) ),
			'customizerpage' => esc_url( admin_url( 'customize.php#actions_required' ) ),
			'themeinfo' => __('View Theme Info','rational-lite'),
		) );
	}

	/**
	 * Dismiss required actions
	 * @since 1.8.2.4
	 */
	public function rational_lite_dismiss_required_action_callback() {

		global $rational_required_actions;

		$rational_dismiss_id = (isset($_GET['dismiss_id'])) ? $_GET['dismiss_id'] : 0;

		echo $rational_dismiss_id; /* this is needed and it's the id of the dismissable required action */

		if( !empty($rational_dismiss_id) ):

			/* if the option exists, update the record for the specified id */
			if( get_option('rational_show_required_actions') ):

				$rational_show_required_actions = get_option('rational_show_required_actions');

				$rational_show_required_actions[$rational_dismiss_id] = false;

				update_option( 'rational_show_required_actions',$rational_show_required_actions );

			/* create the new option,with false for the specified id */
			else:

				$rational_show_required_actions_new = array();

				if( !empty($rational_required_actions) ):

					foreach( $rational_required_actions as $rational_required_action ):

						if( $rational_required_action['id'] == $rational_dismiss_id ):
							$rational_show_required_actions_new[$rational_required_action['id']] = false;
						else:
							$rational_show_required_actions_new[$rational_required_action['id']] = true;
						endif;

					endforeach;

				update_option( 'rational_show_required_actions', $rational_show_required_actions_new );

				endif;

			endif;

		endif;

		die(); // this is required to return a proper result
	}


	/**
	 * Welcome screen content
	 * @since 1.8.2.4
	 */
	public function rational_lite_welcome_screen() {

		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );
		?>

		<ul class="rational-lite-nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#getting_started" aria-controls="getting_started" role="tab" data-toggle="tab"><?php esc_html_e( 'Getting started','rational-lite'); ?></a></li>
			<li role="presentation"><a href="#github" aria-controls="github" role="tab" data-toggle="tab"><?php esc_html_e( 'Contribute','rational-lite'); ?></a></li>
			<li role="presentation"><a href="#changelog" aria-controls="changelog" role="tab" data-toggle="tab"><?php esc_html_e( 'Changelog','rational-lite'); ?></a></li>
			<li role="presentation"><a href="#free_pro" aria-controls="free_pro" role="tab" data-toggle="tab"><?php esc_html_e( 'Free VS PRO','rational-lite'); ?></a></li>
		</ul>

		<div class="rational-lite-tab-content">

			<?php
			/**
			 * @hooked rational_lite_welcome_getting_started - 10
			 * @hooked rational_lite_welcome_child_themes - 20
			 * @hooked rational_lite_welcome_github - 30
			 * @hooked rational_lite_welcome_changelog - 40
			 * @hooked rational_lite_welcome_free_pro - 50
			 */
			do_action( 'rational_lite_welcome' ); ?>

		</div>
		<?php
	}

	/**
	 * Getting started
	 * @since 1.8.2.4
	 */
	public function rational_lite_welcome_getting_started() {
		require_once( get_template_directory() . '/includes/admin/welcome-screen/sections/getting-started.php' );
	}

	/**
	 * Contribute
	 * @since 1.8.2.4
	 */
	public function rational_lite_welcome_github() {
		require_once( get_template_directory() . '/includes/admin/welcome-screen/sections/github.php' );
	}

	/**
	 * Changelog
	 * @since 1.8.2.4
	 */
	public function rational_lite_welcome_changelog() {
		require_once( get_template_directory() . '/includes/admin/welcome-screen/sections/changelog.php' );
	}

	/**
	 * Free vs PRO
	 * @since 1.8.2.4
	 */
	public function rational_lite_welcome_free_pro() {
		require_once( get_template_directory() . '/includes/admin/welcome-screen/sections/free_pro.php' );
	}
}

$GLOBALS['Rational_Welcome'] = new Rational_Welcome();