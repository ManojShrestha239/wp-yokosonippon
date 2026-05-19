<?php if (! defined('ABSPATH')) exit; ?>
<!-- About Section -->
<section
    class="py-stack-lg max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop"
    id="about">
    <div class="grid md:grid-cols-2 gap-gutter items-center">
        <div
            class="surface-card p-base overflow-hidden js-reveal js-reveal--delay-1">
            <!-- image -->
            <?php if (get_field('about_image')): ?>
                <img class="rounded-[20px] w-full h-[400px] object-cover" alt="About Us" src="<?php echo esc_url(get_field('about_image')); ?>" />
            <?php endif; ?>
        </div>
        <div class="space-y-stack-md js-reveal js-reveal--delay-2">
            <span class="text-secondary font-label-lg uppercase tracking-wider">About Yokoso Nippon</span>
            <!-- headline -->
            <h2 class="font-headline-lg text-headline-lg text-primary">
                <?php echo esc_html(get_field('about_headline')); ?>
            </h2>
            <!-- subtitle -->
            <p class="font-body-lg text-body-lg text-on-surface-variant">
                <?php echo esc_html(get_field('about_subtitle')); ?>
            </p>
            <div class="grid grid-cols-2 gap-4">
                <div class="surface-card p-stack-md bg-secondary-container/10">
                    <span class="font-display-lg text-primary block"><?php echo esc_html(get_field('about_years_of_expertise')); ?>+</span>
                    <span class="font-label-lg text-on-surface-variant">Years of Expertise</span>
                </div>
                <div class="surface-card p-stack-md bg-tertiary-container/10">
                    <span class="font-display-lg text-tertiary block"><?php echo esc_html(get_field('about_successful_visas')); ?>+</span>
                    <span class="font-label-lg text-on-surface-variant">Successful Visas</span>
                </div>
            </div>
        </div>
    </div>
</section>