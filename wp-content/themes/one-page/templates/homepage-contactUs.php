<?php
$nameError = '';
$emailError = '';
$msgError = '';
$headers = '';
if (isset($_POST['submitted'])) {
    if (trim($_POST['contactName']) === '') {
        $nameError = __('Please enter your name.', 'one-page');
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }
    if (trim($_POST['email']) === '') {
        $emailError = __('Please enter your email address.', 'one-page');
        $hasError = true;
    } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailError = __('You entered an invalid email address.', 'one-page');
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
    if (trim($_POST['msg']) === '') {
        $msgError = __('Please enter a message.', 'one-page');
        $hasError = true;
    } else {
        if (function_exists('stripslashes')) {
            $msg = stripslashes(trim($_POST['msg']));
        } else {
            $msg = trim($_POST['msg']);
        }
    }
    if (!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '')) {
            $emailTo = get_option('admin_email');
        }
        $subject = '[PHP Snippets] From ' . $name;
        $body = __('Name:', 'one-page') . $name . "<br/>" . __('Email:', 'one-page') . $email . "<br/>" . __('Message:', 'one-page') . $msg;
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $headers .= __('From:', 'one-page') . $name . ' <' . $emailTo . '>' . "\r\n" . __('Reply-To:', 'one-page') . $email;
        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
}
?>

<!-- contact Section -->
<section id="contact" class="section_9">
    <div class="contact_div" <?php echo "style='background-color:" . onepage_get_option('onepage_contact_bg_color', '#9792d4') . "'"; ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="main_head animated fade_in_up"><?php echo esc_attr(onepage_get_option('onepage_contact_main_heading', __('Contact Section', 'one-page'))); ?></h2>
                    <hr class="team_sep animated fade_in_up" <?php echo "style='background-color:" . onepage_get_option('onepage_contact_hr_color', '#beb9f0') . "'"; ?>>
                    <p class="main_desc animated fade_in_up"><?php echo esc_attr(onepage_get_option('onepage_contact_sub_heading', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'one-page'))); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="contact_wrapper">
                    <div class="col-md-5">
                        <div class="contact_content">
                            <?php
                            if (isset($emailSent) && $emailSent == true) {
                                ?>
                                <div class="thanks">
                                    <p><?php _e('Thanks, your email was sent successfully.', 'one-page'); ?></p>
                                </div>
                                <?php
                            } else {
                                if (isset($hasError)) {
                                    ?>
                                    <p class="error"><?php _e('Sorry, an error occured.', 'one-page'); ?> </p>
                                    <?php
                                }
                            }
                            ?>
                            <form class="contactform" action="#" method="post">
                                <div class="form-group">
                                    <input class="form-control text animated fade_in_up" type="text" name="contactName" value="" placeholder="<?php echo _e('Name', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . onepage_get_option('onepage_contact_input_box_border_color', '#6b8cca'); ?>" required/>
                                    <?php if ($nameError != '') { ?>
                                        <span class="error"> <?php echo $nameError; ?> </span>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <input class="form-control text animated fade_in_up" type="email" name="email" value="" placeholder="<?php echo _e('Email', 'one-page'); ?>" style="animation-delay: .3s; <?php echo 'border-color:' . onepage_get_option('onepage_contact_input_box_border_color', '#6b8cca'); ?>" required/>
                                    <?php if ($emailError != '') { ?>
                                        <span class="error"> <?php echo $emailError; ?> </span>
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control message animated fade_in_up" type="textarea" name="msg" placeholder="<?php echo _e('Your Message', 'one-page'); ?>" style="animation-delay: .4s;<?php echo 'border-color:' . onepage_get_option('onepage_contact_input_box_border_color', '#6b8cca'); ?>" required></textarea>
                                    <?php if ($msgError != '') { ?>
                                        <span class="error"> <?php echo $msgError; ?> </span>
                                    <?php } ?>
                                </div>
                                <div class="clear"></div>
                                <input  class="btnSubmit animated fade_in_up" type="submit" name="submitted" value="<?php echo esc_attr(onepage_get_option('onepage_contact_send_button_text', __('SEND MESSAGE', 'one-page'))); ?>" style="animation-delay: .2s;"/>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div style="width: 100%; overflow:hidden; animation-delay: .6s;" class="contact_map animated fade_right"> <?php echo onepage_get_option('onepage_contact_map_iframe', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14667.209208772476!2d77.43003554999999!3d23.21387435!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x5bcb829200a9052d!2s10+no.+Market!5e0!3m2!1sen!2sin!4v1455254567580" width="100%" height="320" frameborder="0" style="border:0"></iframe>'); ?><br /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /contact Section -->
