<?php

/**
 * The template for the homepage.
 */

get_header(); // This calls header.php
?>

<main class="flex-grow flex flex-col gap-[clamp(3rem,8vw,6rem)]">
    <!-- Hero Section -->
    <?php
    // 1. Fetch the data from the database
    $hero_image                  = get_field('hero_image');
    $hero_title                  = get_field('hero_title');
    $hero_description            = get_field('content');
    $hero_bg_url                 = get_field('hero_background');
    $core_services_1_title       = get_field('core_services_1_title');
    $core_services_1_description = get_field('core_services_1_description');
    $core_services_2_title       = get_field('core_services_2_title');
    $core_services_2_description = get_field('core_services_2_description');
    $core_services_3_title       = get_field('core_services_3_title');
    $core_services_3_description = get_field('core_services_3_description');
    $core_services_4_title       = get_field('core_services_4_title');
    $core_services_4_description = get_field('core_services_4_description');
    $common_question_1           = get_field('common_question_1');
    $common_answer_1             = get_field('common_answer_1');
    $common_question_2           = get_field('common_question_2');
    $common_answer_2             = get_field('common_answer_2');

    // Fallback image in case the client forgets to upload one
    if (! $hero_image) {
        $hero_image = get_template_directory_uri() . '/assets/img/default-hero.jpg';
    }
    ?>

    <!-- echo get_sub_field('hero_image'); -->
    <!-- echo get_field('hero_image'); -->

    <section class="reveal relative w-full min-h-[min(80vh,600px)] flex items-center justify-center overflow-hidden bg-surface-container-low wave-divider">
        <div class="absolute inset-0 z-0" data-parallax="0.3">
            <img alt="<?php echo esc_attr($hero_title); ?>"
                class="w-full h-full object-cover object-center opacity-30 mix-blend-multiply scale-105"
                loading="eager"
                src="<?php echo esc_url($hero_image); ?>" />
        </div>

        <div class="relative z-10 w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto text-center py-12 sm:py-16 md:py-20">

            <?php if (!empty($hero_badge)) : ?>
                <span class="inline-block px-4 py-1.5 rounded-full bg-primary/10 text-primary font-label-sm text-label-sm mb-4 sm:mb-6 uppercase tracking-wider reveal-blur stagger-1">
                    <?php echo esc_html($hero_badge); ?>
                </span>
            <?php endif; ?>

            <?php if (!empty($hero_title)) : ?>
                <h1 class="font-display-lg text-display-lg text-primary mb-4 sm:mb-6 max-w-4xl mx-auto reveal-blur stagger-2 text-shimmer">
                    <?php echo esc_html($hero_title); ?>
                </h1>
            <?php endif; ?>

            <?php if (!empty($hero_description)) : ?>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-8 sm:mb-10 text-[#2f3033] reveal-blur stagger-3">
                    <?php echo esc_html($hero_description); // esc_html allows safe HTML like <br> tags 
                    ?>
                </p>
            <?php endif; ?>

            <!-- <div class="flex flex-col sm:flex-row items-center justify-center gap-4 reveal stagger-4">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="w-full sm:w-auto px-6 sm:px-8 py-3 sm:py-3.5 rounded-full bg-[#002366] text-white font-label-lg text-label-lg btn-hover btn-magnetic shadow-md text-center">Start Your Journey</a>
                <a href="<?php echo esc_url(home_url('/study-hub')); ?>" class="w-full sm:w-auto px-6 sm:px-8 py-3 sm:py-3.5 rounded-full border border-outline text-primary font-label-lg text-label-lg btn-hover btn-magnetic flex items-center justify-center gap-2 group glass">
                    <span class="material-symbols-outlined transition-transform duration-300 group-hover:rotate-12" style="font-variation-settings: 'FILL' 1">play_circle</span>
                    How It Works
                </a>
            </div> -->
        </div>
    </section>

    <!-- Bento Grid Services -->
    <section class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto">
        <div class="reveal text-center mb-10 sm:mb-16">
            <h2 class="font-headline-lg text-headline-lg text-primary mb-4">Core Services</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Comprehensive support tailored
                for your academic success.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
            <!-- University Admissions -->
            <div
                class="reveal-flip stagger-1 md:col-span-2 bg-white rounded-3xl p-6 sm:p-8 lg:p-10 shadow-sm border border-outline-variant/30 card-interaction tilt-card card-shimmer gradient-border icon-hover-bounce">
                <div class="w-12 h-12 rounded-2xl bg-primary/5 flex items-center justify-center mb-6 sm:mb-8 text-primary">
                    <span class="material-symbols-outlined text-2xl"
                        style="font-variation-settings: &quot;FILL&quot; 1">school</span>
                </div>
                <h3 class="font-title-lg text-xl sm:text-2xl text-primary mb-3 sm:mb-4 tilt-inner">University Admissions</h3>
                <p class="font-body-md text-body-lg text-[#2f3033] mb-6 sm:mb-8 leading-relaxed">End-to-end assistance with university
                    selection, application processing, and interview preparation to secure your spot in top Japanese
                    institutions.</p>
                <a class="inline-flex items-center text-primary font-label-lg text-label-lg group cursor-pointer"
                    href="our_service.html">
                    <span class="hover:underline">Learn more</span>
                    <span
                        class="material-symbols-outlined text-sm ml-2 transition-all duration-300 group-hover:translate-x-2">arrow_forward</span>
                </a>
            </div>
            <!-- Language Prep -->
            <div
                class="reveal-flip stagger-2 bg-white rounded-3xl p-6 sm:p-8 lg:p-10 shadow-sm border border-outline-variant/30 card-interaction tilt-card card-shimmer gradient-border icon-hover-bounce flex flex-col">
                <div
                    class="w-12 h-12 rounded-2xl bg-tertiary-container/10 flex items-center justify-center mb-6 sm:mb-8 text-tertiary">
                    <span class="material-symbols-outlined text-2xl"
                        style="font-variation-settings: &quot;FILL&quot; 1">translate</span>
                </div>
                <h3 class="font-title-lg text-xl sm:text-2xl text-primary mb-3 sm:mb-4 tilt-inner">Language Prep</h3>
                <p class="font-body-md text-body-md text-[#424750] leading-relaxed">Intensive JLPT and NAT preparation courses
                    tailored for rapid proficiency in the Japanese language.</p>
            </div>
            <!-- Visa Processing -->
            <div
                class="reveal-flip stagger-3 bg-white rounded-3xl p-6 sm:p-8 lg:p-10 shadow-sm border border-outline-variant/30 card-interaction tilt-card card-shimmer gradient-border icon-hover-bounce flex flex-col">
                <div
                    class="w-12 h-12 rounded-2xl bg-secondary-container/10 flex items-center justify-center mb-6 sm:mb-8 text-secondary">
                    <span class="material-symbols-outlined text-2xl"
                        style="font-variation-settings: &quot;FILL&quot; 1">description</span>
                </div>
                <h3 class="font-title-lg text-xl sm:text-2xl text-primary mb-3 sm:mb-4 tilt-inner">Visa Processing</h3>
                <p class="font-body-md text-body-md text-[#424750] leading-relaxed">Streamlined documentation support ensuring
                    high visa success rates for students and researchers.</p>
            </div>
            <!-- Accommodation Support -->
            <div
                class="reveal-flip stagger-4 md:col-span-2 bg-white rounded-3xl p-6 sm:p-8 lg:p-10 shadow-sm border border-outline-variant/30 card-interaction tilt-card card-shimmer gradient-border icon-hover-bounce overflow-hidden relative">
                <div class="absolute right-0 top-0 w-1/2 h-full opacity-[0.03] pointer-events-none hidden sm:block" data-parallax="0.2">
                    <span class="material-symbols-outlined text-[180px] sm:text-[240px]"
                        style="font-variation-settings: &quot;FILL&quot; 1">apartment</span>
                </div>
                <div class="relative z-10 w-full md:w-2/3">
                    <div
                        class="w-12 h-12 rounded-2xl bg-error-container/20 flex items-center justify-center mb-6 sm:mb-8 text-[#93000a]">
                        <span class="material-symbols-outlined text-2xl"
                            style="font-variation-settings: &quot;FILL&quot; 1">home_work</span>
                    </div>
                    <h3 class="font-title-lg text-xl sm:text-2xl text-primary mb-3 sm:mb-4 tilt-inner">Accommodation Support</h3>
                    <p class="font-body-md text-body-md text-[#424750] mb-6 sm:mb-8 leading-relaxed">Secure, affordable housing options
                        close to your campus before you even arrive in Japan.</p>
                    <a class="inline-flex items-center text-primary font-label-lg text-label-lg group cursor-pointer"
                        href="our_service.html">
                        <span class="hover:underline">View options</span>
                        <span
                            class="material-symbols-outlined text-sm ml-2 transition-all duration-300 group-hover:translate-x-2">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (Smooth Transitions) -->
    <section class="w-[min(100%-clamp(2rem,5vw,8rem),56rem)] mx-auto reveal pb-12 sm:pb-16 lg:pb-24">
        <div class="text-center mb-10 sm:mb-16">
            <h2 class="font-headline-lg text-headline-lg text-primary mb-4">Common Questions</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Everything you need to know about starting your
                journey.</p>
        </div>
        <div class="space-y-4">
            <div
                class="faq-item group bg-white rounded-2xl p-5 sm:p-6 cursor-pointer border border-outline-variant/40 hover:border-primary/20 hover:shadow-sm transition-all duration-300"
                onclick="toggleFaq(this)">
                <div class="flex justify-between items-center gap-4">
                    <h4 class="font-title-lg text-primary">What are the JLPT requirements for university?</h4>
                    <span class="material-symbols-outlined text-primary arrow-icon shrink-0">expand_more</span>
                </div>
                <div class="faq-content">
                    <p class="font-body-md text-on-surface-variant">Most universities require at least N2 proficiency for
                        regular degree programs, though many English-taught programs accept candidates with N5 proficiency while
                        providing Japanese language support.</p>
                </div>
            </div>
            <div
                class="faq-item group bg-white rounded-2xl p-5 sm:p-6 cursor-pointer border border-outline-variant/40 hover:border-primary/20 hover:shadow-sm transition-all duration-300"
                onclick="toggleFaq(this)">
                <div class="flex justify-between items-center gap-4">
                    <h4 class="font-title-lg text-primary">Can I work part-time while studying?</h4>
                    <span class="material-symbols-outlined text-primary arrow-icon shrink-0">expand_more</span>
                </div>
                <div class="faq-content">
                    <p class="font-body-md text-on-surface-variant">Yes, students are generally allowed to work up to 28 hours
                        per week during school terms and up to 40 hours per week during long holidays with a valid permit.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-8 reveal stagger-2">
            <a href="contact_faq_modern.html"
                class="inline-flex items-center text-primary font-label-lg text-label-lg group btn-hover border border-primary rounded-full px-6 py-2.5">
                View All FAQs
                <span
                    class="material-symbols-outlined text-sm ml-2 transition-all duration-300 group-hover:translate-x-2">arrow_forward</span>
            </a>
        </div>
    </section>
</main>

<?php
get_footer(); // This calls footer.php