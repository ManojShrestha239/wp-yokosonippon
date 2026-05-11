<?php

/**
 * The front page template file.
 * Single Page Flow: Hero -> About -> Services -> Why Us -> Japan Process -> Requirements -> Testimonials -> Gallery -> Inquiry -> Contact
 */

get_header(); ?>

<main class="mt-20">

    <?php
    // 1. Hero Section
    get_template_part('template-parts/sections/hero');

    // 2. About Consultancy
    get_template_part('template-parts/sections/about');

    // 3. Services
    get_template_part('template-parts/sections/services');

    // 4. Why Choose Us
    get_template_part('template-parts/sections/why-us');

    // 5. Japan Study 
    get_template_part('template-parts/sections/japan-study');

    // 6. Requirements
    get_template_part('template-parts/sections/requirements');

    // 7. Testimonials
    get_template_part('template-parts/sections/testimonials');

    // 8. Gallery
    get_template_part('template-parts/sections/gallery');

    // 9. Inquiry Form
    get_template_part('template-parts/sections/inquiry-form');
    ?>

</main><!-- #primary -->

<?php get_footer(); ?>