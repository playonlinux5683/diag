<!-- testimonial Section -->
<section id="testimonial" class="section_6">
    <div class="testimonial_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="main_head animated fade_in_up"><?php echo esc_attr(onepage_get_option('onepage_testimonial_main_heading', __('Testimonial Section','one-page'))); ?></h2>
                    <hr class="testimonial_sep animated fade_in_up">
                    <p class="main_desc animated fade_in_up"><?php echo esc_attr(onepage_get_option('onepage_testimonial_sub_heading', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','one-page'))); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="testimonial_wrapper">

                    <!-- Testimonial -->
                    <div class="testimonials-slider">

                        <div class="slide">
                            <img class="animated fade_left" src='<?php echo esc_url(onepage_get_option('onepage_testimonial_1_image', ONEPAGE_DIR_URI . "assets/images/team1.jpg")); ?>' onmouseover="javascript: this.title = '';" title="">
                            <div class="bx-caption animated fade_right"><span><a class="arrow"></a><?php echo esc_attr(onepage_get_option('onepage_testimonial_1_content', __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.','one-page'))); ?>
                                    <a class="testimonial"><?php echo esc_attr(onepage_get_option('onepage_testimonial_1_name', __('Anders','one-page'))); ?></a></span></div>
                        </div>

                        <div class="slide">
                            <img class="animated fade_left" src='<?php echo esc_url(onepage_get_option('onepage_testimonial_2_image', ONEPAGE_DIR_URI . "assets/images/team2.jpg")); ?>' onmouseover="javascript: this.title = '';" title="">
                            <div class="bx-caption animated fade_right"><span><a class="arrow"></a><?php echo esc_attr(onepage_get_option('onepage_testimonial_2_content', __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.','one-page'))); ?><a class="testimonial"><?php echo esc_attr(onepage_get_option('onepage_testimonial_2_name', __('Anders','one-page'))); ?></a></span></div>
                        </div>

                        <div class="slide">
                            <img class="animated fade_left" src='<?php echo esc_url(onepage_get_option('onepage_testimonial_3_image', ONEPAGE_DIR_URI . "assets/images/team3.jpg")); ?>' onmouseover="javascript: this.title = '';" title="">
                            <div class="bx-caption animated fade_right"><span><a class="arrow"></a><?php echo esc_attr(onepage_get_option('onepage_testimonial_3_content', __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.','one-page'))); ?><a class="testimonial"><?php echo esc_attr(onepage_get_option('onepage_testimonial_3_name', __('Anders','one-page'))); ?></a></span></div>
                        </div>
                    </div>
                    <!-- END Testimonial -->

                </div>
            </div>
        </div>
    </div>
</section>
<!--/testimonial section-->