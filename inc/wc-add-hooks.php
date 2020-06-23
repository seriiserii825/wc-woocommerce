<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function woocommerce_template_loop_product_thumbnail() {
	echo '<div class="product__img">';
	echo get_the_post_thumbnail(get_the_ID(), 'full'); // WPCS: XSS ok.
	echo '</div>';
}
