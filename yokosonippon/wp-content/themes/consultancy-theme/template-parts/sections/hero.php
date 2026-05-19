<?php if (! defined('ABSPATH')) exit; ?>
<!-- Hero Section -->
<section class="relative min-h-[819px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0 bg-[#002a58]">
        <!-- <img
            class="parallax-img absolute w-full object-cover opacity-80 mix-blend-overlay"
            data-parallax-speed="0.3"
            alt="Hero Image"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiCcx_dpPIRCH3qC_B3p1P0u-5br3NAJvDwYOE1BqMpJtEXoe62MtiAfqMXDBPhvAH3lFkDI2swv9j_J2bLFNS9gCMJvp4iO1E4I3JnfOPqSoPxj2MBy5R3InIutc90FHTb4HCtd6gu4SqOX44AOZK88AJewPVDmhEnySi0dcXRpGT8M4K8m2W_36WtSdZY46jtwK7spGw2DMruqr13-6VYc_nucOE78M4FWPVCltavjYVA7NMlyK07EG4fWdVcTKxM3gy78iJy9ZQ" /> -->

        <!-- Dynamic Background Image -->
        <?php if (get_field('hero_bg_image')): ?>
            <img class="parallax-img absolute w-full object-cover opacity-80 mix-blend-overlay" data-parallax-speed="0.3" alt="Hero Image" src="<?php echo esc_url(get_field('hero_bg_image')); ?>" />
        <?php endif; ?>
        <div
            class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent">
        </div>
    </div>
    <div
        class="relative z-10 max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop w-full">
        <div class="max-w-2xl js-reveal">
            <h1
                class="font-display-lg text-display-lg text-primary mb-stack-sm">
                <?php echo esc_html(get_field('hero_headline')); ?>
            </h1>
            <p
                class="font-body-lg text-body-lg text-on-surface-variant mb-stack-lg">
                <?php echo esc_html(get_field('hero_subtitle')); ?>
            </p>
            <div class="flex flex-wrap gap-4">
                <button
                    class="btn bg-secondary text-on-secondary px-8 py-4 rounded-full font-label-lg shadow-lg">
                    Get Started
                </button>
                <button
                    class="btn border-2 border-secondary text-secondary px-8 py-4 rounded-full font-label-lg">
                    Learn More
                </button>
            </div>
        </div>
    </div>
</section>