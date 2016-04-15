<!-- pricing Section -->
<section id="pricing" class="section_7">
    <div class="pricing_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="main_head animated fade_in_up"><?php echo esc_attr(onepage_get_option('onepage_pricing_main_heading', __('Checkout Pricing Section','one-page'))); ?></h2>
                    <hr class="pricing_sep animated fade_in_up">
                    <p class="main_desc animated fade_in_up"><?php echo esc_attr(onepage_get_option('onepage_pricing_sub_heading', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','one-page'))); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="pricing_wrapper">
                    <style></style>
                    <div class="col-md-4">
                        <div class="pricing_item one animated bounce" style="animation-delay: .3s;">
                            <ul>
                                <li class="table_icon"><span class="glyphicon <?php echo esc_attr(onepage_get_option('onepage_pricing_box1_icon', 'glyphicon-shopping-cart')); ?>"></span></li>
                                <li class="table_heading"><h3><?php echo esc_attr(onepage_get_option('onepage_pricing_box1_heading', __('Single Plan','one-page'))); ?></h3></li>
                                <li class="table_price"><?php echo esc_attr(onepage_get_option('onepage_pricing_box1_price', '$59')); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box1_feature1', __('Unlimited Access','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box1_feature2', __('20 GB Storage','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box1_feature3', __('200 Cups of Coffee Free','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box1_feature4', __('6 Months Support','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box1_feature5', __('Full Theme Access','one-page'))); ?></li>
                                <li class="table_button"><a href="<?php echo esc_url(onepage_get_option('onepage_pricing_box1_button_link', '#')); ?>"><?php echo esc_attr(onepage_get_option('onepage_pricing_box1_button_text', __('View Theme','one-page'))); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing_item two animated bounce" style="animation-delay: .6s;">
                            <ul>
                                <li class="table_icon"><span class="glyphicon <?php echo esc_attr(onepage_get_option('onepage_pricing_box2_icon', 'glyphicon-hourglass')); ?>"></span></li>
                                <li class="table_heading"><h3><?php echo esc_attr(onepage_get_option('onepage_pricing_box2_heading', __('Multiple Plan','one-page'))); ?></h3></li>
                                <li class="table_price" <?php echo "style='color:" . onepage_get_option('onepage_pricing_box_pricing_color', '#fff') . "; border-color:" . onepage_get_option('onepage_pricing_box_pricing_bottom_border_color', '#F8C841') . ";'"; ?>><?php echo esc_attr(onepage_get_option('onepage_pricing_box2_price', '$99')); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box2_feature1', __('Unlimited Access','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box2_feature2', __('20 GB Storage','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box2_feature3', __('200 Cups of Coffee Free','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box2_feature4', __('6 Months Support','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box2_feature5', __('Full Theme Access','one-page'))); ?></li>
                                <li class="table_button"><a href="<?php echo esc_url(onepage_get_option('onepage_pricing_box2_button_link', '#')); ?>"><?php echo esc_attr(onepage_get_option('onepage_pricing_box2_button_text', __('View Theme','one-page'))); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing_item three animated bounce" style="animation-delay: .9s;">
                            <ul>
                                <li class="table_icon"><span class="glyphicon <?php echo esc_attr(onepage_get_option('onepage_pricing_box3_icon', 'glyphicon-shopping-cart')); ?>"></span></li>
                                <li class="table_heading"><h3><?php echo esc_attr(onepage_get_option('onepage_pricing_box3_heading', __('Full Member','one-page'))); ?></h3></li>
                                <li class="table_price" <?php echo "style='color:" . onepage_get_option('onepage_pricing_box_pricing_color', '#fff') . "; border-color:" . onepage_get_option('onepage_pricing_box_pricing_bottom_border_color', '#F8C841') . ";'"; ?>><?php echo esc_attr(onepage_get_option('onepage_pricing_box3_price', '$250')); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box3_feature1', __('Unlimited Access','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box3_feature2', __('20 GB Storage','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box3_feature3', __('200 Cups of Coffee Free','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box3_feature4', __('6 Months Support','one-page'))); ?></li>
                                <li><?php echo esc_attr(onepage_get_option('onepage_pricing_box3_feature5', __('Full Theme Access','one-page'))); ?></li>
                                <li class="table_button"><a href="<?php echo esc_url(onepage_get_option('onepage_pricing_box3_button_link', '#')); ?>"><?php echo esc_attr(onepage_get_option('onepage_pricing_box3_button_text', __('View Theme','one-page'))); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ pricing Section -->
