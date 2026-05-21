<?php

/**
 * Template Name: About Us Layout
 * * This template handles the complex Bento grid and timeline for the About page.
 */

get_header();
?>

<main class="flex-grow">
    <section class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto section-gap wave-divider">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div class="space-y-5 sm:space-y-6 reveal-blur pr-0 lg:pr-8 xl:pr-12">
                <div class="inline-flex items-center gap-2 bg-secondary-fixed text-on-secondary-fixed-variant px-4 py-2 rounded-full font-label-sm text-label-sm animate-pulse-soft w-max reveal-blur stagger-1">
                    <span class="material-symbols-outlined text-[16px]">school</span>
                    Empowering Nepali Students
                </div>
                <h1 class="font-display-lg text-display-lg text-on-surface leading-tight font-bold text-shimmer reveal-blur stagger-2">
                    Guiding Your Journey to Excellence in Japan.
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl reveal-blur stagger-3">
                    At Yokoso Nippon Educational Consultancy Pvt. Ltd., we bridge the gap between ambition and achievement, providing comprehensive consultancy services to help you navigate your educational path in Japan.
                </p>
            </div>
            <div class="relative aspect-[4/3] lg:aspect-auto lg:h-[min(500px,60vh)] rounded-[24px] overflow-hidden shadow-md group reveal-scale stagger-3 mt-6 lg:mt-0" data-parallax="0.2">
                <img alt="Japanese landscape" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about-hero.jpg" />
                <div class="absolute inset-0 bg-gradient-to-tr from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
        </div>
    </section>

    <section class="w-full bg-surface-container-low section-gap overflow-hidden">
        <div class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto space-y-8 sm:space-y-12">
            <div class="text-center space-y-4 max-w-2xl mx-auto reveal-blur">
                <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold text-glow">Our Story</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant reveal-blur stagger-1">
                    Founded on the principle of accessible education, we've guided thousands of students to success.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6">
                <div class="md:col-span-2 bg-surface rounded-[24px] p-6 sm:p-8 lg:p-10 shadow-sm flex flex-col justify-center min-h-[250px] sm:min-h-[300px] hover:shadow-md transition-all duration-300 reveal-flip stagger-1 group border border-outline-variant/30 tilt-card card-shimmer gradient-border icon-hover-bounce">
                    <div class="space-y-4">
                        <span class="material-symbols-outlined text-primary text-3xl transition-transform duration-300 group-hover:scale-110">history_edu</span>
                        <h3 class="font-title-lg text-title-lg text-on-surface font-medium">The Beginning</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                            What started as a small advisory desk in Kathmandu has grown into a premier consultancy. We recognized the profound need for trustworthy, transparent guidance for students aiming to study in Japan.
                        </p>
                    </div>
                </div>

                <div class="bg-primary rounded-[24px] p-6 sm:p-8 lg:p-10 shadow-sm flex flex-col justify-center text-on-primary min-h-[250px] sm:min-h-[300px] hover:shadow-md transition-all duration-300 reveal-scale stagger-2 group glass-dark">
                    <div class="space-y-4">
                        <h3 class="font-display-lg text-display-lg font-bold transition-transform duration-500 group-hover:scale-105 origin-left">5k+</h3>
                        <p class="font-body-lg text-body-lg text-on-primary/90">Students successfully placed in top Japanese institutions.</p>
                    </div>
                </div>

                <div class="bg-surface rounded-[24px] p-6 sm:p-8 lg:p-10 shadow-sm flex flex-col justify-center items-center text-center min-h-[250px] sm:min-h-[300px] hover:shadow-md transition-all duration-300 reveal-flip stagger-3 group border border-outline-variant/30 tilt-card card-shimmer gradient-border icon-hover-spin">
                    <span class="material-symbols-outlined text-secondary text-4xl mb-4 transition-all duration-300 group-hover:scale-110" style="font-variation-settings: 'FILL' 1">handshake</span>
                    <h3 class="font-title-lg text-title-lg text-on-surface font-medium">Trusted Partners</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-2">Partnered with over 50 leading universities and language schools across Japan.</p>
                </div>

                <div class="md:col-span-2 bg-surface rounded-[24px] overflow-hidden shadow-sm relative min-h-[250px] sm:min-h-[300px] reveal-scale stagger-4 group" data-parallax="0.15">
                    <img alt="Students studying" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/students.jpg" />
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex flex-col justify-end p-6 sm:p-8 lg:p-10 transition-opacity duration-500">
                        <h3 class="font-title-lg text-title-lg text-white font-medium">Shaping Futures</h3>
                        <p class="font-body-md text-body-md text-white/90 mt-2 max-w-lg">
                            Our alumni network spans across major Japanese cities, forming a supportive community for new arrivals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto section-gap-sm bg-background">
        <div class="text-center space-y-4 mb-8 sm:mb-12 reveal-blur">
            <h2 class="font-headline-lg text-headline-lg text-primary font-semibold text-glow">
                Moments of Success &amp; Campus Life
            </h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto reveal-blur stagger-1">
                Witness the vibrant journey of our students as they embrace life and
                education in the heart of Japan.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <!-- Image 1 -->
            <div
                class="group relative overflow-hidden rounded-[24px] aspect-[4/3] shadow-sm reveal-scale cursor-pointer card-shimmer">
                <img alt="Japanese Scenery"
                    class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBj66ZDbrv07wEBYCeLgFGnQyOlTUNwfJoDGygN2GRmezcXTtYA-LO4dJm-Ze34cFbMXKrzWGIULMGtM8AfR3_jZDSqL4nqnfW7DZu6gsPxQ6NQsZYBKPuJvrqbO08eALR0MgTorLBVf7NfK5vqlxmDsnKsgKsrpw9JozGpX_rRr5V4x6KFnstaNDH-5A0_l1RyQx26bkpwSfE4ql6nm8bi1V4g1qz19xc2xSpaW_Oy9vKeTJaz45dzZyL9cCPvEOhEna8bO2SlUiI1" />
            </div>
            <!-- Image 2 -->
            <div
                class="group relative overflow-hidden rounded-[24px] aspect-[4/3] shadow-sm reveal-scale cursor-pointer card-shimmer">
                <img alt="Student Life" class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAezRkclIU43KTvSCYek2ta1JhhY5w9H_cflzIEpD8uQmh9rR-zdaEZEtZLz3R2Va-5zXcRO1KsTRD2ixQu-5lgq2L7dqy5KiAqJat-5Hws3axjuk3wgXHB-7P9e3LF5BpyNHIMNw9d_044e4rr5Vd0PfMf_-l29xCDCxS-Qar5WMQFxo7Be-a2fZRYzqEHXUgMZ5lpcXGhd_M6aNHgidoow0HGWpUjmM7DQIWNm6KhesPRmviPrxId02O_hvAhxqdfyLnHpBNB_xhC" />
            </div>
            <!-- Image 3 -->
            <div
                class="group relative overflow-hidden rounded-[24px] aspect-[4/3] shadow-sm reveal-scale cursor-pointer card-shimmer">
                <img alt="Office Seminar" class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBj66ZDbrv07wEBYCeLgFGnQyOlTUNwfJoDGygN2GRmezcXTtYA-LO4dJm-Ze34cFbMXKrzWGIULMGtM8AfR3_jZDSqL4nqnfW7DZu6gsPxQ6NQsZYBKPuJvrqbO08eALR0MgTorLBVf7NfK5vqlxmDsnKsgKsrpw9JozGpX_rRr5V4x6KFnstaNDH-5A0_l1RyQx26bkpwSfE4ql6nm8bi1V4g1qz19xc2xSpaW_Oy9vKeTJaz45dzZyL9cCPvEOhEna8bO2SlUiI1" />
            </div>
            <!-- Image 4 -->
            <div
                class="group relative overflow-hidden rounded-[24px] aspect-[4/3] shadow-sm reveal-scale cursor-pointer card-shimmer">
                <img alt="Cultural Exchange"
                    class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAezRkclIU43KTvSCYek2ta1JhhY5w9H_cflzIEpD8uQmh9rR-zdaEZEtZLz3R2Va-5zXcRO1KsTRD2ixQu-5lgq2L7dqy5KiAqJat-5Hws3axjuk3wgXHB-7P9e3LF5BpyNHIMNw9d_044e4rr5Vd0PfMf_-l29xCDCxS-Qar5WMQFxo7Be-a2fZRYzqEHXUgMZ5lpcXGhd_M6aNHgidoow0HGWpUjmM7DQIWNm6KhesPRmviPrxId02O_hvAhxqdfyLnHpBNB_xhC" />
            </div>
            <!-- Image 5 -->
            <div
                class="group relative overflow-hidden rounded-[24px] aspect-[4/3] shadow-sm reveal-scale cursor-pointer card-shimmer">
                <img alt="Student Achievement"
                    class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBj66ZDbrv07wEBYCeLgFGnQyOlTUNwfJoDGygN2GRmezcXTtYA-LO4dJm-Ze34cFbMXKrzWGIULMGtM8AfR3_jZDSqL4nqnfW7DZu6gsPxQ6NQsZYBKPuJvrqbO08eALR0MgTorLBVf7NfK5vqlxmDsnKsgKsrpw9JozGpX_rRr5V4x6KFnstaNDH-5A0_l1RyQx26bkpwSfE4ql6nm8bi1V4g1qz19xc2xSpaW_Oy9vKeTJaz45dzZyL9cCPvEOhEna8bO2SlUiI1" />
            </div>
            <!-- Image 6 -->
            <div
                class="group relative overflow-hidden rounded-[24px] aspect-[4/3] shadow-sm reveal-scale cursor-pointer card-shimmer">
                <img alt="Tokyo Campus" class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAezRkclIU43KTvSCYek2ta1JhhY5w9H_cflzIEpD8uQmh9rR-zdaEZEtZLz3R2Va-5zXcRO1KsTRD2ixQu-5lgq2L7dqy5KiAqJat-5Hws3axjuk3wgXHB-7P9e3LF5BpyNHIMNw9d_044e4rr5Vd0PfMf_-l29xCDCxS-Qar5WMQFxo7Be-a2fZRYzqEHXUgMZ5lpcXGhd_M6aNHgidoow0HGWpUjmM7DQIWNm6KhesPRmviPrxId02O_hvAhxqdfyLnHpBNB_xhC" />
            </div>
        </div>
        <!-- <div class="mt-8 sm:mt-12 text-center reveal stagger-4">
            <button
                class="btn-hover btn-magnetic font-label-lg text-label-lg text-primary border border-primary px-8 py-3 rounded-full hover:bg-surface-container-low transition-all duration-300">
                View Full Gallery
            </button>
        </div> -->
    </section>
</main>

<?php
get_footer();
?>