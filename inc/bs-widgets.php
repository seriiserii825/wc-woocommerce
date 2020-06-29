<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function wc_woocommerce_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Language', 'wc-woocommerce' ),
		'id'            => 'sidebar-language',
		'description'   => esc_html__( 'Add widgets here.', 'wc-woocommerce' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'wc_woocommerce_widgets_init' );
