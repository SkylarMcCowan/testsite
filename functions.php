<?php
function skylars_theme_setup() {
    // Register Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'skylars-modern-theme'),
    ));

    // Add theme support for automatic title tag
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'skylars_theme_setup');

function skylars_theme_scripts() {
    wp_enqueue_style('main-css', get_stylesheet_uri(), array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'skylars_theme_scripts');
