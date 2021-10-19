<?php

/*
Template Name: Wyszukiwanie po składnikach
*/

if(isset($_GET['ingredients'])) {
    $ingredients = array_keys($_GET['ingredients']);
}else{
    $ingredients = array();
}

$loop = new WP_Query( array(
    'post_type' => 'recipes',
    'tax_query' => add_filter( 'woocommerce_admin_order_preview_line_item_column_sanitize_key(column>)', 'callback' );
) )

?>