<?php
/*
use key =>> post_view_count
*/
function set_post_view_custom_field() {
    if ( is_single() ) {
        global $post;
        $post_id = $post->ID;
        $count = 1;
        $post_view_count = get_post_meta( $post_id, 'post_view_count', true );
        if ( $post_view_count ) {
            $count = $post_view_count + 1;
        }
        update_post_meta( $post_id, 'post_view_count', $count );
    }
}
add_action( 'wp_head', 'set_post_view_custom_field' );
