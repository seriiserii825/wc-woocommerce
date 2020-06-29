<?php get_header(); ?>
<!-- header-section-ends -->
<div class="banner-top">
    <div class="container">
		<?php ?>
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


<div class="other-products">
    <div class="container">
        <h3 class="like text-center">Featured Collection</h3>
        <ul id="flexiselDemo3">

			<?php
			$featured = new WP_Query( [
				'post_type'      => 'product',
				'posts_per_page' => - 1,
				'tax_query'      => array(
					array(
						'taxonomy' => 'product_visibility',
						'field'    => 'name',
						'terms'    => 'featured',
					),
				),
				//                'post__in' => wc_get_featured_product_ids(),
			] ); ?>
			<?php if ( $featured->have_posts() ): ?>
				<?php while ( $featured->have_posts() ): ?>
					<?php $featured->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>"
                                 class="img-responsive"
                                 alt=""/>
                        </a>
                        <div class="product liked-product simpleCart_shelfItem">
							<?php global $product;
							$class = implode( ' ', array_filter( array(
								'button',
								'product_type_' . $product->get_type(),
								$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
								$product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
							) ) );
                            ?>

                            <a class="like_name <?php echo $class; ?>" data-product_sku="<?php echo $product->get_sku(); ?>" data-quantity="1"
                               href="<?php echo $product->add_to_cart_url(); ?>"><?php the_title(); ?></a>
                            <p>
                                <?php if($price_html = $product->get_price_html()): ?>
                                <a class="item_add" href="#">
                                    <i></i>
                                    <span class=" item_price"><?php echo $price_html; ?></span>
                                </a>
                                <?php endif; ?>
                            </p>
                        </div>
                    </li>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </ul>
    </div>
</div>
<!-- content-section-ends-here -->
<div class="news-letter">
    <div class="container">
        <div class="join">
            <h6>JOIN OUR MAILING LIST</h6>
            <div class="sub-left-right">
                <form>
                    <input type="text" value="Enter Your Email Here" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}"/>
                    <input type="submit" value="SUBSCRIBE"/>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
