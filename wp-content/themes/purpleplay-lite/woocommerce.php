<?php get_header(); ?>
<!-- #Container Area -->
<div id="container" class="clearfix">
	<div class="breadcrumb-wrap">
		<div class="breadcrumb-overlay">
			<div class="container">
				<div class="row-fluid">
					<div class="page-title span6">
						<?php if(class_exists( 'Woocommerce' ) && is_woocommerce() ) { woocommerce_page_title(); } ?>
					</div>
					<div class="skt-breadcrumb span6">
							<?php
							if ((function_exists('woocommerce_breadcrumb'))) {
								$args = array(
								        'delimiter'  => ' / ',
								        'wrap_before'  => '<section class="cont_nav"><div class="cont_nav_inner"><p>',
								        'wrap_after' => '</p></div></section>',
								        'before'   => '&nbsp;',
								        'after'   => '&nbsp;'
								    );
								woocommerce_breadcrumb($args);
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="wrapper">
		<div class="container clearfix">
		  	<div class="row-fluid">
				<!-- Content -->
				<div id="content" class="span9  shop-template">
					<div class="entry">
								<?php woocommerce_content(); ?>
					</div>
				</div>
				
				<!-- Sider-bar -->
				<div id="sider-bar" class="span3"> 
					<?php get_sidebar('woocommerce'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- #Container Area -->
<?php get_footer(); ?>