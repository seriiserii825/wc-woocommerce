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
							global $woocommerce;
							$currency      = get_woocommerce_currency_symbol();
							$price_regular = $product->get_regular_price();
							$price_sale    = $product->get_sale_price();
							$price         = $product->get_price();
							if ( $price_regular ) {
								$price_html = $price_regular . $currency . ' - <span class="line-through">' . $price . $currency . '</span>';
							} else {
								$price_html = $price . $currency;
							}
							$class = implode( ' ', array_filter( array(
								'button',
								'product_type_' . $product->get_type(),
								$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
								$product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
							) ) );
							?>

							<a class="like_name <?php echo $class; ?>"
							   data-product_sku="<?php echo $product->get_sku(); ?>" data-quantity="1"
							   href="<?php echo $product->add_to_cart_url(); ?>"><?php the_title(); ?></a>
							<p>
								<?php if ( $price_html ): ?>
									<a class="item_add" href="<?php echo $product->add_to_cart_url(); ?>">
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

