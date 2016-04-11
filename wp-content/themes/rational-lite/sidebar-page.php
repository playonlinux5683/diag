<?php
/**
 * The sidebar containing the secondary widget area, displays on pages.
 * If no active widgets in this sidebar, it will be hidden completely.
 */	
?>

<div id="sidebar_2" class="ske_widget">
	<ul class="skeside">
		<?php dynamic_sidebar( 'page-sidebar' ); ?>
	</ul>
</div>
<!-- #sidebar_2 .ske_widget -->