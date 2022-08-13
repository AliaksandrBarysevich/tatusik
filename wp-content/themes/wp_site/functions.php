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
    wp_enqueue_style('style-media', get_template_directory_uri() . '/css/media.css' , array('style'), '', 'all');
}

add_action('wp_enqueue_scripts', 'wps_wp_enqueue_scripts');

function create_post_type() {
    register_post_type('krossovki-mal',
        array(
                'labels' => array(
                'name' => __('Krossovki-mal'),
                'singular_name' =>__('krossovki-mal'),
            ),
            'menu_position' => 10,
            'supports' => array('title', 'editor', 'comments', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
        )
    );
    register_post_type('bosonozhki-mal',
        array(
                'labels' => array(
                'name' => __('Bosonozhki-mal'),
                'singular_name' =>__('bosonozhki-mal'),
            ),
            'menu_position' => 10,
            'supports' => array('title', 'editor', 'comments', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
        )
    );
    register_post_type('botinki-mal',
        array(
                'labels' => array(
                'name' => __('Botinki-mal'),
                'singular_name' =>__('botinki-mal'),
            ),
            'menu_position' => 10,
            'supports' => array('title', 'editor', 'comments', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
        )
    );
    register_post_type('krossovki-dev',
        array(
                'labels' => array(
                'name' => __('Krossovki-dev'),
                'singular_name' =>__('krossovki-dev'),
            ),
            'menu_position' => 10,
            'supports' => array('title', 'editor', 'comments', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
        )
    );
    register_post_type('bosonozhki-dev',
        array(
                'labels' => array(
                'name' => __('Bosonozhki-dev'),
                'singular_name' =>__('bosonozhki-dev'),
            ),
            'menu_position' => 10,
            'supports' => array('title', 'editor', 'comments', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
        )
    );
    register_post_type('botinki-dev',
        array(
                'labels' => array(
                'name' => __('Botinki-dev'),
                'singular_name' =>__('botinki-dev'),
            ),
            'menu_position' => 10,
            'supports' => array('title', 'editor', 'comments', 'excerpt', 'page-attributes','thumbnail', 'custom-fields', 'post-formats'),
            'public' => true,
            'has_archive' => true,
            'hierarchical' => true,
        )
    );
}
add_action('init', 'create_post_type');


function true_id($args)
{
    $args['post_page_id'] = 'ID';
    return $args;
}
function true_custom($column, $id)
{
    if($column === 'post_page_id'){
        echo $id;
    }
}
add_filter('manage_pages_columns', 'true_id', 5);
add_action('manage_pages_custom_column', 'true_custom', 5, 2);
add_filter('manage_posts_columns', 'true_id', 5);
add_action('manage_posts_custom_column', 'true_custom', 5, 2);

add_filter( 'wpcf7_validate_configuration', '__return_false' );
