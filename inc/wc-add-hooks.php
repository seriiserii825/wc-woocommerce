<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function woocommerce_template_loop_product_thumbnail() {
	echo woocommerce_get_product_thumbnail(); // WPCS: XSS ok.
	echo '</a>';
	echo '<div class="mask"><a href="'.get_the_permalink().'">Quick View</a></div>';
}
function woocommerce_template_loop_product_title() {
	echo '<a class="product_name" href="'.get_the_permalink().'">'.get_the_title().'</a>';
}
