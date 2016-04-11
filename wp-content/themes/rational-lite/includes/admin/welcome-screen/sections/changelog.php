<?php
/**
 * Changelog
 */

$rational_lite = wp_get_theme( 'rational-lite' );

?>
<div class="rational-lite-tab-pane" id="changelog">

	<div class="rational-tab-pane-center">
	
		<h1>Rational Lite <?php if( !empty($rational_lite['Version']) ): ?> <sup id="rational-lite-theme-version"><?php echo esc_attr( $rational_lite['Version'] ); ?> </sup><?php endif; ?></h1>

	</div>

	<?php
	WP_Filesystem();
	global $wp_filesystem;
	$rational_lite_changelog = $wp_filesystem->get_contents( get_template_directory().'/changelog.txt' );
	$rational_lite_changelog_lines = explode(PHP_EOL, $rational_lite_changelog);
	foreach($rational_lite_changelog_lines as $rational_lite_changelog_line){
		if(substr( $rational_lite_changelog_line, 0, 3 ) === "###"){
			echo '<hr /><h1>'.substr($rational_lite_changelog_line,3).'</h1>';
		} else {
			echo $rational_lite_changelog_line,'<br/>';
		}
	}

	?>
	
</div>