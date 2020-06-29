<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
if ( ! function_exists( 'wc_woocommerce_setup' ) ) :
	function wc_woocommerce_setup() {
		load_theme_textdomain( 'wc-woocommerce', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-top' => esc_html__( 'Primary', 'wc-woocommerce' ),
			'menu-sidebar' => esc_html__( 'Sidebar menu', 'wc-woocommerce' ),
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		) );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wc_woocommerce_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wc_woocommerce_setup' );
