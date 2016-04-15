<?php
if (class_exists('WP_Customize_Control')) {

    /**
     * Sortable multi check boxes custom control.
     * @since 1.0
     * @author inkthemes.com
     * @copyright Copyright (c) 2015, inkthemes.com
     */
    class Inkthemes_Customize_Control_Sortable_Checkboxes extends WP_Customize_Control {

        /**
         * Control Type
         */
        public $type = 'ink-multicheck-sortable';

        /**
         * Render Settings
         */
        public function render_content() {

            /* if no choices, bail. */
            if (empty($this->choices)) {
                return;
            }
            if (!empty($this->label)) {
                ?>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <?php
            } // add label if needed.

            if (!empty($this->description)) {
                ?>
                <span class="description customize-control-description"><?php echo $this->description; ?></span>
                <?php
            } // add desc if needed.
            /* Data */
            $values = explode(',', $this->value());
            $choices = $this->choices;

            /* If values exist, use it. */
            $options = array();
            if ($values) {

                /* get individual item */
                foreach ($values as $value) {

                    /* separate item with option */
                    $value = explode(':', $value);

                    /* build the array. remove options not listed on choices. */
                    if (array_key_exists($value[0], $choices)) {
                        $options[$value[0]] = $value[1] ? '1' : '0';
                    }
                }
            }
            /* if there's new options (not saved yet), add it in the end. */
            foreach ($choices as $key => $val) {

                /* if not exist, add it in the end. */
                if (!array_key_exists($key, $options)) {
                    $options[$key] = '0'; // use zero to deactivate as default for new items.
                }
            }
            ?>

            <ul class="ink-multicheck-sortable-list">

                <?php foreach ($options as $key => $value) { ?>

                    <li>
                        <label>
                            <input name="<?php echo esc_attr($key); ?>" class="ink-multicheck-sortable-item" type="checkbox" value="<?php echo esc_attr($value); ?>" <?php checked($value); ?> />
                            <?php echo esc_html($choices[$key]); ?>
                        </label>
                        <i class="dashicons dashicons-menu ink-multicheck-sortable-handle"></i>
                    </li>

                <?php } // end choices.      ?>

                <li class="ink-hideme">
                    <input type="hidden" class="ink-multicheck-sortable" <?php $this->link(); ?> value="<?php echo esc_attr($this->value()); ?>" />
                </li>

            </ul><!-- .ink-multicheck-sortable-list -->


            <?php
        }

    }

    class Inkthemes_Customize_Alpha_Color_Control extends WP_Customize_Control {

        /**
         * Official control name.
         */
        public $type = 'alpha-color';

        /**
         * Add support for palettes to be passed in.
         *
         * Supported palette values are true, false, or an array of RGBa and Hex colors.
         */
        public $palette;

        /**
         * Add support for showing the opacity value on the slider handle.
         */
        public $show_opacity;

        /**
         * Enqueue scripts and styles.
         *
         * Ideally these would get registered and given proper paths before this control object
         * gets initialized, then we could simply enqueue them here, but for completeness as a
         * stand alone class we'll register and enqueue them here.
         */
        public function enqueue() {
            wp_enqueue_script(
                    'one-page-alpha-color-picker', get_stylesheet_directory_uri() . '/assets/js/onepage_color_control.js', array('jquery', 'wp-color-picker'), '', true
            );
            wp_enqueue_style(
                    'one-page-alpha-color-picker', get_stylesheet_directory_uri() . '/assets/css/customizer.css', array('wp-color-picker'), ''
            );
        }

        /**
         * Render the control.
         */
        public function render_content() {
            // Process the palette
            if (is_array($this->palette)) {
                $palette = implode('|', $this->palette);
            } else {
                // Default to true.
                $palette = ( false === $this->palette || 'false' === $this->palette ) ? 'false' : 'true';
            }
            // Support passing show_opacity as string or boolean. Default to true.
            $show_opacity = ( false === $this->show_opacity || 'false' === $this->show_opacity ) ? 'false' : 'true';
            // Begin the output.
            ?>
            <label>
                <?php
                // Output the label and description if they were passed in.
                if (isset($this->label) && '' !== $this->label) {
                    echo '<span class="customize-control-title">' . sanitize_text_field($this->label) . '</span>';
                }
                if (isset($this->description) && '' !== $this->description) {
                    echo '<span class="description customize-control-description">' . sanitize_text_field($this->description) . '</span>';
                }
                ?>
                <input class="alpha-color-control" type="text" data-show-opacity="<?php echo $show_opacity; ?>" data-palette="<?php echo esc_attr($palette); ?>" data-default-color="<?php echo esc_attr($this->settings['default']->default); ?>" <?php $this->link(); ?>  />
            </label>
            <?php
        }

    }

    class Inkthemes_Customize_AD extends WP_Customize_Control {

        public $image_url;
        public $link_url;

        public function render_content() {
            ?>
            <label style="margin-top: 20px;display: block; color: #298cba !important;">
                <?php
                // Output the label and description if they were passed in.
                if (isset($this->label) && '' !== $this->label) {
                    echo '<span class="customize-control-title">' . sanitize_text_field($this->label) . '</span>';
                }
                if (isset($this->description) && '' !== $this->description) {
                    echo '<span class="description customize-control-description">' . sanitize_text_field($this->description) . '</span>';
                }
                if (isset($this->image_url) && '' !== $this->image_url) {
                    echo '<span class="customize-control-img"><a target="_new" href="' . (isset($this->link_url) && $this->link_url != "" ? $this->link_url : '#') . '"><img src="' . ($this->image_url) . '" alt="inkthemes_ad"/></a></span>';
                }
                ?>
            </label>
            <?php
        }

    }

}

/**
 * Services
 * list of available sharing services
 */
function onepage_sections() {

    $sections = array();

    $sections['service_section'] = array(
        'id' => 'service_section',
        'label' => __('Service Section', 'one-page'),
        'callback' => 'onepage_service_section',
    );

    $sections['blog_section'] = array(
        'id' => 'blog_section',
        'label' => __('Blog Section', 'one-page'),
        'callback' => 'onepage_blog_section',
    );

    $sections['gallery_section'] = array(
        'id' => 'gallery_section',
        'label' => __('Video Section', 'one-page'),
        'callback' => 'onepage_video_section',
    );

    $sections['portfolio_section'] = array(
        'id' => 'portfolio_section',
        'label' => __('Portfolio Section', 'one-page'),
        'callback' => 'onepage_portfolio_section',
    );

    $sections['testimonial_section'] = array(
        'id' => 'testimonial_section',
        'label' => __('Testimonials Section', 'one-page'),
        'callback' => 'onepage_testimonial_section',
    );

    $sections['price_section'] = array(
        'id' => 'price_section',
        'label' => __('Price Section', 'one-page'),
        'callback' => 'onepage_price_section',
    );

    $sections['team_section'] = array(
        'id' => 'team_section',
        'label' => __('Team Section', 'one-page'),
        'callback' => 'onepage_team_section',
    );

    $sections['contact_section'] = array(
        'id' => 'contact_section',
        'label' => __('Contact Us Section', 'one-page'),
        'callback' => 'onepage_contact_section',
    );

    return apply_filters('onepage_sections', $sections);
}

/**
 * Utility: Default Services to use in customizer default value
 * @return string
 */
function onepage_sections_default() {
    $default = array();
    $sections = onepage_sections();
    foreach ($sections as $section) {
        $default[] = $section['id'] . ':1'; /* activate all as default. */
    }
    return apply_filters('onepage_sections_default', implode(',', $default));
}

/**
 * Share Template Tags
 * the final function with the conditional.
 */
function onepage_section_show() {

    /* Get the options */
    $option = get_option('onepage_options');

    /* Check Services */
    $sections = onepage_sections_default();
    if (isset($option['onepage_sort'])) {
        $sections = $option['onepage_sort'];
    }
    if (!$sections)
        return;

    /* render button */
    return apply_filters('onepage_section_show', onepage_get_section($sections));
}

/**
 * Return Share buttons HTML based on Options
 * @param $options string formatted active services
 */
function onepage_get_section($options) {

    /* bail if empty. */
    if (!$options)
        return;

    /* available services */
    $sections = onepage_sections();

    /* var. */
    $buttons = array();

    /* make array */
    $options = explode(',', $options);

    /* loop load */
    foreach ($options as $option) {
        $option = explode(':', $option);
        if (isset($option[0]) && isset($option[1]) && array_key_exists($option[0], $sections) && '1' == $option[1]) {
            $buttons[] = $option[0];
        }
    }

    /* bail if not found. */
    if (!$buttons)
        return;
    foreach ($buttons as $button) {
        $fn_callback = $sections[$button]['callback'];
        if (function_exists($fn_callback)) {
            call_user_func($fn_callback);
        }
    }
}

function onepage_service_section() {
    get_template_part('templates/homepage', 'services');
}

function onepage_blog_section() {
    get_template_part('templates/homepage', 'blogs');
}

function onepage_video_section() {
    get_template_part('templates/homepage', 'videos');
}

function onepage_testimonial_section() {
    get_template_part('templates/homepage', 'testimonials');
}

function onepage_portfolio_section() {
    get_template_part('templates/homepage', 'hexGallery');
}

function onepage_price_section() {
    get_template_part('templates/homepage', 'pricing');
}

function onepage_team_section() {
    get_template_part('templates/homepage', 'teams');
}

function onepage_contact_section() {
    get_template_part('templates/homepage', 'contactUs');
}
