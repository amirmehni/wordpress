<?php
add_filter ( 'woocommerce_account_menu_items', 'replyWp_remove_my_account_links' );
function replyWp_remove_my_account_links( $replyWp_remove ){
    unset( $replyWp_remove['edit-address'] ); // Addresses
    unset( $replyWp_remove['dashboard'] ); // Remove Dashboard
    unset( $replyWp_remove['orders'] ); // Remove Orders
    unset( $replyWp_remove['downloads'] ); // Disable Downloads
    unset( $replyWp_remove['edit-account'] ); // Remove Account details tab
    unset( $replyWp_remove['customer-logout'] ); // Remove Logout link
    return $replyWp_remove;
}