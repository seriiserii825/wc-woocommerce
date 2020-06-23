<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function wc_woocommerce_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wc-woocommerce' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wc-woocommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wc_woocommerce_widgets_init' );
