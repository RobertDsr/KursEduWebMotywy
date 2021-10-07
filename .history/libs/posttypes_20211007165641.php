<?php

add_action('init', 'ilovetoeat_init_posttypes');

function ilovetoeat_init_posttypes() {
    /* Registration recipes */
    $recipes_args = array(
        'labels' => array(
            'name' => 'Przepisy',
            'singular_name' => 'Przepisy',
            'all_items' => 'Wszystkie przepisy',
            'add_new' => 'Dodaj nowy przepis',
            'add_new_item' => 'Dodaj nowy przepis',
            'edit_item' => 'Edytuj przepis',
            'new_item' => 'Nowy przepis',
            'view_item' => 'Zobacz przepis',
            'search_items' => 'Szukaj w przepisach',
            'not_found' => 'Nie znaleziono przepisu',
            'not_found_in_trash' => 'Brak przepisów w koszu',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'
        ),
        'has_archive' => true
    );

    register_post_type( 'recipes', $recipes_args );

    /* Registration Restaurants */

    $restaurants_args = array(
        'labels' => array(
            'name' => 'Restauracje',
            'singular_name' => 'Restauracje',
            'all_items' => 'Wszystkie restauracje',
            'add_new' => 'Dodaj nową restaurację',
            'add_new_item' => 'Dodaj nową restaurację',
            'edit_item' => 'Edytuj restaurację',
            'new_item' => 'Nowa restauracja',
            'view_item' => 'Zobacz restaurację',
            'search_items' => 'Szukaj restauracji',
            'not_found' => 'Nie znaleziono żadnych restauracji',
            'not_found_in_trash' => 'Nie znaleziono żadnych restauracji w koszu',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'post-formats'
        ),
        'has_archive' => true
    );

    register_post_type( 'restaurants', $restaurants_args );

    /*Register Food Fight Post Type*/

    $food_fights_args = array(
        'labels' => array(
            'name' => 'Food Fight',
            'singular_name' => 'Food Fight',
            'all_items' => 'Wszystkie pojedynki',
            'add_new' => 'Dodaj nową pojedynek',
            'add_new_item' => 'Dodaj nową pojedynek',
            'edit_item' => 'Edytuj pojedynek',
            'new_item' => 'Nowa pojedynek',
            'view_item' => 'Zobacz pojedynek',
            'search_items' => 'Szukaj pojedynku',
            'not_found' => 'Nie znaleziono żadnych pojedynków',
            'not_found_in_trash' => 'Nie znaleziono żadnych pojedynków w koszu',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'custom-fields'
        ),
        'has_archive' => true
    );

    register_post_type( 'foodfight', $food_fights_args );
}

/*Rejestracja taksonomi */

add_action('init', 'ilovetoeat_init_taxonomies');

function ilovetoeat_init_taxonomies() {
    register_taxonomy(
        'ingredients',
        array('recipes'),
        array(
            'hierarchical' => true,
            'label' => array(
                'name' => 'Składniki',
                'singular_name' => 'Składniki',
                'search_items' => 'Wyszukaj składniki',
                'popular_items' => 'Popularne składniki',
                'all_items' => 'Wszystkie składniki',
                'edit_item' => 'Edytuj składnik',
                'update_item' => 'Aktualizuj składnik',
                'add_new_item' => 'Dodaj nowy składnik',
                
            )
        )
    )
}

?>