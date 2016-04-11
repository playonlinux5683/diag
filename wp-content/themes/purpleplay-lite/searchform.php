<?php
/**
 * The template for displaying custom search form.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since PurplePlay Lite 1.0.0
 */
?>
<!-- #search -->
<div class="search-box">
	<form method="get" class="searchform" id="searchform" action="<?php echo esc_url( home_url('/') ); ?>" role="search">
		<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'purpleplay-lite' ); ?>" />
		<div class="search-icon">
			<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'purpleplay-lite' ); ?>" />
		</div>
	</form>
</div>
<!-- #search -->