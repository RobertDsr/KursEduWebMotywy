<?php

if (!defined("ILOVEEAT_THEME_DIR")) {
    //do wyboru dwie metody
    // define('ILOVEEAT_THEME_DIR', ABSPATH. 'wp-content/themes' .get_template() .'/');
    define('ILOVEEAT_THEME_DIR', get_theme_root() . '/' . get_template() . '/');
}

if (!defined("ILOVEEAT_THEME_URL")) {
    define('ILOVEEAT_THEME_URL', WP_CONTENT_URL . '/themes/' . get_template() . '/');
}

require_once ILOVEEAT_THEME_DIR . 'libs/posttypes.php';
require_once ILOVEEAT_THEME_DIR . 'libs/utils.php';

add_theme_support('post-formats', array('gallery'));
add_theme_support('post-thumbnails', array('post', 'recipes', 'restaurants', 'foodfight'));

// wyświetla na stronie restaurants typ kuchni i miasto
function printRestaurantCategories($post_id)
{
    printPostCategories($post_id, array('cousine-type', 'city'));
}

// implementacja czapeczek - ocen
function printRanking($post_id)
{
    $rate = (int) get_post_meta($post_id, 'ranking', true);

    for ($i = 1; $i < 5; $i++) {
        if ($i <= $rate) {
            echo '<li class="active"></li>';
        } else {
            echo '<li></li>';
        }
    }
}

// rejestracja sidebar

register_sidebar( array(
    'name' => 'Restauracje (listing)',
    'id' => 'restaurants-archive-widget',
    'description' => 'Widgety w sidebarze w archiwum restauracji',
    'before_widget' => '<div id="%1$s" class="box widget %2$s>',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
) );

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


    foreach ($sidebar_list as $sidebar) {
        register_sidebar(array_merge($sidebar, $sidebar_opts));
    }
}

// dane do mapy

function getRestaurantsCountByCities()
{
    $cities_list = get_terms('city');
    $arr_ret = array();

    foreach ($cities_list as $city) {
        $arr_ret[] = array(
            'city' => $city->name,
            'restaurantsCount' => $city->count
        );
    }

    return $arr_ret;
}

function show_admin_panel_message()
{
    $key = esc_attr(get_option('ilte_gmap_api_key'));

    if (empty($key)) {
        echo '<div id="message" class="error"><p><strong>Szablon ILoveEat wymaga podania klucza Google Maps API</strong></p></div>';
    }
}
add_action('admin_notices', 'show_admin_panel_message');

function ilte_admin_init()
{
    register_setting('ilte_theme_options', 'ilte_gmap_api_key');
}

add_action('admin_init', 'ilte_admin_init');

function ilte_settings_page()
{
?>

    <div class="wrap">
        <?php screen_icon(); ?>
        <h2>Ustawienia motywu ILoveEat</h2>

        <form action="options.php" method="post" id="ilte-options-form">
            <?php settings_fields('ilte_theme_options'); ?>
            <h3>
                <label for="ilte_gmap_api_key">Klucz Google Maps</label>
                <input name="ilte_gmap_api_key" id="ilte_gmap_api_key" type="text" style="width:500px;" value="<?php echo esc_attr(get_option('ilte_gmap_api_key')); ?>" </h3>
                <input class="button button-primary" type="submit" value="Zapisz" />
        </form>
    </div>
<?php
}

function ilte_settings_menu()
{
    add_theme_page('ILoveEat - Ustawienia', 'Szablon ILoveEat', 'manage_options', 'ilte-theme-options', 'ilte_settings_page');
}

add_action('admin_menu', 'ilte_settings_menu');

if (function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'main_nav' => 'Główne menu nawigacji'
    ));
}

function printPreparationTime($post_id)
{
    $minutes = (int)get_post_meta($post_id, 'czas', true);

    if ($minutes > 60) {
        $hours = floor($minutes / 60);
        $minutes = (int)$minutes - $hours * 60;

        if ($minutes > 0) {
            echo "{$hours}h {$minutes}min";
        } else {
            echo "{$hours}h";
        }
    } else {
        echo $minutes . ' min';
    }
}


function getTopTaxonomies($taxonomy, $number = 5)
{
    $result = get_terms($taxonomy, array(
        'orderby' => 'count',
        'hide_empty' => 0,
        'number' => $number
    ));

    return $result;
}

function getHierarchicalTaxonomies($taxonomy)
{
    $top_level = get_terms($taxonomy, array(
        'parent' => 0,
        'hide_empty' => 0
    ));

    $return = array();

    foreach ($top_level as $tax) {
        $tax->childs = get_terms($taxonomy, array(
            'parent' => $tax->term_id,
            'hide_empty' => 0
        ));

        $return[$tax->slug] = $tax;
    }

    return $return;

}

function the_post_breadcrumb() {

    global $post;

    echo '<a href="'.home_url().'">Główna</a>';

    echo '<span></span>';

    $post_type_name = get_post_type();
    $post_type_url = get_post_type_archive_link( get_post_type() );

    echo '<a href="'.$post_type_url.'">'.ucfirst($post_type_name).'</a>';

    $recipe_cats = get_the_terms( $post->ID, 'meal-type' );

    echo '<span></span>';

    if(count($recipe_cats) > 0 ) {

        $recipe_meal_type = array_shift(array_values($recipe_cats));
        $term_link = get_term_link( $recipe_meal_type->slug, 'meal-type' );

        echo '<a href="'.$term_link.'">'.ucfirst($recipe_meal_type->name).'</a>';

        echo '<span></span>';
    }

    the_title();
}

function getRecipeIngredients($post_id) {
    $ingredients = (string)get_post_meta( $post_id, 'skladniki', true );

    $ing_list = explode("\n", trim($ingredients));

    $return = array();

    foreach($ing_list as $row) {
        $parts = explode(":", $row);
        $name = trim($parts[0]);

        if(!empty($name)) {
            $return[$nmae] = trim($parts[1]);
        }
    }

    return $return;
}

function printRecipeIngredients($post_id) {
    $ingredients = getRecipeIngredients($post_id);

    echo '<ul>';

    if ( count($ingredients) < 1 ) {
        echo '<li>Brak składników!</li>';
    }else {
        foreach($ingredients as $name => $value) {
            echo "<li>{$nmae} <span>{$value}</span></li>";
        }
    }
    
}
