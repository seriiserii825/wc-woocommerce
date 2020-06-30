<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>
<div class="inner-banner">
    <div class="container">
		<?php require_once __DIR__ . '/../inc/navigation.php'; ?>
    </div>
</div>

<div class="container">
    <div class="products-page">
		<?php get_sidebar(); ?>
        <div class="new-product">

			<?php do_action( 'woocommerce_before_main_content' ); ?>
			<?php remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 ); ?>

            <div class="mens-toolbar">

				<?php do_action( 'woocommerce_before_shop_loop' ); ?>

                <div class="clearfix"></div>
            </div>
            <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                <div class="cbp-vm-options">
                    <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid"
                       title="grid">Grid View
                    </a>
                    <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
                </div>
                <div class="pages">
                    <div class="limiter visible-desktop">
                        <label>Show</label>
                        <select>
                            <option value="" selected="selected">
                                9
                            </option>
                            <option value="">
                                15
                            </option>
                            <option value="">
                                30
                            </option>
                        </select> per page
                    </div>
                </div>
                <div class="clearfix"></div>
                <ul>
					<?php if ( have_posts() ): ?>
						<?php while ( have_posts() ): ?>
							<?php the_post(); ?>
							<?php global $product; ?>
							<?php wc_get_template_part( 'content', 'product-cat' ); ?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else: ?>
                        <h3>No products found</h3>
					<?php endif; ?>
                </ul>
				<?php do_action( 'woocommerce_after_shop_loop' ); ?>
<!--				--><?php //woocommerce_pagination(); ?>
<!--                --><?php //wc_get_template( 'loop/pagination.php' ); ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>
</div>

<?php wc_get_template_part( 'templates/over', 'products' ); ?>

<?php get_footer(); ?>
