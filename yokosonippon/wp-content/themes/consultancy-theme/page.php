<?php

/**
 * The template for displaying all single pages.
 */

get_header(); // Pulls in your head, global elements, and nav menu
?>

<main class="flex-grow w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto py-12">
    <?php
    while (have_posts()) :
        the_post();
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="mb-8 reveal">
                <h1 class="font-display-lg text-display-lg text-primary font-bold">
                    <?php the_title(); ?>
                </h1>
            </header>

            <div class="font-body-lg text-on-surface-variant reveal stagger-1">
                <?php
                // This outputs any text typed directly into the WordPress block editor
                the_content();
                ?>
            </div>
        </article>
    <?php
    endwhile;
    ?>
</main>

<?php
get_footer(); // Pulls in your footer and enqueued scripts