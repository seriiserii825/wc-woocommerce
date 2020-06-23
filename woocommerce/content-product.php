<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
global $product;
?>

<!--<div class="col-md-4 product simpleCart_shelfItem text-center">-->
<!--    <a href="--><?php //the_permalink(); ?><!--">-->
<!--        <div class="product__img">-->
<!--            <img src="--><?php //echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?><!--" alt=""/>-->
<!--        </div>-->
<!--    </a>-->
<!--    <div class="mask">-->
<!--        <a href="--><?php //the_permalink(); ?><!--">Quick View</a>-->
<!--    </div>-->
<!--    <a class="product_name" href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a>-->
<!--    <p>-->
<!--        <a class="item_add" href="#">-->
<!--            <i></i>-->
<!--            <span class="item_price">$329</span>-->
<!--        </a>-->
<!--    </p>-->
<!--</div>-->

<div class="col-md-4 product simpleCart_shelfItem text-center">
    <?php do_action('woocommerce_before_shop_loop_item'); ?>
    <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
    <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
</div>
