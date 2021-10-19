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
    'tax_query' => array(
        array(
            
        )
    )
) )

?>