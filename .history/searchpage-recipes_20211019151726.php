<?php

/*
Template Name: Wyszukiwanie po składnikach
*/

if(isset($_GET['ingredients'])) {
    $ingredients = array_keys($_GET['ingredients']);
}else{
    $ingredients = array();
}

$loop = new WP{}

?>