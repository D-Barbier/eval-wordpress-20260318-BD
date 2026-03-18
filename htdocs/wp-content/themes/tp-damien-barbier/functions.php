<?php

/**
 * Menu
 */
function dba_theme_menu()
{
    register_nav_menus([
        'main' => 'Menu Principal',
        'foot' => 'Menu de Bas de page',
    ]);

     register_sidebar([
        'id' => 'main-sidebar',
        'name' => 'Main Sidebar',
        'before_widget' => '<div class="main-sidebar">',
        'after_widget'  => '</div>',
    ]);
}

add_action('init', 'dba_theme_menu');

/**
 *   support des images à la une
 */
function dba_add_thumbnails()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'dba_add_thumbnails');
