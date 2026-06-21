<?php

/**
 * Template Name: Our Services Layout
 *
 * This template handles the complex Bento grid and timeline for the Services page.
 * Refactored with robust field maps and fallback configurations to fix Rank Math calculation bugs.
 */

defined('ABSPATH') || exit;

get_header();
?>

<main class="flex-grow w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto flex flex-col gap-[clamp(2rem,5vw,3rem)] py-8 sm:py-12 lg:py-16">
    <?php
    // 1. Fetch the data cleanly from the database
    $page_data                  = get_fields();
    $hero                       = $page_data['hero_section'] ?? [];
    $education                  = $page_data['educational_adventure'] ?? [];

    // Hero Section Field Maps
    $hero_title                 = $hero['title'] ?? '';
    $hero_content               = $hero['content'] ?? '';

    // Dynamic Service Card Field Infrastructure (Allows Rank Math detection over standard text layers)
    $s1_title = get_field('s1_title') ?: 'Language Preparation';
    $s1_desc  = get_field('s1_description') ?: 'Immersive JLPT coaching ranging from N5 to N2, equipped with authentic materials and native-speaking instructors to ensure your fluency.';

    $s2_title = get_field('s2_title') ?: 'Interview Preparation';
    $s2_desc  = get_field('s2_description') ?: 'Rigorous mock interview sessions tailored for university admissions and visa screenings, building your confidence and articulation.';

    $s3_title = get_field('s3_title') ?: 'Academic Counseling';
    $s3_desc  = get_field('s3_description') ?: 'Personalized sessions to align your career aspirations with the ideal Japanese university, program, and scholarship opportunities.';

    $s4_title = get_field('s4_title') ?: 'Documentation';
    $s4_desc  = get_field('s4_description') ?: 'Meticulous review and translation of academic transcripts, statements of purpose, and financial documents to meet strict institutional standards.';

    $s5_title = get_field('s5_title') ?: 'Student Visa Processing';
    $s5_desc  = get_field('s5_description') ?: 'End-to-end guidance through the complex Certificate of Eligibility (COE) and visa application process to ensure a hassle-free approval.';

    $s6_title = get_field('s6_title') ?: 'Pre-departure Briefing';
    $s6_desc  = get_field('s6_description') ?: 'Comprehensive seminars covering cultural etiquette, finding accommodation, opening bank accounts, and daily life in Japan.';

    // Educational / CTA Section Field Maps
    $edu_title                  = $education['title'] ?? '';
    $edu_content                = $education['content'] ?? '';
    $edu_button_title           = $education['button_title'] ?? '';
    $cta_bg_img                 = get_field('cta_background_image') ?: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBc_oOlJ71AmygFyNQOwS7215f5CiqU3xrADAl-FCBgM8skN2YcnrUS4SVJsfvoVvbQ6fzBR__w6JDlcoq-4xrupPERjUzKq5uOKlQMjtIApzFlFzoae0AkYBN4dGNNeqm_CrzPqqQo8ZANNd3FuGyCPZ4_aVrm9eswjSqHQa-X0ohI1_j5kXbmQF3a0pQ1em7604_Og-P8Q17eCNH2unbLJgnJcVeuIMDjZjnTPu_WmkIoJbFCijXMlH-57MhOIPiGGoNN7qhu0VSe';
    ?>

    <section class="text-center max-w-3xl mx-auto pt-4 sm:pt-8 reveal">
        <?php if (!empty($hero_title)): ?>
            <h1 class="font-display-lg text-display-lg font-bold text-primary mb-4 sm:mb-6 reveal-blur text-shimmer">
                <?php echo esc_html($hero_title); ?>
            </h1>
        <?php endif; ?>

        <?php if (!empty($hero_content)): ?>
            <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed reveal-blur stagger-1">
                <?php echo esc_html($hero_content); ?>
            </p>
        <?php endif; ?>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6" id="services-grid">
        <div class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">translate</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3"><?php echo esc_html($s1_title); ?></h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow"><?php echo esc_html($s1_desc); ?></p>
        </div>

        <div class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-secondary text-on-primary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">support_agent</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3"><?php echo esc_html($s2_title); ?></h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow"><?php echo esc_html($s2_desc); ?></p>
        </div>

        <div class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">psychology</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3"><?php echo esc_html($s3_title); ?></h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow"><?php echo esc_html($s3_desc); ?></p>
        </div>

        <div class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">description</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3"><?php echo esc_html($s4_title); ?></h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow"><?php echo esc_html($s4_desc); ?></p>
        </div>

        <div class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-secondary text-on-primary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">flight_takeoff</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3"><?php echo esc_html($s5_title); ?></h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow"><?php echo esc_html($s5_desc); ?></p>
        </div>

        <div class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">luggage</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3"><?php echo esc_html($s6_title); ?></h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow"><?php echo esc_html($s6_desc); ?></p>
        </div>
    </section>

    <section class="reveal relative rounded-[24px] overflow-hidden mt-8 sm:mt-12 lg:mt-16" id="cta-section" style="background-image: url('<?php echo esc_url($cta_bg_img); ?>'); background-size: cover; background-position: center center;">
        <div class="absolute inset-0 bg-primary/90 transition-colors duration-700"></div>
        <div class="relative z-10 px-6 sm:px-8 lg:px-12 py-12 sm:py-16 lg:py-20 text-center flex flex-col items-center justify-center h-full">
            <?php if (!empty($edu_title)): ?>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-on-primary mb-4 sm:mb-6 reveal-blur text-glow max-w-3xl">
                    <?php echo esc_html($edu_title); ?>
                </h2>
            <?php endif; ?>

            <?php if (!empty($edu_content)): ?>
                <p class="text-base sm:text-lg text-primary-fixed-dim max-w-2xl mb-8 sm:mb-10 reveal-blur stagger-1">
                    <?php echo esc_html($edu_content); ?>
                </p>
            <?php endif; ?>

            <?php if (!empty($edu_button_title)): ?>
                <a href="<?php echo esc_url(site_url('/contact')); ?>" class="group font-bold bg-surface-container-lowest text-primary rounded-full px-6 sm:px-8 py-3 sm:py-4 shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 flex items-center gap-2 btn-magnetic btn-hover reveal stagger-2">
                    <?php echo esc_html($edu_button_title); ?>
                    <span class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
