<div class="main-header-top">
    <div class="logo">
        <h1>
            <a href="<?php echo home_url(); ?>">
                <span>E</span>
                -Shop
            </a>
        </h1>
    </div>
	<?php wp_nav_menu( [
		'theme_location'  => '',
		'menu'            => '',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'main-menu',
		'menu_id'         => 'js-main-menu',
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

    <div class="sandwitch-wrap" id="js-sandwitch-wrap">
        <div class="sandwitch">
            <div class="sandwitch__line sandwitch__line--top"></div>
            <div class="sandwitch__line sandwitch__line--middle"></div>
            <div class="sandwitch__line sandwitch__line--bottom"></div>
        </div>
    </div>
	<?php wpm_language_switcher('select'); ?>
</div>
