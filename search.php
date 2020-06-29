<?php get_header(); ?>
<?php global $wp_query; ?>
<!-- header-section-ends -->
<div class="banner-top">
    <div class="container">
		<?php ?>
		<?php require_once __DIR__ . '/../inc/navigation.php'; ?>
    </div>
</div>
<div class="news-letter">
    <div class="container">
        <div class="join">
            <h6>Поиск</h6>
            <div class="sub-left-right">
                <form>
                    <input type="text" name="s" value="Введите поисковый запрос" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Введите поисковый запрос';}"/>
                    <input type="submit" value="Поиск"/>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
