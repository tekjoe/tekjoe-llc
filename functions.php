<?php

// adding the CSS and JS files

function tekjoe_setup()
{
    if (is_page('contact')) {
        wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), null, microtime(), true);
        wp_enqueue_style('leaflet', 'https://unpkg.com/leaflet@1.5.1/dist/leaflet.css');
        wp_enqueue_style('main', get_theme_file_uri('/css/main.css'), null, microtime());
        wp_enqueue_script('leaflet', 'https://unpkg.com/leaflet@1.5.1/dist/leaflet.js');
    } else {
        wp_enqueue_style('main', get_theme_file_uri('/css/main.css'), null, microtime());
        wp_enqueue_style('prism-css', 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.16.0/themes/prism-tomorrow.min.css');
        wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), null, microtime(), true);
        wp_enqueue_script('prism-js', 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.0/prism.min.js');
    }
}

add_action('wp_enqueue_scripts', 'tekjoe_setup');

// Adding theme support

function tekjoe_init()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', "search-form"));
}

add_action('after_setup_theme', 'tekjoe_init');

// Projects Post Type

function tekjoe_custom_post_type()
{
    register_post_type(
        'project',
        array(
      'rewrite' => array('slug' => 'projects'),
      'labels' => array('name' => 'Projects', 'singular_name' => 'Project', 'add_new_item' => 'Add New Project', 'edit_item' => 'Edit Project'),
      'menu-icon' => 'dashicons-clipboard',
      'public' => true,
      'has_archive' => true,
      'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'comments'
      )
      )
    );
}

add_action('init', 'tekjoe_custom_post_type');