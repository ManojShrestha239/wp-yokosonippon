<?php

/** 
 * Path: /template-parts/front-page.php 
 */
get_header(); ?>

<main class="mt-20">
    <?php
    $sections = [
        'hero',
        'about',
        'services',
        'why-us',
        'japan-study',
        'requirements',
        'testimonials',
        'gallery',
        'inquiry-form',
    ];

    foreach ($sections as $section) {
        get_template_part('template-parts/sections/' . $section);
    }
    ?>
</main>

<?php get_footer(); ?>