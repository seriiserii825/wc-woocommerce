<?php get_header(); ?>
<!-- header-section-ends -->
<div class="banner-top">
    <div class="container">
		<?php require_once __DIR__ . '/../inc/navigation.php'; ?>
    </div>
</div>
<div class="banner">
    <div class="container">
        <div class="banner-bottom">
            <div class="banner-bottom-left">
                <h2>B<br>U<br>Y</h2>
            </div>
            <div class="banner-bottom-right">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider4">
                        <li>
                            <div class="banner-info">
                                <h3>Smart But Casual</h3>
                                <p>Start your shopping here...</p>
                            </div>
                        </li>
                        <li>
                            <div class="banner-info">
                                <h3>Shop Online</h3>
                                <p>Start your shopping here...</p>
                            </div>
                        </li>
                        <li>
                            <div class="banner-info">
                                <h3>Pack your Bag</h3>
                                <p>Start your shopping here...</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="shop">
            <a href="single.html">SHOP COLLECTION NOW</a>
        </div>
    </div>
</div>
<!-- content-section-starts-here -->
<div class="container">
    <div class="main-content">
        <div class="online-strip">
            <div class="col-md-4 follow-us">
                <h3>follow us :
                    <a class="twitter" href="#"></a>
                    <a class="facebook" href="#"></a>
                </h3>
            </div>
            <div class="col-md-4 shipping-grid">
                <div class="shipping">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shipping.png" alt=""/>
                </div>
                <div class="shipping-text">
                    <h3>Free Shipping</h3>
                    <p>on orders over $ 199</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 online-order">
                <p>Order online</p>
                <h3>Tel:999 4567 8902</h3>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--        --><?php //do_action('woocommerce_before_main_content'); ?>
		<?php woocommerce_output_content_wrapper(); ?>
		<?php do_action( 'woocommerce_archive_description' ); ?>
		<?php $products = new WP_Query( [
			'post_type'      => 'product',
			'posts_per_page' => 9
		] ); ?>

        <!--        --><?php //do_action( 'woocommerce_before_shop_loop' ); ?>

		<?php woocommerce_product_loop_start(); ?>
		<?php if ( $products->have_posts() ): ?>
			<?php while ( $products->have_posts() ): ?>
				<?php $products->the_post(); ?>
				<?php wc_get_template_part( 'content', 'product' ); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php woocommerce_product_loop_end(); ?>
        <div class="clearfix"></div>
		<?php woocommerce_output_content_wrapper_end(); ?>

        <!--        --><?php //do_action( 'woocommerce_after_shop_loop' ); ?>
    </div>

</div>

<?php wc_get_template_part('templates/over', 'products'); ?>

<div class="news-letter">
    <div class="container">
        <div class="join">
            <h6>Поиск</h6>
            <div class="sub-left-right">
	            <?php if ( function_exists( 'aws_get_search_form' ) ) {
		            aws_get_search_form();
	            } ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
