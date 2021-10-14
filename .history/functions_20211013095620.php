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

// register_sidebar( array(
//     'name' => 'Restauracje (listing)',
//     'id' => 'restaurants-archive-widget',
//     'description' => 'Widgety w sidebarze w archiwum restauracji',
//     'before_widget' => '<div id="%1$s" class="box widget %2$s>',
//     'after_widget' => '</div>',
//     'before_title' => '<h2>',
//     'after_title' => '</h2>'
// ) );

if (function_exists('register_sidebar')) {
    $sidebar_list = array(
        array(
            'name' => 'Restauracje (listing)',
            'id' => 'restaurants-archive-widget',
            'description' => 'Widgety w sidebarze w archiwum restauracji'
        ),
        array(
            'name' => 'Restauracje (szczegóły)',
            'id' => 'restaurants-details-widgets',
            'description' => 'Widgety w sidebarze w pojedynczej restauracji'
        ),
        array(
            'name' => 'Przepisy (listing)',
            'id' => 'recipes-archive-widgets',
            'description' => 'Widgety w pasku bocznym na liście przepisów'
        ),
        array(
            'name' => 'Przepisy (szczegóły)',
            'id' => 'recipes-details-widgets',
            'description' => 'Widgety w pasku bocznym na stronie przepisów'
        ),
        array(
            'name' => 'Domyślny',
            'id' => 'default-widgets',
            'description' => 'Domyślny pasek z widgetami'
        ),
    );

    $sidebar_opts = array(
        'before_widget' => '<div id="%1$s" class="box widget %2$s>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    );


    foreach($sidebar_list as $sidebar) {
        register_sidebar( array_merge($sidebar, $sidebar_opts) );
    }

}

// dane do mapy

function getRestaurantsCountByCities() {
    $cities_list = get_terms('city');
    $arr_ret = array();
    
    foreach($cities_list as $city) {
        $arr_ret[] = array(
            'city' => $city->name,
            'restaurantsCount' => $city->count
        );
    }
    
    return $arr_ret;
}

function ilte_admin