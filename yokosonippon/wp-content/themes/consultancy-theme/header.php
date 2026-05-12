<?php

/**
 * The header for our theme
 */
if (! defined('ABSPATH')) exit;
?>
<!doctype html>
<html <?php language_attributes(); ?> class="light">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
        body {
            font-family: "Roboto Flex", sans-serif;
            background-color: #faf9fd;
        }

        .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
        }

        .surface-card {
            background-color: #ffffff;
            border-radius: 24px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.04);
            transition: box-shadow 0.3s ease;
        }

        .surface-card:hover {
            box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.08);
        }
    </style>

    <?php wp_head(); /* Crucial: WP hooks into this to inject scripts/styles */ ?>
</head>

<body <?php body_class('text-on-surface'); ?>>
    <?php wp_body_open(); ?>

    <!-- Top Navigation Bar -->
    <header class="fixed top-0 w-full z-50 bg-surface/95 backdrop-blur-md shadow-sm border-b border-outline-variant">
        <div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-4 max-w-7xl mx-auto">
            <div class="font-headline-lg text-2xl md:text-3xl font-bold text-primary">
                <?php bloginfo('name'); ?>
            </div>
            <nav class="hidden md:flex gap-gutter items-center">
                <a class="font-title-lg text-secondary border-b-2 border-secondary font-bold py-1" href="#home">Home</a>
                <a class="font-title-lg text-on-surface-variant hover:text-primary transition-colors" href="#about">About</a>
                <a class="font-title-lg text-on-surface-variant hover:text-primary transition-colors" href="#services">Services</a>
                <a class="font-title-lg text-on-surface-variant hover:text-primary transition-colors" href="#japan-study">Japan Study</a>
                <a class="font-title-lg text-on-surface-variant hover:text-primary transition-colors" href="#contact">Contact</a>
            </nav>
            <a href="#contact" class="bg-primary-container text-on-secondary px-6 py-3 rounded-full font-label-lg hover:bg-opacity-90 transition-all active:scale-95">
                Consult Now
            </a>
        </div>
    </header>