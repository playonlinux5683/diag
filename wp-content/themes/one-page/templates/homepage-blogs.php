<!--blog & news section-->
<section id="blog" class="section_3">
    <div class="blog_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="main_head animated fade_in_up"><?php echo onepage_get_option('onepage_blog_main_heading', __('Blog & News Section', 'one-page')); ?></h2>
                    <hr class="blog_sep animated fade_in_up">
                    <p class="main_desc animated fade_in_up"><?php echo onepage_get_option('onepage_blog_sub_heading', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'one-page')); ?></p>
                </div>
            </div>
            <div class="row homepage_blogs" data-masonry>
                <?php
                $i = 1;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $no_of_post = onepage_get_option('onepage_blog_post_number', '3');
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $no_of_post,
                    'ignore_sticky_posts' => true,
                    'paged' => $paged,
                    'tag__not_in'=>  onepage_get_option( 'onepage_portfolio_tag' ) 
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                        ?>
                        <div class="col-md-4 post_item_wrapper" >
                            <div class="post animated zoom_in homepage_post" style="animation-delay: <?php (.4 * $i) ?>s">
                                <?php if (has_post_thumbnail()) { ?>
                                    <div class="post_image">
                                        <?php onepage_get_thumbnail(300, 240); ?>
                                    </div>
                                    <?php
                                }
                                ?>

                                <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'one-page'), get_the_title()); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo substr(get_the_excerpt(), 0, 200) . '[...]'; ?></p>
                                <a class="read_more" href="<?php the_permalink() ?>"><?php echo onepage_get_option('onepage_blog_read_more_text', __('Read More', 'one-page')); ?></a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    $i++;
                else:
                    ?>
                    <div class="blogs_page_container post">
                        <p>
                            <?php _e('Sorry, no posts matched your criteria.', 'one-page'); ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
</section>
<!--/blog & news section-->
