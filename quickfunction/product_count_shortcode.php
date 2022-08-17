<?php
/*
use shortcode =>> [product_count]
*/
	function product_count_shortcode( ) {
        $count_posts = wp_count_posts( 'product' );
 return $count_posts->publish;
}
add_shortcode( 'product_count', 'product_count_shortcode' );