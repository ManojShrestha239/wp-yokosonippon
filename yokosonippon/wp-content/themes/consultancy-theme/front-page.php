<?php

/**
 * The template for the homepage.
 */

get_header(); // This calls header.php
?>

<main class="flex-grow flex flex-col gap-[clamp(3rem,8vw,6rem)]">

    <section class="reveal relative w-full min-h-[min(80vh,600px)] flex items-center justify-center overflow-hidden bg-surface-container-low wave-divider">
    </section>

    <section class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto">
    </section>

    <section class="w-[min(100%-clamp(2rem,5vw,8rem),56rem)] mx-auto reveal pb-12 sm:pb-16 lg:pb-24">
    </section>

</main>

<?php
get_footer(); // This calls footer.php