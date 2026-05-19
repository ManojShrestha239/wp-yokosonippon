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

    <div id="mobile-overlay" class="mobile-overlay fixed inset-0 bg-black/40 z-[60] backdrop-blur-sm"></div>

    <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 w-[min(280px,85vw)] h-full bg-white z-[70] shadow-2xl flex flex-col p-6 overflow-y-auto">
        <div class="flex justify-between items-center mb-8">
            <span class="font-title-lg text-primary font-bold">Menu</span>
            <button id="mobile-menu-close" class="p-2 rounded-full hover:bg-surface-container-low transition-colors" aria-label="Close menu">
                <span class="material-symbols-outlined text-on-surface">close</span>
            </button>
        </div>

        <nav class="flex flex-col gap-2" aria-label="Mobile navigation">
            <?php
            if (has_nav_menu('mobile')) {
                wp_nav_menu(array(
                    'theme_location' => 'mobile',
                    'container'      => false,
                    'items_wrap'     => '%3$s', // Strips the <ul>
                    'walker'         => new Yokoso_Tailwind_Nav_Walker(), // Uses our custom class
                    'fallback_cb'    => false,
                ));
            }
            ?>
        </nav>

        <div class="mt-auto pt-8 flex flex-col gap-3">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-hover text-center font-label-lg text-label-lg font-medium rounded-full border border-primary text-primary px-6 py-2.5">Contact</a>
            <a href="<?php echo esc_url(home_url('/apply')); ?>" class="btn-hover text-center font-label-lg text-label-lg font-medium px-6 py-2.5 rounded-full bg-primary text-white shadow-sm">Apply Now</a>
        </div>
    </div>

    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 transition-all duration-300 border-b border-outline-variant/20" role="banner">
        <div class="flex justify-between items-center w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto py-3 sm:py-4">

            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 hover:opacity-80 transition-opacity shrink-0" aria-label="Yokoso Nippon Home">
                <img alt="<?php bloginfo('name'); ?> Logo" class="h-10 sm:h-12 w-auto object-contain" loading="eager" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" />
            </a>

            <nav class="hidden lg:flex items-center gap-6 xl:gap-8" aria-label="Main navigation">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '%3$s', // Strips the <ul>
                        'walker'         => new Yokoso_Tailwind_Nav_Walker(), // Uses our custom class
                        'fallback_cb'    => false,
                    ));
                }
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