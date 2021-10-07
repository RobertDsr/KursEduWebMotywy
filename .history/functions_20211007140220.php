<?php

if(!defined("ILOVEEAT_THEME_DIR")) {
//do wybory dwie metody
//define('ILOVEEAT_THEME_DIR', ABSPATH. 'wp-content/themes' .get_template() .'/');
define('ILOVEEAT_THEME_DIR', get_theme_root() . '/' .get_template() .'/');
}

if(!defined("ILOVEEAT_THEME_URL")) {
define('ILOVEEAT_THEME_URL', WP_CONTENT_URL . '/themes/' .get_template() .'/');
}
