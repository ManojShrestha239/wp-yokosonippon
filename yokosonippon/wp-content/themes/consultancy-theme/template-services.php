<?php

/**
 * Template Name: Our Services Layout
 * * This template handles the complex Bento grid and timeline for the About page.
 */

get_header();
?>

<main
    class="flex-grow w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto flex flex-col gap-[clamp(2rem,5vw,3rem)] py-8 sm:py-12 lg:py-16">
    <!-- Hero Section -->
    <section class="text-center max-w-3xl mx-auto pt-4 sm:pt-8 reveal">
        <h1 class="font-display-lg text-display-lg font-bold text-primary mb-4 sm:mb-6 reveal-blur text-shimmer">
            Comprehensive Guidance for Your Journey
        </h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed reveal-blur stagger-1">
            From mastering the language to settling into your new dorm, our
            expertly crafted services ensure every step of your transition to
            studying in Japan is seamless and successful.
        </p>
    </section>
    <!-- Services Grid -->
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6" id="services-grid">
        <!-- Service Card 1 -->
        <div
            class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">translate</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3">
                Language Preparation
            </h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow">
                Immersive JLPT coaching ranging from N5 to N2, equipped with
                authentic materials and native-speaking instructors to ensure your
                fluency.
            </p>
        </div>
        <!-- Service Card 2 -->
        <div
            class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-secondary text-on-primary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">support_agent</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3">
                Interview Preparation
            </h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow">
                Rigorous mock interview sessions tailored for university admissions
                and visa screenings, building your confidence and articulation.
            </p>
        </div>
        <!-- Service Card 3 -->
        <div
            class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">psychology</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3">
                Academic Counseling
            </h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow">
                Personalized sessions to align your career aspirations with the
                ideal Japanese university, program, and scholarship opportunities.
            </p>
        </div>
        <!-- Service Card 4 -->
        <div
            class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-primary text-on-primary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">description</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3">Documentation</h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow">
                Meticulous review and translation of academic transcripts,
                statements of purpose, and financial documents to meet strict
                institutional standards.
            </p>
        </div>
        <!-- Service Card 5 -->
        <div
            class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-secondary text-on-primary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">flight_takeoff</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3">
                Student Visa Processing
            </h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow">
                End-to-end guidance through the complex Certificate of Eligibility
                (COE) and visa application process to ensure a hassle-free approval.
            </p>
        </div>
        <!-- Service Card 6 -->
        <div
            class="reveal-flip group bg-surface-container-lowest rounded-[24px] p-6 sm:p-8 service-card-hover flex flex-col cursor-pointer tilt-card card-shimmer gradient-border icon-hover-bounce">
            <div class="w-12 sm:w-14 h-12 sm:h-14 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center mb-5 sm:mb-6">
                <span class="material-symbols-outlined text-2xl sm:text-3xl">luggage</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2 sm:mb-3">
                Pre-departure Briefing
            </h3>
            <p class="text-sm text-on-surface-variant leading-relaxed flex-grow">
                Comprehensive seminars covering cultural etiquette, finding
                accommodation, opening bank accounts, and daily life in Japan.
            </p>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="reveal relative rounded-[24px] overflow-hidden mt-8 sm:mt-12 lg:mt-16"
        id="cta-section" style="
          background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuBc_oOlJ71AmygFyNQOwS7215f5CiqU3xrADAl-FCBgM8skN2YcnrUS4SVJsfvoVvbQ6fzBR__w6JDlcoq-4xrupPERjUzKq5uOKlQMjtIApzFlFzoae0AkYBN4dGNNeqm_CrzPqqQo8ZANNd3FuGyCPZ4_aVrm9eswjSqHQa-X0ohI1_j5kXbmQF3a0pQ1em7604_Og-P8Q17eCNH2unbLJgnJcVeuIMDjZjnTPu_WmkIoJbFCijXMlH-57MhOIPiGGoNN7qhu0VSe&quot;);
          background-size: cover;
          background-position: center center;
        ">
        <div class="absolute inset-0 bg-primary/90 transition-colors duration-700"></div>
        <div
            class="relative z-10 px-6 sm:px-8 lg:px-12 py-12 sm:py-16 lg:py-20 text-center flex flex-col items-center justify-center h-full">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-on-primary mb-4 sm:mb-6 reveal-blur text-glow max-w-3xl">
                Ready to Begin Your Educational Adventure?
            </h2>
            <p class="text-base sm:text-lg text-primary-fixed-dim max-w-2xl mb-8 sm:mb-10 reveal-blur stagger-1">
                Let our experienced consultants architect your pathway to Japan's
                top universities. The first consultation is entirely free.
            </p>
            <a href="contact_faq_modern.html"
                class="group font-bold bg-surface-container-lowest text-primary rounded-full px-6 sm:px-8 py-3 sm:py-4 shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 flex items-center gap-2 btn-magnetic btn-hover reveal stagger-2">
                Start Your Application
                <span
                    class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
?>