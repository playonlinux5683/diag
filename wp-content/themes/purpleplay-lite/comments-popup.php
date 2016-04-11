<?php
// this line is WordPress' motor, do not delete it.$commenter = wp_get_current_commenter();extract($commenter);$comments = get_approved_comments($id);$post = get_post($id);if (!empty($post->post_password) && $_COOKIE['wp-postpass_'. COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie	echo(get_the_password_form());} else { ?>
<?php if ($comments) { ?><ol id="commentlist">
  <?php foreach ($comments as $comment) { ?>
  <li id="comment-<?php comment_ID() ?>">
    <?php comment_text() ?>
    <p><cite>
      <?php comment_type('Comment', 'Trackback', 'Pingback'); ?>
      <?php _e('by','purpleplay-lite'); ?>
      <?php comment_author_link() ?>
      &#8212;
      <?php comment_date() ?>
      @ <a href="#comment-<?php comment_ID() ?>">
      <?php comment_time() ?>
      </a></cite></p>
  </li>
  <?php } // end for each comment ?>
</ol>
<?php } else { // this is displayed if there are no comments so far ?>
<p><?php _e('No comments yet.','purpleplay-lite'); ?></p>
<?php } ?>
<?php if ('open' == $post->comment_status) { ?>
<h2><?php _e('Leave a comment','purpleplay-lite'); ?></h2>
<p><?php _e('Line and paragraph breaks automatic, e-mail address never displayed, <acronym title="Hypertext Markup Language">HTML</acronym> allowed: ','purpleplay-lite');?><code><?php echo allowed_tags(); ?></code></p>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
  <?php if ( $user_ID ) : ?>
  <p><?php _e('Logged in as ','purpleplay-lite'); ?><a href="<?php echo esc_url( get_option('siteurl') ); ?>wp-admin/profile.php"><?php echo esc_attr($user_identity); ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account', 'purpleplay-lite'); ?>"><?php _e('Log out ','purpleplay-lite'); ?></a></p>
  <?php else : ?>
  <p> <span class="left-label">
    <label for="author"><?php _e('Name','purpleplay-lite'); ?></label>
    </span> <span class="right-input">
    <input type="text" name="author" id="author" class="textarea" value="<?php echo esc_attr($comment_author); ?>" size="28" tabindex="1" />
    </span>
    <input type="hidden" name="comment_post_ID" value="<?php echo esc_attr($id); ?>" />
    <input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER["REQUEST_URI"]); ?>" />
    <span class="clear"></span> </p>
  <p> <span class="left-label">
    <label for="email"><?php _e('E-mail','purpleplay-lite'); ?></label>
    </span> <span class="right-input">
    <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="28" tabindex="2" />
    </span> <span class="clear"></span> </p>
  <p> <span class="left-label">
    <label for="url"><abbr title="Universal Resource Locator"><?php _e('URL','purpleplay-lite'); ?></abbr></label>
    </span> <span class="right-input">
    <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="28" tabindex="3" />
    </span> <span class="clear"></span> </p>
  <?php endif; ?>
  <p> <span class="left-label">
    <label for="comment"><?php _e('Your Comment','purpleplay-lite'); ?></label>
    </span> <span class="right-input">
    <textarea name="comment" id="comment" cols="33" rows="4" tabindex="4"></textarea>
    </span> <span class="clear"></span> </p>
  <p> <span class="input">
    <input name="submit" type="submit" tabindex="5" value="<?php esc_attr_e('Say It!','purpleplay-lite') ?>" />
    </span> <span class="clear"></span> </p>
  <?php do_action('comment_form', $post->ID); ?>
</form>
<?php } else { // comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.','purpleplay-lite'); ?></p>
<?php }
} // end password check?>
<div><strong><a href="javascript:window.close()"><?php _e('Close this window.','purpleplay-lite'); ?></a></strong></div>
<?php // if you delete this the sky will fall on your headendwhile;?>