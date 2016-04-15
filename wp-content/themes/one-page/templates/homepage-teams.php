<!--Team Information section-->
<section id="team" class="section_8">
    <div class="team_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="main_head"><?php echo esc_attr(onepage_get_option('onepage_team_main_heading', __('Team Section','one-page'))); ?></h2>
                    <hr class="team_sep">
                    <p class="main_desc"><?php echo esc_attr(onepage_get_option('onepage_team_sub_heading', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','one-page'))); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="team_wrapper">
                    <div class="col-md-3 col-sm-6">
                        <div class="team_item animated bounce" style="animation-delay: .3s">
                            <div class="team_image">
                                <img src='<?php echo esc_url(onepage_get_option('onepage_member1_image_link', ONEPAGE_DIR_URI . "assets/images/Team-1.jpg")); ?>' />
                                <div class="team_caption">
                                    <p><?php echo wp_kses_post(onepage_get_option('onepage_member1_caption_text', __('Duis sed odio sit amet nibh vulputate cursus a kind of changes without touching any code','one-page'))); ?></p>
                                </div>
                            </div>
                            <h4><?php echo esc_attr(onepage_get_option('onepage_member1_name', __('Team Member A','one-page'))); ?></h4>
                            <span <?php echo "style='color:" . onepage_get_option('onepage_team_member_designation_text_color', '#235e11') . "'"; ?>><?php echo esc_attr(onepage_get_option('onepage_member1_designation', __('Creative Director','one-page'))); ?></span>
                            <ul class="team_social" <?php echo "style='background-color:" . onepage_get_option('onepage_team_social_icons_bg_color', '#2bb6b6') . "'"; ?>>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member1_fb_link', '#')); ?>"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member1_g_plus_link', '#')); ?>"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member1_tw_link', '#')); ?>"><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member1_ln_link', '#')); ?>"><i class="fa fa-fw fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team_item animated bounce" style="animation-delay: .6s">
                            <div class="team_image">
                                <img src='<?php echo esc_url(onepage_get_option('onepage_member2_image_link', ONEPAGE_DIR_URI . "assets/images/Team-2.jpg")); ?>' />
                                <div class="team_caption">
                                    <p><?php echo wp_kses_post(onepage_get_option('onepage_member2_caption_text', __('Duis sed odio sit amet nibh vulputate cursus a kind of changes without touching any code','one-page'))); ?></p>
                                </div>
                            </div>
                            <h4><?php echo esc_attr(onepage_get_option('onepage_member2_name', __('Team Member B','one-page'))); ?></h4>
                            <span <?php echo "style='color:" . onepage_get_option('onepage_team_member_designation_text_color', '#235e11') . "'"; ?>><?php echo esc_attr(onepage_get_option('onepage_member2_designation', __('Creative Director','one-page'))); ?></span>
                            <ul class="team_social" <?php echo "style='background-color:" . onepage_get_option('onepage_team_social_icons_bg_color', '#2bb6b6') . "'"; ?>>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member2_fb_link', '#')); ?>"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member2_g_plus_link', '#')); ?>"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member2_tw_link', '#')); ?>"><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member2_ln_link', '#')); ?>"><i class="fa fa-fw fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team_item animated bounce" style="animation-delay: .9s">
                            <div class="team_image">
                                <img src='<?php echo esc_url(onepage_get_option('onepage_member3_image_link', ONEPAGE_DIR_URI . "assets/images/Team-3.jpg")); ?>' />
                                <div class="team_caption">
                                    <p><?php echo wp_kses_post(onepage_get_option('onepage_member3_caption_text', __('Duis sed odio sit amet nibh vulputate cursus a kind of changes without touching any code','one-page'))); ?></p>
                                </div>
                            </div>
                            <h4><?php echo esc_attr(onepage_get_option('onepage_member3_name', __('Team Member C','one-page'))); ?></h4>
                            <span <?php echo "style='color:" . onepage_get_option('onepage_team_member_designation_text_color', '#235e11') . "'"; ?>><?php echo esc_attr(onepage_get_option('onepage_member3_designation', __('Creative Director','one-page'))); ?></span>
                            <ul class="team_social" <?php echo "style='background-color:" . onepage_get_option('onepage_team_social_icons_bg_color', '#2bb6b6') . "'"; ?>>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member3_fb_link', '#')); ?>"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member3_g_plus_link', '#')); ?>"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member3_tw_link', '#')); ?>"><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member3_ln_link', '#')); ?>"><i class="fa fa-fw fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team_item animated bounce" style="animation-delay: 1.2s">
                            <div class="team_image">
                                <img src='<?php echo esc_url(onepage_get_option('onepage_member4_image_link', ONEPAGE_DIR_URI . "assets/images/Team-4.jpg")); ?>' />
                                <div class="team_caption">
                                    <p><?php echo wp_kses_post(onepage_get_option('onepage_member4_caption_text', __('Duis sed odio sit amet nibh vulputate cursus a kind of changes without touching any code','one-page'))); ?></p>
                                </div>
                            </div>
                            <h4><?php echo esc_attr(onepage_get_option('onepage_member4_name', __('Team Member D','one-page'))); ?></h4>
                            <span <?php echo "style='color:" . onepage_get_option('onepage_team_member_designation_text_color', '#235e11') . "'"; ?>><?php echo esc_attr(onepage_get_option('onepage_member4_designation', __('Creative Director','one-page'))); ?></span>
                            <ul class="team_social" <?php echo "style='background-color:" . onepage_get_option('onepage_team_social_icons_bg_color', '#2bb6b6') . "'"; ?>>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member4_fb_link', '#')); ?>"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member4_g_plus_link', '#')); ?>"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member4_tw_link', '#')); ?>"><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(onepage_get_option('onepage_member4_ln_link', '#')); ?>"><i class="fa fa-fw fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Team Information section-->
