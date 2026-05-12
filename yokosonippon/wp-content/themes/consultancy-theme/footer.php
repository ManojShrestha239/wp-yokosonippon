<?php

/**
 * The footer for our theme
 */
if (! defined('ABSPATH')) exit;
?>
<footer class="bg-surface-container-highest w-full rounded-t-[24px]">
    <div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-stack-lg gap-gutter max-w-7xl mx-auto">
        <div class="font-title-lg font-bold text-primary">
            <?php bloginfo('name'); ?>
        </div>
        <div class="flex gap-6">
            <a class="font-body-md text-on-surface-variant hover:text-primary transition-all" href="#">Privacy Policy</a>
            <a class="font-body-md text-on-surface-variant hover:text-primary transition-all" href="#">Terms of Service</a>
        </div>
        <p class="font-body-md text-on-surface-variant text-center md:text-right">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
        </p>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a class="fixed bottom-8 right-8 w-14 h-14 bg-[#25D366] text-white rounded-full flex items-center justify-center shadow-2xl hover:scale-110 transition-transform z-50" href="https://wa.me/97798XXXXXXXX" target="_blank">
    <span class="material-symbols-outlined">chat</span>
</a>

<?php wp_footer(); /* Crucial: WP hooks into this for footer scripts */ ?>
</body>

</html>