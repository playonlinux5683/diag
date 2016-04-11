<?php
/**
 * Title: Theme Upsell.
 *
 * Description: Displays list of all Sketchtheme themes linking to it's pro and free versions.
 *
 *
 * @author   Sketchtheme
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://sketchthemes.com/
 */

// Add stylesheet and JS for sell page.
function purpleplay_lite_sell_style() {
    // Set template directory uri
    $directory_uri = get_template_directory_uri();
    wp_enqueue_style( 'upsell_style', get_template_directory_uri() . '/css/upsell.css' );
}
add_action( 'admin_init', 'purpleplay_lite_sell_style' );

// Add upsell page to the menu.
function purpleplay_lite_add_upsell() {
    $page = add_theme_page( __('Sketch Themes', 'purpleplay-lite'), __('Sketch Themes', 'purpleplay-lite'), 'administrator', 'sketch-themes', 'purpleplay_lite_display_upsell' );
    add_action( 'admin_print_styles-' . $page, 'purpleplay_lite_sell_style' );
}
add_action( 'admin_menu', 'purpleplay_lite_add_upsell',12 );

// Define markup for the upsell page.
function purpleplay_lite_display_upsell() {

    // Set template directory uri
    $directory_uri = get_template_directory_uri().'/images';
    ?>

    <div class="wrap">
        <div class="container-fluid">
            <div id="upsell_container">
                <div class="clearfix row-fluid">
                    <div id="upsell_header" class="span12">
                        <h2>
                            <a href="https://sketchthemes.com/" target="_blank">
                                <img src="<?php echo $directory_uri; ?>/sketch-logo.png" alt="<?php __('Sketch Themes', 'purpleplay-lite') ?>" />
                            </a>
                        </h2>
                        <div class="donate-info">
                          <strong><?php _e('To Activate All Features, Please Upgrade to Pro version!', 'purpleplay-lite'); ?></strong><br>
                          <a title="Upgrade to Pro" href="http://www.sketchthemes.com/themes/" target="_blank" class="upgrade"><?php _e('Upgrade to Pro', 'purpleplay-lite'); ?></a> <a title="Setup Instructions" href="<?php echo get_template_directory_uri().'/readme.txt'; ?>" target="_blank" class="donate"><?php _e('Setup Instructions', 'purpleplay-lite'); ?></a>
                          <a title="Rate PurplePlay Lite" href="http://wordpress.org/support/view/theme-reviews/purpleplay-lite" target="_blank" class="review"><?php _e('Rate PurplePlay Lite', 'purpleplay-lite'); ?></a>
                          <a title="Test Drive" href="http://trial.sketchthemes.com/wp-signup.php" target="_blank" class="review"><?php _e('Theme Test Drive', 'purpleplay-lite'); ?></a>
                        </div>
                    </div>
                </div>
                <div id="upsell_themes" class="clearfix row-fluid">

                    <!-- PurplePlay Pro -->
                    <div id="PurplePlay" class="row-fluid">
                        <div class="theme-container">
                            <div class="theme-image span3">
                                <a href="https://sketchthemes.com/premium-themes/purpleplay-multipurpose-business-wordpress-theme/" target="_blank">
                                    <img src="<?php echo $directory_uri; ?>/PurplePlay.png"  alt="<?php __('PurplePlay Theme', 'purpleplay-lite') ?>" />
                                </a>
                            </div>
                            <div class="theme-info span9">
                                <a class="theme-name" href="https://sketchthemes.com/premium-themes/purpleplay-multipurpose-business-wordpress-theme/" target="_blank"><h4><?php _e('PurplePlay - MultiPurpose Business WordPress Theme','purpleplay-lite');?></h4></a>

                                <div class="theme-description">
                                    <p><?php _e("PurplePlay Business WordPress Theme is a clean, creative, responsive, minimal WordPress theme by SketchThemes. This modern, elegant and fresh new WordPress theme comprises strikingly new features which you cannot find in any other theme. PurplePlay is a professional multipurpose theme designed for agency,  medical, healthcare, consulting and corporate sites. With all the stunning features like widgetized featured box section and sortable portfolio, PurplePlay deserves to be a must have theme for all the sit owners. PurplePlay Multipurpose Business WordPress Theme is highly customizable and allows users to build their sites as per their requirements. PurplePlay promises to be every site’s charm that converts every visitor into buyer. Just own it to sense the difference.",'purpleplay-lite'); ?></p>

                                </div>

                                <a class="buy  btn btn-info" href="https://sketchthemes.com/preview/assets/purpleplay/" target="_blank"><?php _e( 'View Demo', 'purpleplay-lite' ); ?></a>
                                <a class="buy btn btn-primary" href="https://sketchthemes.com/premium-themes/purpleplay-multipurpose-business-wordpress-theme/" target="_blank"><?php _e( 'Buy PurplePlay Pro', 'purpleplay-lite' ); ?></a>
                                
                            </div>
                        </div>
                    </div>
            		
            		<!-- Sketchmini Pro -->
                    <div id="Sketchmini" class="row-fluid">
                        <div class="theme-container">
                            <div class="theme-image span3">
                                <a href="https://sketchthemes.com/themes/sketchmini-free-wordpress-theme/" target="_blank">
                                    <img src="<?php echo $directory_uri; ?>/Sketchmini.png"  alt="<?php __('Sketchmini Theme', 'purpleplay-lite') ?>" />
                                </a>
                            </div>
                            <div class="theme-info span9">
                                <a class="theme-name" href="https://sketchthemes.com/themes/sketchmini-free-wordpress-theme/" target="_blank"><h4><?php _e('SketchMini Free Responsive WordPress Theme','purpleplay-lite');?></h4></a>

                                <div class="theme-description">
                                    <p><?php _e('SketchMini is a Responsive WordPress Theme Free to use with a GPL. SketchMini has got great features and awesome backend to make use of the available features in the theme. You dont need to be an expert to use this SketchMini theme. SketchMini can act as a great base theme to create any great website.','purpleplay-lite')?></p>

                                </div>
            					<a class="free btn btn-success" href="https://sketchthemes.com/premium-themes/multipurpose-responsive-wordpress-theme-for-free/" target="_blank"><?php _e( 'Download Free', 'purpleplay-lite' ); ?></a>
                                <a class="buy btn btn-info" href="https://sketchthemes.com/preview/?theme=57" target="_blank"><?php _e( 'View Demo', 'purpleplay-lite' ); ?></a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- upsell themes -->
            </div>
            <!-- upsell container -->
        </div>
    <!-- container-fluid -->
    </div>

<?php } ?>