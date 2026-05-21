<footer class="reveal bg-[#f8f9fa] border-t border-outline-variant/30 mt-auto" role="contentinfo">
    <div class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto py-12 sm:py-16 lg:py-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-12">

            <div class="sm:col-span-2 lg:col-span-4 flex flex-col gap-4 sm:gap-6 reveal-left">
                <img alt="Yokoso Nippon Educational Consultancy Pvt. Ltd.
 Logo" class="h-14 sm:h-16 w-auto object-contain self-start" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" />
                <div class="font-title-lg text-title-lg font-bold text-primary">Yokoso Nippon Educational Consultancy Pvt. Ltd.
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant text-[#424750] leading-relaxed">
                    Empowering Nepali Students for Excellence in Japan.
                </p>
            </div>

            <div class="lg:col-span-4 flex flex-col gap-4 lg:pt-16 reveal stagger-2">
                <h4 class="font-label-lg text-label-lg font-bold text-primary mb-1 uppercase tracking-wider">Contact Us</h4>
                <div class="flex flex-col gap-3 font-body-md text-on-surface-variant">
                    <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-sm opacity-80">location_on</span><span>Khairahani-8, Parsa, Chitwan</span></div>
                    <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-sm opacity-80">mail</span><a class="hover:text-primary transition-colors" href="mailto:nipponparsaedu@gmail.com">nipponparsaedu@gmail.com</a></div>
                    <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-sm opacity-80">smartphone</span><a href="tel:9749828725" class="hover:text-primary transition-colors">+977 9749828725</a></div>
                    <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-sm opacity-80">call</span><a href="tel:056494410" class="hover:text-primary transition-colors">056494410</a></div>
                </div>
            </div>

            <div class="lg:col-span-4 flex flex-col gap-4 lg:pt-16 lg:items-end text-left lg:text-right reveal-right stagger-3">
                <h4 class="font-label-lg text-label-lg font-bold text-primary mb-1 uppercase tracking-wider">Quick Links</h4>
                <nav class="flex flex-col gap-3" aria-label="Footer navigation">
                    <?php
                    // Dynamically fetch the Footer menu from Appearance > Menus
                    if (has_nav_menu('footer')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'container'      => false,
                            'items_wrap'     => '%3$s', // Strips the <ul>
                            'walker'         => new Yokoso_Tailwind_Nav_Walker(),
                            'fallback_cb'    => false,
                        ));
                    } else {
                        // Safe fallback just in case the menu isn't assigned yet
                        echo '<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-all duration-300 opacity-80 hover:opacity-100" href="' . esc_url(home_url('/')) . '">Home</a>';
                    }
                    ?>
                </nav>
            </div>
        </div>

        <div class="mt-8 sm:mt-12 pt-6 sm:pt-8 border-t border-outline-variant/20 flex flex-col sm:flex-row justify-center sm:justify-between gap-4 items-center text-center sm:text-left">
            <p class="font-body-md text-body-md text-on-surface-variant/70 text-[#424750]">© <span class="copyright-year"><?php echo date('Y'); ?></span> Yokoso Nippon Educational Consultancy Pvt. Ltd.
                . All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); /* Essential for scripts to load */ ?>
</body>

</html>