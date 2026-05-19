<footer class="reveal bg-[#f8f9fa] border-t border-outline-variant/30 mt-auto" role="contentinfo">
    <div class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto py-12 sm:py-16 lg:py-20">
        <div class="mt-8 sm:mt-12 pt-6 sm:pt-8 border-t border-outline-variant/20 flex flex-col sm:flex-row justify-center sm:justify-between gap-4 items-center text-center sm:text-left">
            <p class="font-body-md text-body-md text-on-surface-variant/70 text-[#424750]">© <span class="copyright-year"><?php echo date('Y'); ?></span> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); /* Essential for scripts to load */ ?>
</body>

</html>