<?php

// Theme functions here

add_action('after_setup_theme', function () {
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
        'menu_mobile' => 'Menu Mobile'
    ));
});
function nautilus_wp_styles() {
    wp_enqueue_style('styles', get_theme_file_uri('/assets/css/styles.css'), false, false);
}
add_action('wp_enqueue_scripts', 'nautilus_wp_styles');
