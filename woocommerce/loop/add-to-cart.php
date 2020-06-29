<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.3.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $product;
global $woocommerce;
$currency = get_woocommerce_currency_symbol();
$price_regular =  $product->get_regular_price();
$price_sale =  $product->get_sale_price();
$price =  $product->get_price();

if($price_regular){
	$price_html = $price_regular.$currency. ' - <span class="line-through">'. $price.$currency.'</span>';
}else{
	$price_html = $price.$currency;
}

if($price_html){
	echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
		sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
			esc_url( $product->add_to_cart_url() ), esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
			esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
			isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
			$price_html ), $product, $args );
}
