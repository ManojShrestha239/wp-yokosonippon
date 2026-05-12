<?php

/**
 * Theme Setup & Enqueue Scripts
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function yokosonippon_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'yokosonippon_setup');

function yokosonippon_scripts()
{
    // 1. Google Fonts
    wp_enqueue_style('google-fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wdth,wght@8..144,25..151,100..1000&display=swap', array(), null);
    wp_enqueue_style('google-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null);

    // 2. Main Stylesheet
    wp_enqueue_style('yokosonippon-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

    // 3. Tailwind via CDN (Development Only - To be replaced with compiled CSS in Milestone 4)
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, false);

    // Injecting the Tailwind config inline into the header
    $tailwind_config = "
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'primary': '#002a58',
                        'primary-container': '#004080',
                        'on-primary': '#ffffff',
                        'secondary': '#005ac1',
                        'secondary-container': '#4d8efe',
                        'on-secondary': '#ffffff',
                        'tertiary': '#003311',
                        'tertiary-container': '#004c1c',
                        'on-tertiary': '#ffffff',
                        'surface': '#faf9fd',
                        'on-surface': '#1a1b1e',
                        'surface-variant': '#e3e2e6',
                        'on-surface-variant': '#424750',
                        'outline': '#737781',
                        'outline-variant': '#c3c6d2',
                        'surface-container-low': '#f4f3f7',
                        'surface-container-highest': '#e3e2e6'
                    },
                    spacing: {
                        'stack-sm': '12px',
                        'base': '8px',
                        'stack-lg': '48px',
                        'margin-mobile': '16px',
                        'gutter': '24px',
                        'stack-md': '24px',
                        'margin-desktop': '64px'
                    },
                    fontFamily: {
                        'body-md': ['Roboto Flex'],
                        'body-lg': ['Roboto Flex'],
                        'label-lg': ['Roboto Flex'],
                        'title-lg': ['Roboto Flex'],
                        'headline-lg': ['Roboto Flex'],
                        'display-lg': ['Roboto Flex']
                    }
                }
            }
        };
    ";
    wp_add_inline_script('tailwind-cdn', $tailwind_config, 'after');
}
add_action('wp_enqueue_scripts', 'yokosonippon_scripts');
