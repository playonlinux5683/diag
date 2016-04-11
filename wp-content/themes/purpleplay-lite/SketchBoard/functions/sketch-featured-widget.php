<?php

/******************************************** 
FEATURED BOX WIDGET START
*********************************************/
class PurplePlayFeaturedBox extends WP_Widget {
    
    /**
    * Register widget with WordPress.
    */
    function __construct() {
        $widget_ops = array('classname' => 'mid-box','description' => __('Purple Play Themes widget for Featured Box','purpleplay-lite') );
        parent::__construct(
            'PurplePlayFeaturedBox', // Base ID
            __('Featured Box - Purple Play','purpleplay-lite'), // Name
           $widget_ops ); // Args
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
    */

    function widget($args, $instance) {	
		extract( $args );
        // ===================================
        //      SANITIZE ALL THE VALUES
        // ===================================
        if(isset($instance['title'])){ $title = wp_kses_post($instance['title']); } else { $title = ''; }
        if(isset($instance['featuretype'])){ $featuretype = esc_attr($instance['featuretype']); } else { $featuretype = ''; }
        if(isset($instance['image_uri'])){ $featureImage = esc_url($instance['image_uri']); } else { $featuretype = ''; }
        if(isset($instance['fb_icon_class'])){ $fb_icon_class = esc_html($instance['fb_icon_class']);} else { $fb_icon_class = ''; }
        if(isset($instance['fb_content'])){$fb_content = esc_attr($instance['fb_content']);} else { $fb_content = ''; }      
        if(isset($instance['fb_link'])){$fb_link = esc_url($instance['fb_link']);} else { $fb_link = ''; }
        ?>
        
        <?php echo $before_widget; ?>   					
        <!-- Featured Box  -->  
        <div class="box-container">
            <div class="box-img icon-center clearfix">
                <?php if($featuretype == 'on') { ?>
                    <div class="front-img-wrap clearfix">
                        <img class="skin-bg" alt="Featured Image"  src="<?php echo $featureImage; ?>">
                    </div>
                <?php } else { ?>
                    <div class="front-icon-wrap"><div class="element"></div><i class="fa <?php echo $fb_icon_class; ?> font-effect-3d-float"></i></div>
                <?php } ?>
                <div class="box-title-center"><a href="<?php echo $fb_link; ?>"><?php if($title) { echo $title; } ?></a></div>
            </div>
            <div class="box-text-center">
                <?php if($fb_content) { echo $fb_content; } ?>
            </div>
            <div class="readmorebtn-center"><a href="<?php echo $fb_link; ?>"><?php _e('Read more &rarr;','purpleplay-lite'); ?></a></div>
            <div class="clearfix"></div>
        </div>
        <?php echo $after_widget;
    }
    

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
    */

    function update($new_instance, $old_instance) {				
    	$instance = $old_instance;
    	$instance['title'] = wp_kses_post($new_instance['title']);
        $instance['featuretype'] = esc_html($new_instance['featuretype']);
        $instance['image_uri'] = ( ! empty( $new_instance['image_uri'] ) ) ? esc_url( $new_instance['image_uri'] ) : '';
    	$instance['fb_icon_class'] = esc_html($new_instance['fb_icon_class']);
    	$instance['fb_content'] = wp_kses_post($new_instance['fb_content']);
    	$instance['fb_link'] = esc_url($new_instance['fb_link']);
        return $instance;
    }
    

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
    */

    function form($instance) {
        if ( isset( $instance[ 'image_uri' ] ) ) {
            $image_uri = esc_url($instance[ 'image_uri' ]);
        }
        else {
            $image_uri = '';
        }
		if(isset($instance['title'])){ $title = wp_kses_post($instance['title']); }
        if(isset($instance['featuretype']) && $instance['featuretype'] != '' ){ $featuretype = 'checked="checked"'; } else { $instance['featuretype'] = ''; }
		if(isset($instance['fb_icon_class'])){ $fb_icon_class = esc_html($instance['fb_icon_class']);}
		if(isset($instance['fb_content'])){$fb_content = wp_kses_post($instance['fb_content']);}			
		if(isset($instance['fb_link'])){$fb_link = esc_url($instance['fb_link']);}
        $displayImage = ($instance['featuretype'] == 'on') ? "display:block": "display:none";
        $displayIcon = ($instance['featuretype'] == 'on') ? "display:none": "display:block";
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','purpleplay-lite'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php if(isset($title)){echo $title;} else { echo '';}  ?>" /></label></p>

        <p><input type="checkbox" class="checkbox purple-play-featured-checkbox" id="<?php echo $this->get_field_id('featuretype'); ?>" name="<?php echo $this->get_field_name('featuretype'); ?>" <?php if (isset($featuretype)){ echo $featuretype;} ?>>
        <label for="<?php echo $this->get_field_id('featuretype'); ?>"><?php _e('Use Image','purpleplay-lite'); ?> </label>
        </p>
        
        <p class="purple-play-fimage" style="<?php echo $displayImage; ?>"><label for="<?php echo $this->get_field_id('image_uri'); ?>"><?php _e('Image','purpleplay-lite'); ?></label><br />
        <img class="custom_media_image" src="<?php echo $image_uri; ?>" style="margin:0;padding:0;max-width:100px;" /><br />
        <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $image_uri; ?>"><br /><br />
        <input type="button" value="<?php _e( 'Upload Image', 'purpleplay-lite' ); ?>" class="button purple-play-widget-media-upload" id="<?php echo $this->id; ?>-purple-play-widget-image-uploader"/>
        </p>
        
        <p class="purple-play-ficon" style="<?php echo $displayIcon; ?>"><label for="<?php echo $this->get_field_id('fb_icon_class'); ?>"><?php _e('Featured Box Icon Class:','purpleplay-lite'); ?> <input class="widefat" id="<?php echo $this->get_field_id('fb_icon_class'); ?>" name="<?php echo $this->get_field_name('fb_icon_class'); ?>" type="text" value="<?php if(isset($fb_icon_class)){echo $fb_icon_class;} else { echo '';} ?>" /></label></p>

        <p><label for="<?php echo $this->get_field_id('fb_content'); ?>"><?php _e('Featured Box Content:','purpleplay-lite'); ?> <textarea rows="4" cols="50" class="widefat" id="<?php echo $this->get_field_id('fb_content'); ?>" name="<?php echo $this->get_field_name('fb_content'); ?>"><?php if(isset($fb_content)){echo $fb_content;} else { echo '';} ?></textarea></label></p>

        <p><label for="<?php echo $this->get_field_id('fb_link'); ?>"><?php _e('Featured Box Link:','purpleplay-lite'); ?> <input class="widefat" id="<?php echo $this->get_field_id('fb_link'); ?>" name="<?php echo $this->get_field_name('fb_link'); ?>" type="text" value="<?php if(isset($fb_link)){echo $fb_link;} else { echo '';}?>" /></label></p>	

<?php 
    }
}
add_action('widgets_init', create_function('', 'return register_widget("PurplePlayFeaturedBox");'));

function purpleplay_lite_featuredBoxScript(){
    wp_enqueue_media();
    wp_enqueue_script( 'purple-play-featured-js', get_template_directory_uri() . '/js/featured-box.js', array( 'jquery' ), '1', true );
}
add_action('admin_enqueue_scripts', 'purpleplay_lite_featuredBoxScript');
/********************************************
FEATURED BOX WIDGET END
*********************************************/