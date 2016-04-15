<!--hexagonal gallery section-->
<?php
// WP_Query arguments
$args = array(
	'post_type' => array( 'post' ),
	'post_status' => array( 'publish' ),
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'post_tag',
			'field' => 'term_id',
			'terms' => array( onepage_get_option( 'onepage_portfolio_tag' ) ),
		)
	),
	'posts_per_page' => '1000',
);
// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	?>
	<section id="gallery" class="section_4">
		<div class="gallery_div">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="main_head animated fade_in_up"><?php echo esc_attr( onepage_get_option( 'onepage_portfolio_main_heading', __( 'Our Portfolio Section', 'one-page' ) ) ); ?></h2>
						<hr class="gallery_sep animated fade_in_up">
						<p class="main_desc animated fade_in_up"><?php echo esc_attr( onepage_get_option( 'onepage_portfolio_sub_heading', __( 'This is Photoshop\'s version of Lorem Ipsum. Proin gravida', 'one-page' ) ) ); ?></p>
					</div>
				</div>
				<div class="row">
					<div class="gallery_wrapper">
						<ol id="filters">
							<li id="all" class="active">All</li>
							<?php
							$cat_list = array();
							while ( $query->have_posts() ) {
								$query->the_post();
								$cats = get_the_category( $post->ID );
								if ( !empty( $cats ) ) {
									foreach ( $cats as $cat ) {
										$cat_list[$cat->slug] = $cat->name;
									}
								}
							}
							foreach ( $cat_list as $slug => $name ) {
								?>
								<li id="<?php echo $slug; ?>"><?php echo $name; ?></li>
								<?php
							}
							?>
						</ol>
					</div>
				</div>
				<ul id="hexGrid" class="main">
					<?php
					while ( $query->have_posts() ) {
						$query->the_post();
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
						$gterm = get_the_category( $post->ID );
						if ( $gterm != null ) {
							$gtag = '';
							foreach ( $gterm as $term ) {
								// Print the name method from $term which is an OBJECT
								$gtag .= $term->slug . ' ';
								// Get rid of the other data stored in the object, since it's not needed
							}
						}
						if ( has_post_thumbnail() ) {
							?>
							<li class="hex <?php echo $gtag; ?> all">
								<a class="hexIn" href="<?php the_permalink() ?>">
									<?php
									onepage_image_resize( $feat_image, 219, 253 );
									?>
									<h1><?php the_title(); ?></h1>
									<div class="hexGal-content"><?php echo substr( get_the_excerpt(), 0, 30 ) . '[...]'; ?></div>
								</a>
							</li>
							<?php
						} else {
							$content_img = onepage_catch_that_image();
							if ( !empty( $content_img ) ) {
								?>
								<li class="hex <?php echo $gtag; ?> all">
									<a class="hexIn" href="<?php the_permalink() ?>">
										<?php
										echo '<img src="' . esc_url( onepage_catch_that_image() ) . '" alt="" />';
										?>
										<h1><?php the_title(); ?></h1>
										<div class="hexGal-content"><?php echo substr( get_the_excerpt(), 0, 30 ) . '[...]'; ?></div>
									</a>
								</li>
								<?php
							}
						}
					}
// Restore original Post Data
					wp_reset_postdata();
					?>
				</ul>
				<ul class="partial_gallery_list" style=""></ul>
			</div>
		</div>
	</section>
<?php } ?>
<!--/hexagonal gallery section-->
