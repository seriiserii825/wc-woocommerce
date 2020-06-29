<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function wc_woocommerce_scripts() {
	wp_enqueue_style( 'wc-woocommerce-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wc-woocommerce-style', 'rtl', 'replace' );

	wp_enqueue_style('wc-woocommerce-bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css');
	wp_enqueue_style( 'wc-woocommerce-style-css', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'wc-woocommerce-flexslider-css', get_template_directory_uri() . '/assets/css/flexslider.css' );

	wp_enqueue_script('wc-woocommerce-bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap-3.1.1.min.js', ['jquery'], null, true);
	wp_enqueue_script( 'wc-woocommerce-simplecart-js', get_template_directory_uri() . '/assets/js/simpleCart.min.js', [ 'jquery' ], null, true );
	wp_enqueue_script( 'wc-woocommerce-responsinveslides-js', get_template_directory_uri() . '/assets/js/responsiveslides.min.js', [ 'jquery' ], null, true );
	wp_enqueue_script( 'wc-woocommerce-flexisel-js', get_template_directory_uri() . '/assets/js/jquery.flexisel.js', [ 'jquery' ], null, true );
	wp_enqueue_script( 'wc-woocommerce-main-js', get_template_directory_uri() . '/assets/js/main.js', [ 'jquery' ], null, true );
	wp_deregister_script( 'wc-add-to-cart' );
	wp_enqueue_script( 'wc-add-to-cart', get_template_directory_uri() . '/woocommerce/js/add-to-cart.js', array(
		'jquery',
		'woocommerce',
		'wc-country-select',
		'wc-address-i18n'
	), null, true );
	wp_enqueue_script( 'wc-woocommerce-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wc_woocommerce_scripts' );
