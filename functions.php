<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
require_once __DIR__ . '/inc/bs-setup.php';
require_once __DIR__ . '/inc/bs-widgets.php';
require_once __DIR__ . '/inc/bs-styles.php';
require_once __DIR__ . '/inc/wc-add-hooks.php';
require_once __DIR__ . '/inc/func.php';
require_once __DIR__ . '/inc/acf.php';
///**
// * Implement the Custom Header feature.
// */
//require get_template_directory() . '/inc/custom-header.php';
//
///**
// * Custom template tags for this theme.
// */
//require get_template_directory() . '/inc/template-tags.php';
//
///**
// * Functions which enhance the theme by hooking into WordPress.
// */
//require get_template_directory() . '/inc/template-functions.php';
//
///**
// * Customizer additions.
// */
//require get_template_directory() . '/inc/customizer.php';
//
///**
// * Load Jetpack compatibility file.
// */
//if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
//}
function wc_woocommerce_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wc_woocommerce_content_width', 640 );
}
add_action( 'after_setup_theme', 'wc_woocommerce_content_width', 0 );
if ( class_exists( 'WooCommerce' ) ) {
	require __DIR__ . '/inc/woocommerce.php';
}
add_filter( 'woocommerce_get_image_size_thumbnail', function ( $size ) {
	return array(
		'width'  => 350,
		'height' => 350,
		'crop'   => 1,
	);
} );
