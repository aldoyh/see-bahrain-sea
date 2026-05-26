<?php
add_action( 'admin_menu', 'bondigi_ocean_getting_started' );
function bondigi_ocean_getting_started() {
	add_theme_page( esc_html__('Bondigi Ocean Theme', 'bondigi-ocean'), esc_html__('Bondigi Ocean Theme', 'bondigi-ocean'), 'edit_theme_options', 'bondigi-ocean-guide-page', 'bondigi_ocean_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function bondigi_ocean_admin_theme_style() {
	wp_enqueue_style('bondigi-ocean-admin-style', get_template_directory_uri() . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'bondigi_ocean_admin_theme_style');

// Guidline for about theme
function bondigi_ocean_test_guide() { 
	// Custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'bondigi-ocean' );
?>
<div class="wrapper-info">
	<div class="intro">
		<div class="col-left">
			<h1 class="theme-title"><?php esc_html_e( 'Bondigi Ocean WordPress Theme', 'bondigi-ocean' ); ?></h1>
			<p><?php esc_html_e('Version: ','bondigi-ocean'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-right text-align-end">
			<a class="bg-color bg-color" href="<?php echo esc_url( MINTRARO_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to PRO', 'bondigi-ocean'); ?></a>
		</div>
	</div>
	<div class="col-left">
		<div class="started">
			<hr>
			<div class="centerbold">
				<h4><?php esc_html_e('Unlock Premium Features', 'bondigi-ocean'); ?></h4>
				<p><?php esc_html_e('Unlock the full potential of your website with our Pro theme upgrade.', 'bondigi-ocean'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( MINTRARO_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade Now', 'bondigi-ocean'); ?></a>
				<hr>
				<h4><?php esc_html_e('Preview Demo', 'bondigi-ocean'); ?></h4>
				<p><?php esc_html_e('See our theme in action! Take a tour of our demo site to experience firsthand the stunning design and powerful features our theme has to offer.', 'bondigi-ocean'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( MINTRARO_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Theme Demo', 'bondigi-ocean'); ?></a>
				<hr>
				<h4><?php esc_html_e('Need Help?', 'bondigi-ocean'); ?></h4>
				<p><?php esc_html_e('Visit our support forum for assistance with any questions or feedback you may have regarding the theme.', 'bondigi-ocean'); ?></p>
				<a href="<?php echo esc_url( MINTRARO_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'bondigi-ocean'); ?></a>
				<hr>
				<h4><?php esc_html_e('Are you enjoying our theme?', 'bondigi-ocean'); ?></h4>
				<p><?php esc_html_e('We\'d love to hear your thoughts! Leave us a review and share your feedback.', 'bondigi-ocean'); ?></p>
				<a href="<?php echo esc_url( MINTRARO_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'bondigi-ocean'); ?></a>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-inner"> 
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
	</div>
</div>
<?php } ?>
