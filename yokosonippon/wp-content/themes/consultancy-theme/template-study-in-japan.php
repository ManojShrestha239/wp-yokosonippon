<?php

/**
 * Template Name: Study In Japan Layout
 * * This template handles the complex Bento grid and timeline for the About page.
 */

get_header();
?>

<main class="flex-grow">
    <!-- Refined Hero Section -->
    <section class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto py-8 sm:py-12 lg:py-20 wave-divider">
        <div class="relative rounded-3xl overflow-hidden bg-surface-container-low min-h-[300px] sm:min-h-[350px] lg:min-h-[400px] flex items-center">
            <img
                alt="Cherry blossoms"
                class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-multiply"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCY-ahJwFv7MblUtF1ck_t80lQ2WE2NWu12gPy68fbf_PjgBgXTyTOzn0pHEx02oTQK5yMWtKnLSN_wXZdMneAIOQgt9DEpSwlT1M0msaf9w8ZHDdoxpyWRlWoBZPpYpbC-ilWUdjRTF2V7FqmgxqHqsfyeBSrvMgkUUbrNDlmsHAvxnWZMFo3iYK1LAwKb6TGDzieUCTcHKd5pu7DGs5CpAHe-88j5ZAoBUkzk-GicujRI4TTeL90agYkyxy0-DJUCKb3fN64paabV"
                data-parallax="0.3" />
            <div class="relative z-10 p-6 sm:p-8 lg:p-16 max-w-3xl">
                <h1 class="font-display-lg text-display-lg text-primary mb-4 sm:mb-6 leading-tight reveal-blur text-shimmer">
                    Unlock Your Future in Japan
                </h1>
                <p class="font-body-lg text-body-lg mb-6 sm:mb-8 text-on-surface-variant max-w-2xl reveal-blur stagger-1">
                    Comprehensive guidance on universities, scholarships, and the visa
                    process for international students seeking world-class education.
                </p>
                <div class="flex flex-col sm:flex-row flex-wrap gap-3 sm:gap-4 reveal stagger-2">
                    <button
                        class="bg-primary text-on-primary font-label-lg text-label-lg rounded-full px-6 sm:px-8 py-3 hover:bg-primary/90 transition-colors btn-magnetic btn-hover text-center">
                        Find a Program
                    </button>
                    <button
                        class="bg-surface-container-lowest text-primary font-label-lg text-label-lg rounded-full px-6 sm:px-8 py-3 border border-outline-variant hover:bg-surface-container-low transition-colors flex items-center justify-center gap-2 glass btn-hover">
                        <span>Download Guide</span>
                        <span class="material-symbols-outlined text-[18px]">download</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Study in Japan (Simplified Cards) -->
    <section class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto section-gap-sm">
        <div class="mb-8 sm:mb-12 text-center md:text-left">
            <h2 class="font-headline-lg text-headline-lg text-primary reveal-blur text-glow">
                Why Choose Japan?
            </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6 lg:gap-8">
            <div
                class="stagger-item stagger-1 bg-surface-container-lowest rounded-2xl border border-outline-variant/30 p-6 sm:p-8 shadow-soft hover:shadow-hover transition-all tilt-card card-shimmer icon-hover-bounce gradient-border reveal-flip">
                <div class="w-12 h-12 rounded-full bg-primary/5 text-primary flex items-center justify-center mb-5 sm:mb-6">
                    <span class="material-symbols-outlined icon-fill">school</span>
                </div>
                <h3 class="font-title-lg text-title-lg text-primary mb-2 sm:mb-3">
                    Academic Excellence
                </h3>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    Home to numerous top-ranking universities globally, particularly
                    strong in STEM, business, and arts.
                </p>
            </div>
            <div
                class="stagger-item stagger-2 bg-surface-container-lowest rounded-2xl border border-outline-variant/30 p-6 sm:p-8 shadow-soft hover:shadow-hover transition-all tilt-card card-shimmer icon-hover-spin gradient-border reveal-flip">
                <div class="w-12 h-12 rounded-full bg-tertiary/5 text-tertiary flex items-center justify-center mb-5 sm:mb-6">
                    <span class="material-symbols-outlined icon-fill">currency_yen</span>
                </div>
                <h3 class="font-title-lg text-title-lg text-primary mb-2 sm:mb-3">
                    Financial Support
                </h3>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    Extensive scholarship opportunities from the government (MEXT) and
                    private institutions.
                </p>
            </div>
            <div
                class="stagger-item stagger-3 bg-surface-container-lowest rounded-2xl border border-outline-variant/30 p-6 sm:p-8 shadow-soft hover:shadow-hover transition-all tilt-card card-shimmer icon-hover-bounce gradient-border reveal-flip sm:col-span-2 lg:col-span-1">
                <div class="w-12 h-12 rounded-full bg-secondary/5 text-secondary flex items-center justify-center mb-5 sm:mb-6">
                    <span class="material-symbols-outlined icon-fill">safety_check</span>
                </div>
                <h3 class="font-title-lg text-title-lg text-primary mb-2 sm:mb-3">
                    Safe Environment
                </h3>
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    Consistently ranked as one of the safest countries in the world
                    with excellent healthcare infrastructure.
                </p>
            </div>
        </div>
    </section>
    <!-- Essential Documentation -->
    <section class="bg-surface-container-lowest border-y border-outline-variant/20 section-gap">
        <div class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto">
            <div class="mb-8 sm:mb-12 text-center max-w-2xl mx-auto">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-3 sm:mb-4 reveal-blur text-glow">
                    Essential Documentation
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Prepare these documents to ensure a smooth application process.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5 lg:gap-6">
                <div class="stagger-item bg-surface rounded-xl p-5 sm:p-6 border border-outline-variant/30 reveal-flip card-shimmer gradient-border icon-hover-bounce">
                    <span class="material-symbols-outlined text-primary mb-3 sm:mb-4 text-[24px] sm:text-[28px]">description</span>
                    <h3 class="font-title-lg text-title-lg text-primary mb-2 text-base sm:text-lg">
                        Academic Transcripts
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm">
                        SLC/SEE &amp; +2/Equivalence academic records and mark sheets.
                    </p>
                </div>
                <div class="stagger-item stagger-2 bg-surface rounded-xl p-5 sm:p-6 border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary mb-3 sm:mb-4 text-[24px] sm:text-[28px]">badge</span>
                    <h3 class="font-title-lg text-title-lg text-primary mb-2 text-base sm:text-lg">
                        Character Certificates
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm">
                        Official character certificates from your previous educational
                        institutions.
                    </p>
                </div>
                <div class="stagger-item stagger-3 bg-surface rounded-xl p-5 sm:p-6 border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary mb-3 sm:mb-4 text-[24px] sm:text-[28px]">family_history</span>
                    <h3 class="font-title-lg text-title-lg text-primary mb-2 text-base sm:text-lg">
                        Relationship Certificate
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm">
                        Certified proof of relationship with your financial sponsors.
                    </p>
                </div>
                <div class="stagger-item stagger-4 bg-surface rounded-xl p-5 sm:p-6 border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary mb-3 sm:mb-4 text-[24px] sm:text-[28px]">cake</span>
                    <h3 class="font-title-lg text-title-lg text-primary mb-2 text-base sm:text-lg">
                        Birth Certificate
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm">
                        Valid birth certificate issued by the local government
                        authority.
                    </p>
                </div>
                <div class="stagger-item stagger-5 bg-surface rounded-xl p-5 sm:p-6 border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary mb-3 sm:mb-4 text-[24px] sm:text-[28px]">account_balance</span>
                    <h3 class="font-title-lg text-title-lg text-primary mb-2 text-base sm:text-lg">
                        Bank Statement
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm">
                        Bank balance &amp; statement showing a minimum of 6 months
                        history.
                    </p>
                </div>
                <div class="stagger-item stagger-6 bg-surface rounded-xl p-5 sm:p-6 border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary mb-3 sm:mb-4 text-[24px] sm:text-[28px]">work</span>
                    <h3 class="font-title-lg text-title-lg text-primary mb-2 text-base sm:text-lg">
                        Work Experience
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm">
                        Applicable if you have professional gaps or relevant work
                        history.
                    </p>
                </div>
                <div class="stagger-item stagger-7 bg-surface rounded-xl p-5 sm:p-6 border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary mb-3 sm:mb-4 text-[24px] sm:text-[28px]">passport</span>
                    <h3 class="font-title-lg text-title-lg text-primary mb-2 text-base sm:text-lg">
                        Passport
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm">
                        Valid passport with at least 1 year validity from date of
                        application.
                    </p>
                </div>
                <div class="stagger-item stagger-8 bg-surface rounded-xl p-5 sm:p-6 border border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary mb-3 sm:mb-4 text-[24px] sm:text-[28px]">photo_camera</span>
                    <h3 class="font-title-lg text-title-lg text-primary mb-2 text-base sm:text-lg">
                        Photo
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm">
                        Recent PP size photographs with a plain white background.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Your Path to Japan (Simplified Timeline) -->
    <section class="section-gap">
        <div class="w-[min(100%-clamp(2rem,5vw,8rem),56rem)] mx-auto">
            <div class="mb-10 sm:mb-16 text-center">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-3 sm:mb-4 reveal-blur text-glow">
                    Your Path to Japan
                </h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    From your first consultation to landing in Japan, here's what to
                    expect.
                </p>
            </div>
            <div class="relative pl-8 md:pl-0">
                <div class="absolute left-[39px] md:left-1/2 top-0 bottom-0 w-px bg-outline-variant/50 -translate-x-1/2 timeline-line"></div>
                <div class="space-y-8 sm:space-y-12 relative">
                    <!-- Step 1 -->
                    <div class="flex items-start md:items-center md:justify-between w-full stagger-item stagger-1 group">
                        <div class="hidden md:block w-[45%] text-right pr-8 lg:pr-12">
                            <h3 class="font-title-lg text-title-lg text-primary mb-2">
                                Counseling &amp; Enrollment
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Begin your journey with expert counseling and Japanese
                                language school enrollment.
                            </p>
                        </div>
                        <div
                            class="absolute left-0 md:relative md:left-auto w-10 h-10 rounded-full bg-surface border border-outline-variant text-primary font-medium z-10 flex items-center justify-center -translate-x-1/2 md:translate-x-0 shrink-0 group-hover:border-primary group-hover:bg-primary/5 transition-colors">
                            1
                        </div>
                        <div class="w-full md:w-[45%] pl-8 md:pl-8 lg:pl-12">
                            <div class="md:hidden">
                                <h3 class="font-title-lg text-title-lg text-primary mb-2">
                                    Counseling &amp; Enrollment
                                </h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Begin your journey with expert counseling and Japanese
                                    language school enrollment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="flex items-start md:items-center md:justify-between w-full stagger-item stagger-2 group">
                        <div class="hidden md:block w-[45%]"></div>
                        <div
                            class="absolute left-0 md:relative md:left-auto w-10 h-10 rounded-full bg-surface border border-outline-variant text-primary font-medium z-10 flex items-center justify-center -translate-x-1/2 md:translate-x-0 shrink-0 group-hover:border-primary group-hover:bg-primary/5 transition-colors">
                            2
                        </div>
                        <div class="w-full md:w-[45%] pl-8 md:pl-8 lg:pl-12 text-left">
                            <h3 class="font-title-lg text-title-lg text-primary mb-2">
                                Document &amp; Preparation
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Collection of documents and intensive preparation for
                                NAT/JLPT proficiency tests.
                            </p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="flex items-start md:items-center md:justify-between w-full stagger-item stagger-3 group">
                        <div class="hidden md:block w-[45%] text-right pr-8 lg:pr-12">
                            <h3 class="font-title-lg text-title-lg text-primary mb-2">
                                COE Application
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Submission of your Certificate of Eligibility (COE)
                                application to Japanese Immigration.
                            </p>
                        </div>
                        <div
                            class="absolute left-0 md:relative md:left-auto w-10 h-10 rounded-full bg-surface border border-outline-variant text-primary font-medium z-10 flex items-center justify-center -translate-x-1/2 md:translate-x-0 shrink-0 group-hover:border-primary group-hover:bg-primary/5 transition-colors">
                            3
                        </div>
                        <div class="w-full md:w-[45%] pl-8 md:pl-8 lg:pl-12">
                            <div class="md:hidden">
                                <h3 class="font-title-lg text-title-lg text-primary mb-2">
                                    COE Application
                                </h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Submission of your Certificate of Eligibility (COE)
                                    application to Japanese Immigration.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div class="flex items-start md:items-center md:justify-between w-full stagger-item stagger-4 group">
                        <div class="hidden md:block w-[45%]"></div>
                        <div
                            class="absolute left-0 md:relative md:left-auto w-10 h-10 rounded-full bg-surface border border-outline-variant text-primary font-medium z-10 flex items-center justify-center -translate-x-1/2 md:translate-x-0 shrink-0 group-hover:border-primary group-hover:bg-primary/5 transition-colors">
                            4
                        </div>
                        <div class="w-full md:w-[45%] pl-8 md:pl-8 lg:pl-12 text-left">
                            <h3 class="font-title-lg text-title-lg text-primary mb-2">
                                COE Result &amp; Payment
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Receive your COE result and proceed with the initial tuition
                                fee payment to your school.
                            </p>
                        </div>
                    </div>
                    <!-- Step 5 -->
                    <div class="flex items-start md:items-center md:justify-between w-full stagger-item stagger-5 group">
                        <div class="hidden md:block w-[45%] text-right pr-8 lg:pr-12">
                            <h3 class="font-title-lg text-title-lg text-primary mb-2">
                                Visa Interview
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Final visa interview at the Embassy and getting the visa
                                sticker on your passport.
                            </p>
                        </div>
                        <div
                            class="absolute left-0 md:relative md:left-auto w-10 h-10 rounded-full bg-surface border border-outline-variant text-primary font-medium z-10 flex items-center justify-center -translate-x-1/2 md:translate-x-0 shrink-0 group-hover:border-primary group-hover:bg-primary/5 transition-colors">
                            5
                        </div>
                        <div class="w-full md:w-[45%] pl-8 md:pl-8 lg:pl-12">
                            <div class="md:hidden">
                                <h3 class="font-title-lg text-title-lg text-primary mb-2">
                                    Visa Interview
                                </h3>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Final visa interview at the Embassy and getting the visa
                                    sticker on your passport.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Step 6 -->
                    <div class="flex items-start md:items-center md:justify-between w-full stagger-item stagger-6 group">
                        <div class="hidden md:block w-[45%]"></div>
                        <div
                            class="absolute left-0 md:relative md:left-auto w-10 h-10 rounded-full bg-surface border border-outline-variant text-primary font-medium z-10 flex items-center justify-center -translate-x-1/2 md:translate-x-0 shrink-0 group-hover:border-primary group-hover:bg-primary/5 transition-colors">
                            6
                        </div>
                        <div class="w-full md:w-[45%] pl-8 md:pl-8 lg:pl-12 text-left">
                            <h3 class="font-title-lg text-title-lg text-primary mb-2">
                                Departure &amp; Flight
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Comprehensive pre-departure briefing and booking your flight
                                to Japan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>