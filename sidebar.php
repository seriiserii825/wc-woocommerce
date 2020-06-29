<div class="products">
    <div class="product-listy">
        <h2><?php echo get_field( 'products_title' . get_lang(), 'option' ); ?></h2>
        <?php wp_nav_menu( [
        	'theme_location'  => 'menu-sidebar',
        	'menu'            => '',
        	'container'       => '',
        	'container_class' => '',
        	'container_id'    => '',
        	'menu_class'      => 'product-list',
        	'menu_id'         => '',
        	'echo'            => true,
        	'fallback_cb'     => 'wp_page_menu',
        	'before'          => '',
        	'after'           => '',
        	'link_before'     => '',
        	'link_after'      => '',
        	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        	'depth'           => 0,
        	'walker'          => '',
        ] ); ?>
    </div>
    <div class="latest-bis">
        <img src="<?php echo get_field('offer_image', 'option'); ?>" class="img-responsive" alt=""/>
        <div class="offer">
            <p>40%</p>
            <small>Top Offer</small>
        </div>
    </div>
</div>
