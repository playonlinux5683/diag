<?php
/* * The Sidebar containing the primary widget areas for woocommerce. */?>		
<!-- #primary .widget-area -->	
<div id="primary" class="widget widget-area" role="complementary">		
	<ul class="xoxo">					
		<?php if ( ! dynamic_sidebar( 'skt-woocommerce-widget-area' ) ) : ?>	
		<li id="archives" class="widget-container">	
			<h3 class="widget-title"><?php _e( 'Archives','purpleplay-lite'); ?></h3>
			<ul><?php wp_get_archives( 'type=monthly' ); ?></ul>
		</li><?php endif; // end primary widget area ?>				
	</ul>	
</div>	
<!-- #primary .widget-area -->