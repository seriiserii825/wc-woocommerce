<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
if ( ! empty( $breadcrumb ) ) {
	echo $wrap_before;
	foreach ( $breadcrumb as $key => $crumb ) {
		echo $before;
		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
			echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
		} else {
			echo esc_html( $crumb[0] );
		}
		echo $after;
		if ( sizeof( $breadcrumb ) !== $key + 1 ) {
			echo $delimiter;
		}
	}
	echo $wrap_after;
}
$taxonomy = 'product_cat';
$queried_object = get_queried_object();
$term_id = $queried_object->term_id;
$ids = [];
$terms = get_terms(['taxonomy' => $taxonomy]);
$term_next = '';
foreach($terms as $term){
    $ids[] = $term->term_id;
}

$position_category = array_search($term_id, $ids);
$position_category__next = $position_category + 1;

if($position_category__next >= array_pop($ids)){
    $term_next = get_term($ids[$position_category__next], $taxonomy);
    if($term_next){
        echo '<p class="back"> <a href="'.get_term_link($term_next->term_id, $taxonomy).'">'.$term_next->name.'</a> </p>';
    }
}else{
	$term_next = get_term( $ids[0], $taxonomy );
	if ( $term_next ) {
		echo '<p class="back"> <a href="' . get_term_link( $term_next->term_id, $taxonomy ) . '">' . $term_next->name . '</a> </p>';
	}
}
?>
	<div class="clearfix"></div>
</div>

