<?php

/**
 * Theme Bootstrap
 * Exit if accessed directly.
 */
if (! defined('ABSPATH')) {
    exit;
}

// Enqueue static HTML/CSS/JS assets securely
function consultancy_enqueue_assets()
{
    $theme_version = wp_get_theme()->get('Version');

    // CSS
    wp_enqueue_style('consultancy-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), $theme_version);

    // JavaScript (Loaded in footer via true parameter)
    wp_enqueue_script('consultancy-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), $theme_version, true);

    // Pass AJAX URL to frontend JS for Milestone 3 Form Engine
    wp_localize_script('consultancy-main-js', 'consultancy_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('consultancy_form_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'consultancy_enqueue_assets');

// Theme Supports
function consultancy_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'consultancy_theme_setup');

// Require modular logic files (to be built in later milestones)
// require_once get_template_directory() . '/inc/cpt-registration.php';
// require_once get_template_directory() . '/inc/ajax-forms.php';


/**
 * Force Rank Math to parse Advanced Custom Fields strings for content density metrics.
 */
add_filter('rank_math/v2/analyze_content_fields', function ($fields) {
    $fields[] = 'hero_title';
    $fields[] = 'content';
    $fields[] = 'core_services_1_description';
    $fields[] = 'core_services_2_description';
    $fields[] = 'core_services_3_description';
    $fields[] = 'core_services_4_description';
    $fields[] = 'common_answer_1';
    $fields[] = 'common_answer_2';

    return $fields;
});
