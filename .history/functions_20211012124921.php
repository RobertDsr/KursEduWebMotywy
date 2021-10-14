<?php

if(!defined("ILOVEEAT_THEME_DIR")) {
//do wybory dwie metody
//define('ILOVEEAT_THEME_DIR', ABSPATH. 'wp-content/themes' .get_template() .'/');
define('ILOVEEAT_THEME_DIR', get_theme_root() . '/' .get_template() .'/');
}

if(!defined("ILOVEEAT_THEME_URL")) {
define('ILOVEEAT_THEME_URL', WP_CONTENT_URL . '/themes/' .get_template() .'/');
}

require_once ILOVEEAT_THEME_DIR.'libs/posttypes.php';
require_once ILOVEEAT_THEME_DIR.'libs/utils.php';

add_theme_support('post-formats', array('gallery'));
add_theme_support('post-thumbnails', array('post', 'recipes', 'restaurants', 'foodfight'));

// wyświetla na stronie restaurants typ kuchni i miasto
function printRestaurantCategories($post_id) {
    printPostCategories($post_id, array('cousine-type', 'city'));
}

// implementacja czapeczek - ocen
function printRanking ($post_id) {
    $rate = (int) get_post_meta( $post_id, 'ranking', true );

    for ($i=1; $i<5; $i++) {
        if($i<=$rate) {
            echo '<li class="active"></li>';
        } else {
            echo '<li></li>';
        }
    }
}

// rejestracja sidebar

register_sidebar( array(
    'name' => 'Restauracje (listing)'
) )
