<?php if (! defined('ABSPATH')) exit; ?>
<!-- Inquiry & Contact Section -->
<section
    class="py-stack-lg bg-primary-container text-on-primary"
    id="contact">
    <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="grid lg:grid-cols-2 gap-16">
            <div class="js-reveal">
                <h2 class="font-headline-lg text-headline-lg mb-stack-md">
                    Send us an Inquiry
                </h2>
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="font-label-sm block mb-2">Full Name</label>
                            <input
                                class="w-full bg-white/10 border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-secondary focus:border-secondary"
                                placeholder="John Doe"
                                type="text" />
                        </div>
                        <div>
                            <label class="font-label-sm block mb-2">Email Address</label>
                            <input
                                class="w-full bg-white/10 border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-secondary focus:border-secondary"
                                placeholder="john@example.com"
                                type="email" />
                        </div>
                    </div>
                    <div>
                        <label class="font-label-sm block mb-2">Service Interested In</label>
                        <select
                            class="w-full bg-white/10 border-white/20 rounded-xl px-4 py-3 text-white focus:ring-secondary focus:border-secondary">
                            <option class="text-on-surface">Language Classes</option>
                            <option class="text-on-surface">Visa Counseling</option>
                            <option class="text-on-surface">Documentation</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-label-sm block mb-2">Your Message</label>
                        <textarea
                            class="w-full bg-white/10 border-white/20 rounded-xl px-4 py-3 text-white placeholder-white/50 focus:ring-secondary focus:border-secondary"
                            placeholder="Tell us about your goals..."
                            rows="4"></textarea>
                    </div>
                    <button
                        class="btn bg-secondary text-on-secondary px-10 py-4 rounded-full font-label-lg w-full md:w-auto shadow-lg">
                        Submit Inquiry
                    </button>
                </form>
            </div>
            <div class="space-y-8 js-reveal js-reveal--delay-2">
                <h2 class="font-headline-lg text-headline-lg mb-stack-md">
                    Contact Details
                </h2>
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div>
                            <h4 class="font-label-lg">Address</h4>
                            <p class="font-body-md text-white/80">
                                Lions Chowk, Bharatpur-10, Chitwan, Nepal
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined">phone</span>
                        </div>
                        <div>
                            <h4 class="font-label-lg">Phone</h4>
                            <p class="font-body-md text-white/80">+977 56 523456</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div>
                            <h4 class="font-label-lg">Email</h4>
                            <p class="font-body-md text-white/80">
                                info@yokosonippon.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>