<?php get_header(); ?>
<!-- #Container Area -->
<div id="container" class="clearfix">
		
	<div class="breadcrumb-wrap">
		<div class="breadcrumb-overlay">
			<div class="container">
				<div class="row-fluid">
					<div class="page-title span6">
						<?php _e('Error 404 - Not Found','purpleplay-lite'); ?>
					</div>
					<div class="skt-breadcrumb span6">
						<?php if ((class_exists('purpleplay_lite_breadcrumb_class'))) {$skt_breadcumb->custom_breadcrumb();} ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="wrapper">
		<div class="container clearfix">
		  	<div class="row-fluid">
				<!-- Content -->
				<div id="content" class="span9 ">
		            <div class="error-search">
						<?php get_search_form(); ?> 
					</div>
					<div class="clear"></div>
					<span class="not-found-txt"><?php _e('Page Not Found.', 'purpleplay-lite' ); ?></span>
					<p><?php _e( 'Apologies, but the page you requested could not be found.', 'purpleplay-lite' ); ?></p>
				</div>

				<!-- Sider-bar -->
				<div id="sider-bar" class="span3"> 
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- #Container Area -->
<?php get_footer(); ?>