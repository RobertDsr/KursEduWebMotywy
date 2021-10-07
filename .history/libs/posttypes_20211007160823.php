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
        ' '
    )
}

?>