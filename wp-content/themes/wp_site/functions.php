<?php 

function  wps_after_setup_theme() {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('custom-logo');
    add_theme_support('htm15', array('search-form'));

    register_nav_menu('Header', 'Header location');
    register_nav_menu('Footer', 'Footer location');
}

add_action('after_setup_theme', 'wps_after_setup_theme');

function wps_wp_enqueue_scripts()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css' , array(), '', 'all');
}

add_action('wp_enqueue_scripts', 'wps_wp_enqueue_scripts');