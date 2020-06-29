<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $product;
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li>
	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
	<?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
	<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
	<?php remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 ); ?>
	<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
</li>

<!--	--><?php
//	/**
//	 * woocommerce_before_subcategory hook.
//	 *
//	 * @hooked woocommerce_template_loop_category_link_open - 10
//	 */
//	do_action( 'woocommerce_before_subcategory', $category );
//	/**
//	 * woocommerce_before_subcategory_title hook.
//	 *
//	 * @hooked woocommerce_subcategory_thumbnail - 10
//	 */
//	do_action( 'woocommerce_before_subcategory_title', $category );
//	/**
//	 * woocommerce_shop_loop_subcategory_title hook.
//	 *
//	 * @hooked woocommerce_template_loop_category_title - 10
//	 */
//	do_action( 'woocommerce_shop_loop_subcategory_title', $category );
//	/**
//	 * woocommerce_after_subcategory_title hook.
//	 */
//	do_action( 'woocommerce_after_subcategory_title', $category );
//	/**
//	 * woocommerce_after_subcategory hook.
//	 *
//	 * @hooked woocommerce_template_loop_category_link_close - 10
//	 */
//	do_action( 'woocommerce_after_subcategory', $category );
//	?>
</li>
