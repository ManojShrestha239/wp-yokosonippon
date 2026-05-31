<?php

/**
 * Template Name: Contact Layout
 * * This template handles the complex Bento grid and timeline for the About page.
 */
get_header();
?>

<main class="flex-grow flex flex-col pb-stack-lg gap-8 sm:gap-12">
    <!-- Hero Section -->
    <section class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto pt-8 sm:pt-12 lg:pt-16 pb-4 sm:pb-8 reveal active">
        <div class="flex flex-col items-center text-center max-w-3xl mx-auto gap-stack-md">
            <h1 class="font-display-lg text-display-lg text-primary font-bold reveal-blur text-shimmer">
                Get in Touch
            </h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant reveal-blur stagger-1">
                Your transformative journey to studying in Japan begins with a
                single conversation. Reach out to our expert counselors today.
            </p>
        </div>
    </section>

    <!-- Bento Grid Layout for Contact & Booking -->
    <section class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
            <!-- Consultation Booking Card -->
            <div class="lg:col-span-5 bg-surface-container-lowest rounded-[24px] shadow-sm border border-surface-variant flex flex-col gap-stack-md p-5 sm:p-6 lg:p-8 hover:shadow-md transition-shadow duration-500 reveal-left stagger-1 tilt-card gradient-border">
                <div class="flex items-center gap-stack-sm">
                    <div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center text-primary animate-pulse-soft">
                        <span class="material-symbols-outlined fill text-[24px]">event_available</span>
                    </div>
                    <h2 class="font-title-lg text-title-lg text-primary">
                        Book a Free Consultation
                    </h2>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    © <?php wp_date("Y") ?> Yokoso Nippon Educational Consultancy Pvt. Ltd. Empowering
                    Nepali Students for Excellence in Japan.
                </p>
                <!-- Interaction Focused Calendar -->
                <div class="bg-surface rounded-xl p-4 border border-outline-variant flex flex-col gap-stack-sm transition-all duration-300 focus-within:border-primary group">
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-label-lg text-label-lg font-bold text-on-surface">October 2024</span>
                        <div class="flex gap-2">
                            <button class="p-1 rounded-full hover:bg-surface-variant text-on-surface-variant active:scale-90 transition-all">
                                <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                            </button>
                            <button class="p-1 rounded-full hover:bg-surface-variant text-on-surface-variant active:scale-90 transition-all">
                                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-5 gap-2">
                        <button class="p-2 rounded-lg text-center font-label-sm text-label-sm hover:bg-surface-variant text-on-surface-variant transition-all hover:-translate-y-0.5 active:translate-y-0">
                            14<br /><span class="text-[9px]">Mon</span>
                        </button>
                        <button class="p-2 rounded-lg text-center font-label-sm text-label-sm bg-primary text-on-primary font-bold shadow-md transform scale-105">
                            15<br /><span class="text-[9px]">Tue</span>
                        </button>
                        <button class="p-2 rounded-lg text-center font-label-sm text-label-sm hover:bg-surface-variant text-on-surface-variant transition-all hover:-translate-y-0.5">
                            16<br /><span class="text-[9px]">Wed</span>
                        </button>
                        <button class="p-2 rounded-lg text-center font-label-sm text-label-sm hover:bg-surface-variant text-on-surface-variant transition-all hover:-translate-y-0.5">
                            17<br /><span class="text-[9px]">Thu</span>
                        </button>
                        <button class="p-2 rounded-lg text-center font-label-sm text-label-sm hover:bg-surface-variant text-on-surface-variant transition-all hover:-translate-y-0.5">
                            18<br /><span class="text-[9px]">Fri</span>
                        </button>
                    </div>
                    <div class="h-px bg-outline-variant my-2 w-full opacity-50"></div>
                    <div class="grid grid-cols-2 gap-2">
                        <button class="py-2 px-3 border border-outline-variant rounded-lg font-label-sm text-label-sm hover:border-primary hover:text-primary transition-all active:scale-95">
                            10:00 AM
                        </button>
                        <button class="py-2 px-3 border-2 border-primary bg-primary-fixed rounded-lg font-label-sm text-label-sm text-on-primary-fixed font-bold shadow-sm">
                            1:30 PM
                        </button>
                        <button class="py-2 px-3 border border-outline-variant rounded-lg font-label-sm text-label-sm hover:border-primary hover:text-primary transition-all active:scale-95">
                            3:00 PM
                        </button>
                        <button class="py-2 px-3 border border-outline-variant rounded-lg font-label-sm text-label-sm hover:border-primary hover:text-primary transition-all active:scale-95">
                            4:30 PM
                        </button>
                    </div>
                </div>
                <button class="mt-auto w-full font-label-lg text-label-lg text-on-primary bg-primary py-3 rounded-full hover:bg-primary-container transition-all active:scale-[0.98] duration-200 shadow hover:shadow-lg">
                    Confirm Booking
                </button>
            </div>

            <!-- Detailed Contact Form Card (CLEANED) -->
            <div class="lg:col-span-7 bg-surface-container-lowest rounded-[24px] shadow-sm border border-surface-variant p-5 sm:p-6 lg:p-8 reveal-right stagger-2 card-shimmer glass" style="transition-delay: 100ms">
                <h2 class="font-title-lg text-title-lg text-primary mb-stack-sm">
                    Send us a Message
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant mb-stack-md">
                    © 2024 Yokoso Nippon Educational Consultancy Pvt. Ltd. Empowering Nepali Students for Excellence in Japan.
                </p>

                <!-- 
      ENTERPRISE STANDARD: 
      We delegate form rendering to the CF7 engine via the master shortcode.
      Do not paste the raw field HTML here. Ensure you include the 'echo'.
    -->
                <div class="flex flex-col gap-6">
                    <?php echo do_shortcode('[contact-form-7 id="16ae1f3" title="Send us a Message"]'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Info & Map Section -->
    <section class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter bg-surface-container-low rounded-[24px] overflow-hidden shadow-sm my-8 sm:my-12 reveal-scale">
            <!-- Office Details -->
            <div class="p-stack-lg flex flex-col justify-center gap-stack-md reveal-left" style="transition-delay: 200ms">
                <h2 class="font-title-lg text-title-lg text-primary">
                    Our Headquarters
                </h2>
                <div class="flex flex-col gap-stack-sm">
                    <div class="flex items-start gap-4 hover:translate-x-2 transition-transform duration-300 group">
                        <div class="w-10 h-10 rounded-full bg-surface flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary group-hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[20px]">location_on</span>
                        </div>
                        <div>
                            <h3 class="font-label-lg text-label-lg font-bold text-on-surface">Address</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Khairahani-8, Parsa<br />Chitwan, Nepal
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 hover:translate-x-2 transition-transform duration-300 group">
                        <div class="w-10 h-10 rounded-full bg-surface flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary group-hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[20px]">call</span>
                        </div>
                        <div>
                            <h3 class="font-label-lg text-label-lg font-bold text-on-surface">Phone</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">056494410</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 hover:translate-x-2 transition-transform duration-300 group">
                        <div class="w-10 h-10 rounded-full bg-surface flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary group-hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[20px]">forum</span>
                        </div>
                        <div>
                            <h3 class="font-label-lg text-label-lg font-bold text-on-surface">WhatsApp / Viber</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">+977 9749828725</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 hover:translate-x-2 transition-transform duration-300 group">
                        <div class="w-10 h-10 rounded-full bg-surface flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary group-hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-[20px]">mail</span>
                        </div>
                        <div>
                            <h3 class="font-label-lg text-label-lg font-bold text-on-surface">Email</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">nipponparsaedu@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Map Placeholder -->
            <div class="relative min-h-[250px] sm:min-h-[300px] lg:min-h-full bg-surface-dim overflow-hidden group">
                <img alt="Map of Chitwan location" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDE6uvYn3uuHJPfHFellqrvm1veF2mfFiG42ix7CCZP_MbBGqbyJW0xLA3wlIgeROxgJo1q4nqFCgnqP4Mom6uBfPuhx4hUS7yVktkeabNMTReziUjejLD_Z5MbEN_fAGgXO_kUp3BPPByrlAeBCffzdd8ywi6cIZfQmEFryNjziGLqwWl0LAiwjr2q00rtvwzCW1per6l3RwCbsgN5MajebNjWEkQACW7JRHrF7yXni0oceffD850Dnf-N90gd2mbB5nh9VXGNAhT" />
                <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (Unchanged) -->
    <section class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto section-gap-sm">
        <div class="flex flex-col gap-stack-md reveal">
            <h2 class="font-headline-lg text-headline-lg text-primary text-center reveal-blur text-glow">
                Frequently Asked Questions
            </h2>
            <div class="max-w-4xl mx-auto w-full space-y-4 mt-8">
                <!-- Category: Visa -->
                <div class="group bg-surface-container-low rounded-[24px] overflow-hidden border border-surface-variant transition-all duration-500 hover:border-primary/30 hover:bg-surface-container gradient-border reveal">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none" onclick="this.parentElement.classList.toggle('open')">
                        <div class="flex flex-col gap-1">
                            <span class="font-label-sm text-primary uppercase tracking-wider transition-opacity duration-300 group-hover:opacity-100">Visa</span>
                            <h3 class="font-title-lg text-primary text-[18px]">
                                How long does the visa processing take?
                            </h3>
                        </div>
                        <div class="w-8 h-8 rounded-full flex items-center justify-center transition-colors duration-300 group-[.open]:bg-primary group-[.open]:text-on-primary">
                            <span class="material-symbols-outlined text-primary group-[.open]:text-inherit group-[.open]:rotate-180 transition-transform duration-500 ease-in-out">expand_more</span>
                        </div>
                    </button>
                    <div class="accordion-content">
                        <div>
                            <div class="px-6 pb-6 pt-2">
                                <p class="font-body-md text-on-surface leading-relaxed opacity-0 group-[.open]:opacity-100 transition-opacity duration-500 delay-100">
                                    The Certificate of Eligibility (COE) process typically
                                    takes 2-3 months. Once the COE is issued, the actual visa
                                    sticker at the embassy takes about 5-7 working days.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category: Language -->
                <div class="group bg-surface-container-low rounded-[24px] overflow-hidden border border-surface-variant transition-all duration-500 hover:border-primary/30 hover:bg-surface-container gradient-border reveal">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none" onclick="this.parentElement.classList.toggle('open')">
                        <div class="flex flex-col gap-1">
                            <span class="font-label-sm text-primary uppercase tracking-wider">Language</span>
                            <h3 class="font-title-lg text-primary text-[18px]">
                                What are the language requirements for a student visa?
                            </h3>
                        </div>
                        <div class="w-8 h-8 rounded-full flex items-center justify-center transition-colors duration-300 group-[.open]:bg-primary group-[.open]:text-on-primary">
                            <span class="material-symbols-outlined text-primary group-[.open]:text-inherit group-[.open]:rotate-180 transition-transform duration-500 ease-in-out">expand_more</span>
                        </div>
                    </button>
                    <div class="accordion-content">
                        <div>
                            <div class="px-6 pb-6 pt-2">
                                <p class="font-body-md text-on-surface leading-relaxed opacity-0 group-[.open]:opacity-100 transition-opacity duration-500 delay-100">
                                    Applicants usually need to show proof of at least 150
                                    hours of Japanese language study or a JLPT N5 level
                                    certificate for most language school enrollments.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category: Costs -->
                <div class="group bg-surface-container-low rounded-[24px] overflow-hidden border border-surface-variant transition-all duration-500 hover:border-primary/30 hover:bg-surface-container gradient-border reveal">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none" onclick="this.parentElement.classList.toggle('open')">
                        <div class="flex flex-col gap-1">
                            <span class="font-label-sm text-primary uppercase tracking-wider">Costs</span>
                            <h3 class="font-title-lg text-primary text-[18px]">
                                Are there scholarship opportunities available?
                            </h3>
                        </div>
                        <div class="w-8 h-8 rounded-full flex items-center justify-center transition-colors duration-300 group-[.open]:bg-primary group-[.open]:text-on-primary">
                            <span class="material-symbols-outlined text-primary group-[.open]:text-inherit group-[.open]:rotate-180 transition-transform duration-500 ease-in-out">expand_more</span>
                        </div>
                    </button>
                    <div class="accordion-content">
                        <div>
                            <div class="px-6 pb-6 pt-2">
                                <p class="font-body-md text-on-surface leading-relaxed opacity-0 group-[.open]:opacity-100 transition-opacity duration-500 delay-100">
                                    Yes, there are several scholarships like the MEXT
                                    scholarship and JASSO honors scholarship, though
                                    competition is high and they often require strong academic
                                    records.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>