<?php
if ( post_password_required() ) {
	?>
	<p class = "nocomments"><?php _e( 'This post is password protected. Enter the password to view comments.', 'one-page' ); ?></p>
	<?php
	return;
}
?>
<!-- You can start editing here. -->
<div id="commentsbox">
	<?php if ( have_comments() ) : ?>
		<h3 id="comments">
			<?php
			comments_number( __( 'No Responses', 'one-page' ), __( 'One Response', 'one-page' ), __( '% Responses', 'one-page' ) );
			_e( 'so far.', 'one-page' );
			?></h3>
		<ol class="commentlist">
			<?php wp_list_comments( array( 'avatar_size' => 70 ) ); ?>
		</ol>
		<div class="comment-nav">
			<div class="alignleft">
				<?php previous_comments_link() ?>
			</div>
			<div class="alignright">
				<?php next_comments_link() ?>
			</div>
		</div>
		<?php
	endif;
	if ( comments_open() ) :
		?>
		<div class="commentform_wrapper">
			<div id="comment-form">
				<div class="clearfix"></div>
				<?php
				comment_form( array( 'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun', 'one-page' ) . ' <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>' ) );
				?>
			</div>
		</div>
	<?php endif; // if you delete this the sky will fall on your head          ?>
</div>
