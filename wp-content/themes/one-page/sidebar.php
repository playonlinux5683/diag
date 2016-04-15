<div class="sidebar">
	<?php if ( !dynamic_sidebar( 'primary-widget-area' ) ) : ?>
		<div class="widget_area">
			<span class="widget_title"><?php _e( 'Search:', 'one-page' ); ?></span>
			<?php get_search_form(); ?>
		</div>
		<div class="widget_area">
			<span class="widget_title"> <?php _e( 'Categories', 'one-page' ); ?></span>
			<ul>
				<?php wp_list_categories( 'title_li' ); ?>
			</ul>
		</div>
		<div class="widget_area">
			<span class="widget_title"> <?php _e( 'Archives', 'one-page' ); ?></span>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</div>
	<?php endif; // end primary widget area ?>
</div>