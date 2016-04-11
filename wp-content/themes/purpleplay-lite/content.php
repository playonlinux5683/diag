<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since PurplePlay Lite 1.0.0
 */
?>
<?php if(has_post_thumbnail()) { ?>
	<div class="post-image clearfix">
		<?php the_post_thumbnail('full'); ?>
	</div>
<?php } ?>
<div class="entry-meta">
	<span class="author-name"> <?php _e('Posted by ','purpleplay-lite'); the_author_posts_link(); ?> </span><?php _e('|', 'purpleplay-lite')?>
	<span class="date-time"><span class="skt-dt"><?php the_time('l, j F, Y') ?></span> </span> <?php _e('|', 'purpleplay-lite')?>	
	<span class="comment"> <?php comments_popup_link(__('No Comments','purpleplay-lite'), __('1 Comment','purpleplay-lite'), __('% Comments ','purpleplay-lite')) ; ?> </span>
</div> 
<div class="entry clearfix">
	<?php the_excerpt(); ?>
	<div class="readmore"><a href="<?php echo get_permalink($post->ID); ?>"><?php _e('Read More &rarr;','purpleplay-lite'); ?></a></div>
</div>