<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
function woocommerce_template_loop_product_thumbnail() {
	if ( ! is_shop() ) { ?>
        <div class="simpleCart_shelfItem">
        <div class="view view-first">
        <div class="inner_content clearfix">
        <div class="product_image">
		<?php echo get_the_post_thumbnail( get_the_ID(), 'woocommerce_thumbnail', [ 'class' => 'img-responsive' ] ) ?>

        <div class="mask">
            <div class="info">Quick View</div>
        </div>
	<?php } else {
		echo woocommerce_get_product_thumbnail(); // WPCS: XSS ok.
		echo '</a>';
		echo '<div class="mask"><a href="' . get_the_permalink() . '">Quick View</a></div>';
	}
}
function woocommerce_template_loop_product_title() {
	if ( is_shop() ):
		echo '<a class="product_name" href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
		?>
	<?php else: ?>
        <div class="product_container">
        <div class="cart-left">
            <p class="title"><?php echo get_the_title(); ?></p>
        </div>
	<?php
	endif;
}
if ( ! is_shop() ) {
	remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
	add_action( 'woocommerce_before_shop_loop_item', 'category_woocommerce_template_loop_product_link_open', 10 );
	add_action( 'woocommerce_after_shop_loop_item', 'category_woocommerce_template_loop_product_link_close', 5 );
	function category_woocommerce_template_loop_product_link_open() {
		echo '';
	}
	function category_woocommerce_template_loop_product_link_close() {
		echo '';
	}
}
add_filter( 'woocommerce_breadcrumb_defaults', 'changeBreadcrumb' );
function changeBreadcrumb() {
	return array(
		'delimiter'   => '&nbsp; > &nbsp;',
		'wrap_before' => '<div class="new-product-top"><ul class="product-top-list">',
		'wrap_after'  => '</ul>',
		'before'      => '<li>',
		'after'       => '</li>',
		'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
	);
}
