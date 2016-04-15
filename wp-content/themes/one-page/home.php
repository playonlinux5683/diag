<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header();
?>
<!--Including sliders section -->
<?php echo get_template_part( 'templates/homepage', 'sliders' ); ?>
<!--/Including sliders section -->
<?php
onepage_section_show();
?>
<?php
get_footer();

