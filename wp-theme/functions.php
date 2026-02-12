<?php

function cvs_theme_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'cvs-website'),
    ));
}
add_action('after_setup_theme', 'cvs_theme_setup');

function cvs_theme_scripts()
{
    // Enqueue main stylesheet
    wp_enqueue_style('cvs-style', get_stylesheet_uri());

    // Enqueue Google Fonts
    wp_enqueue_style('cvs-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Montserrat:wght@700&display=swap', array(), null);

    // Enqueue Font Awesome
    wp_enqueue_style('cvs-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), null);

    // Enqueue Main Script
    wp_enqueue_script('cvs-script', get_template_directory_uri() . '/assets/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'cvs_theme_scripts');
