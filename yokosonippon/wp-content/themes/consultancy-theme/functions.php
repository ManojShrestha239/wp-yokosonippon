<?php

/**
 * Yokoso Nippon Theme Functions and Definitions
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Enqueue scripts and styles.
 */
function yokoso_nippon_scripts()
{
    $theme_version = wp_get_theme()->get('Version');

    // 1. Google Fonts & Material Symbols
    wp_enqueue_style('google-fonts-preconnect', 'https://fonts.googleapis.com', array(), null);
    wp_enqueue_style('gstatic-preconnect', 'https://fonts.gstatic.com', array(), null);
    wp_enqueue_style('google-fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,400;8..144,500;8..144,600;8..144,700&display=swap', array(), null);
    wp_enqueue_style('material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null);

    // 2. Core Theme Styles (your shared.css)
    wp_enqueue_style('yokoso-shared-style', get_template_directory_uri() . '/assets/css/shared.css', array(), filemtime(get_template_directory() . '/assets/css/shared.css'));
    wp_enqueue_style('yokoso-style', get_stylesheet_uri(), array(), $theme_version);

    // 3. Tailwind CDN (Development Only) & Config
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, false);
    wp_enqueue_script('tailwind-config', get_template_directory_uri() . '/assets/js/tailwind-config.js', array('tailwindcss'), filemtime(get_template_directory() . '/assets/js/tailwind-config.js'), false);

    // 4. Core Theme Scripts (your shared.js)
    // Enqueued in the footer (true parameter) for performance
    wp_enqueue_script('yokoso-shared-js', get_template_directory_uri() . '/assets/js/shared.js', array(), filemtime(get_template_directory() . '/assets/js/shared.js'), true);
}
add_action('wp_enqueue_scripts', 'yokoso_nippon_scripts');

/**
 * Add preconnect attributes to specific resource hints safely.
 */
function yokoso_nippon_resource_hints($urls, $relation_type)
{
    if ('preconnect' === $relation_type) {
        $urls[] = 'https://fonts.googleapis.com';
        $urls[] = 'https://fonts.gstatic.com';
    }
    return $urls;
}
add_filter('wp_resource_hints', 'yokoso_nippon_resource_hints', 10, 2);

/**
 * Theme Setup Capabilities
 */
function yokoso_nippon_setup()
{
    add_theme_support('title-tag'); // Let WP manage the <title> tag dynamically
    add_theme_support('post-thumbnails'); // Enable Featured Images

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'yokoso-nippon'),
        'mobile'  => esc_html__('Mobile Menu', 'yokoso-nippon'),
        'footer'  => esc_html__('Footer Menu', 'yokoso-nippon'),
    ));
}
add_action('after_setup_theme', 'yokoso_nippon_setup');

/**
 * Include Custom Nav Walker for Tailwind CSS
 */
require_once get_template_directory() . '/inc/class-yokoso-nav-walker.php';
