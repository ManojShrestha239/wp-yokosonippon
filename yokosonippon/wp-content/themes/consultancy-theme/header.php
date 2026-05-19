<!doctype html>
<html <?php language_attributes(); ?> class="light scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <?php wp_head(); /* Essential for WP core and plugins */ ?>
</head>

<body <?php body_class('bg-background text-on-background font-body-md antialiased min-h-screen min-h-[100dvh] flex flex-col'); ?>>
    <?php wp_body_open(); ?>

    <div id="preloader" aria-hidden="true">
        <img class="preloader-logo" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" alt="Loading..." />
        <div class="preloader-bar"></div>
    </div>
    <div class="scroll-progress" aria-hidden="true"></div>
    <div class="page-transition-overlay" aria-hidden="true"></div>
    <canvas id="particles-canvas" aria-hidden="true"></canvas>

    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 transition-all duration-300 border-b border-outline-variant/20" role="banner">
        <div class="flex justify-between items-center w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto py-3 sm:py-4">

            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 hover:opacity-80 transition-opacity shrink-0">
                <img alt="<?php bloginfo('name'); ?> Logo" class="h-10 sm:h-12 w-auto object-contain" loading="eager" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" />
            </a>

            <nav class="hidden lg:flex items-center gap-6 xl:gap-8" aria-label="Main navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex gap-6',
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>

            <div class="flex items-center gap-2 sm:gap-4">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="hidden lg:inline-flex items-center justify-center font-label-lg text-label-lg font-medium rounded-full border border-primary text-primary hover:bg-primary/5 transition-colors px-5 py-2 xl:px-6 xl:py-2.5 btn-hover">Contact</a>
                <a href="<?php echo esc_url(home_url('/apply')); ?>" class="hidden lg:inline-flex items-center justify-center font-label-lg text-label-lg font-medium px-5 py-2 xl:px-6 xl:py-2.5 rounded-full bg-[#002366] text-white hover:bg-primary/90 transition-colors shadow-sm btn-hover">Apply Now</a>
                <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-full hover:bg-surface-container-low transition-colors" aria-label="Open menu" aria-expanded="false">
                    <span class="material-symbols-outlined text-on-surface">menu</span>
                </button>
            </div>
        </div>
    </header>