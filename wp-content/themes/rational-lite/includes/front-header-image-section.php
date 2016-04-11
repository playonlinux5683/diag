<?php if( get_header_image() ) { ?>
<div class="skt-header-image">
	<!-- header image -->
	<div class="rational-image-post">
		<img alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="ad-slider-image"  src="<?php header_image(); ?>" />
	</div>
</div>
<?php } ?>