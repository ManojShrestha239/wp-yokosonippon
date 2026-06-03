/* ============================================
   YOKOSO NIPPON - Shared Header & Footer
   Responsive, mobile-first component library.
   Single source of truth.
   ============================================ */

const LOGO_URL =
  "https://lh3.googleusercontent.com/aida-public/AB6AXuCkp-J2BtMd7_6P3WR-bGi8M8JyoxspxVx-yNQVNRKTXBzVVXDDr5PDkMLeZKVx1KKvEa6gvyjErTnZdxi73nT3stsuY9n_8Dv6ZP0fP4q9WKROKsNwdDioxzgbSvjIjP2XScYaPLtpTgKuqz_Ft3h0ua3c2DsnTY6C3bY_LY0YNnDSnRN0gyzgdemj-5UpEEKxiiuXWN0bexdCC8mTxhP3urxa2XrqSGsJvB8UVQ38bwTk-UgNXkxW--niH9QKYeJngG51wLTGW13h";

const NAV_ITEMS = [
  { label: "Home", href: "index.html" },
  { label: "Study Hub", href: "study_in_japan.html" },
  { label: "Services", href: "our_service.html" },
  { label: "About Us", href: "about_us.html" },
];

// Detect active page from current URL
function getActivePage() {
  const path = window.location.pathname;
  const file = path.substring(path.lastIndexOf("/") + 1) || "index.html";
  return file;
}

// ============================================
// HEADER COMPONENT (Responsive)
// ============================================
function renderHeader() {
  const activePage = getActivePage();

  const navLinks = NAV_ITEMS.map((item) => {
    const isActive = activePage === item.href;
    return isActive
      ? `<a class="nav-link active text-primary font-bold pb-1 font-label-lg text-label-lg" href="${item.href}">${item.label}</a>`
      : `<a class="nav-link text-on-surface-variant hover:text-primary transition-colors duration-300 font-label-lg text-label-lg px-2 py-2" href="${item.href}">${item.label}</a>`;
  }).join("\n");

  const isContactActive = activePage === "contact_faq_modern.html";

  const mobileNavLinks = NAV_ITEMS.map((item) => {
    const isActive = activePage === item.href;
    return isActive
      ? `<a class="px-4 py-3 rounded-xl text-primary font-bold bg-primary/5 font-label-lg text-label-lg" href="${item.href}">${item.label}</a>`
      : `<a class="px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-all font-label-lg text-label-lg" href="${item.href}">${item.label}</a>`;
  }).join("\n");

  const contactMobileActive = isContactActive
    ? `<a class="px-4 py-3 rounded-xl text-primary font-bold bg-primary/5 font-label-lg text-label-lg" href="contact_faq_modern.html">Contact & FAQ</a>`
    : `<a class="px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-all font-label-lg text-label-lg" href="contact_faq_modern.html">Contact & FAQ</a>`;

  return `
  <!-- Mobile Overlay -->
  <div id="mobile-overlay" class="mobile-overlay fixed inset-0 bg-black/40 z-[60] backdrop-blur-sm"></div>
  <!-- Mobile Menu Drawer -->
  <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 w-[min(280px,85vw)] h-full bg-white z-[70] shadow-2xl flex flex-col p-6 overflow-y-auto">
    <div class="flex justify-between items-center mb-8">
      <span class="font-title-lg text-primary font-bold">Menu</span>
      <button id="mobile-menu-close" class="p-2 rounded-full hover:bg-surface-container-low transition-colors" aria-label="Close menu">
        <span class="material-symbols-outlined text-on-surface">close</span>
      </button>
    </div>
    <nav class="flex flex-col gap-2" aria-label="Mobile navigation">
      ${mobileNavLinks}
      ${contactMobileActive}
    </nav>
    <div class="mt-auto pt-8 flex flex-col gap-3">
      <a href="contact_faq_modern.html" class="btn-hover text-center font-label-lg text-label-lg font-medium rounded-full border border-primary text-primary px-6 py-2.5">Contact</a>
      <a href="contact_faq_modern.html" class="btn-hover text-center font-label-lg text-label-lg font-medium px-6 py-2.5 rounded-full bg-primary text-white shadow-sm">Apply Now</a>
    </div>
  </div>
  <!-- Header -->
  <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 transition-all duration-300 border-b border-outline-variant/20" role="banner">
    <div class="flex justify-between items-center w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto py-3 sm:py-4">
      <a href="index.html" class="flex items-center gap-3 hover:opacity-80 transition-opacity shrink-0" aria-label="Yokoso Nippon Home">
        <img alt="Yokoso Nippon Logo" class="h-10 sm:h-12 w-auto object-contain" loading="eager" src="${LOGO_URL}" />
      </a>
      <nav class="hidden lg:flex items-center gap-6 xl:gap-8" aria-label="Main navigation">
        ${navLinks}
      </nav>
      <div class="flex items-center gap-2 sm:gap-4">
        <a href="contact_faq_modern.html" class="hidden lg:inline-flex items-center justify-center font-label-lg text-label-lg font-medium rounded-full border border-primary text-primary hover:bg-primary/5 transition-colors px-5 py-2 xl:px-6 xl:py-2.5 btn-hover">Contact</a>
        <a href="contact_faq_modern.html" class="hidden lg:inline-flex items-center justify-center font-label-lg text-label-lg font-medium px-5 py-2 xl:px-6 xl:py-2.5 rounded-full bg-[#002366] text-white hover:bg-primary/90 transition-colors shadow-sm btn-hover">Apply Now</a>
        <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-full hover:bg-surface-container-low transition-colors" aria-label="Open menu" aria-expanded="false">
          <span class="material-symbols-outlined text-on-surface">menu</span>
        </button>
      </div>
    </div>
  </header>`;
}

// ============================================
// FOOTER COMPONENT (Responsive)
// ============================================
function renderFooter() {
  return `
  <footer class="reveal bg-[#f8f9fa] border-t border-outline-variant/30 mt-auto" role="contentinfo">
    <div class="w-[min(100%-clamp(2rem,5vw,8rem),80rem)] mx-auto py-12 sm:py-16 lg:py-20">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-12">
        <!-- Brand Column -->
        <div class="sm:col-span-2 lg:col-span-4 flex flex-col gap-4 sm:gap-6 reveal-left">
          <img alt="Yokoso Nippon Logo" class="h-14 sm:h-16 w-auto object-contain self-start" loading="lazy" src="${LOGO_URL}" />
          <div class="font-title-lg text-title-lg font-bold text-primary">Yokoso Nippon Educational Consultancy Pvt. Ltd.</div>
          <p class="font-body-md text-body-md text-on-surface-variant text-[#424750] leading-relaxed">Empowering Nepali Students for Excellence in Japan.</p>
        </div>
        <!-- Contact Info Column -->
        <div class="lg:col-span-4 flex flex-col gap-4 lg:pt-16 reveal stagger-2">
          <h4 class="font-label-lg text-label-lg font-bold text-primary mb-1 uppercase tracking-wider">Contact Us</h4>
          <div class="flex flex-col gap-3 font-body-md text-on-surface-variant">
            <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-sm opacity-80">location_on</span><span>Khairahani-8, Parsa, Chitwan</span></div>
            <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-sm opacity-80">mail</span><a class="hover:text-primary transition-colors" href="mailto:nipponparsaedu@gmail.com">nipponparsaedu@gmail.com</a></div>
            <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-sm opacity-80">smartphone</span><a href="tel:9749828725" class="hover:text-primary transition-colors">9749828725</a></div>
            <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-sm opacity-80">call</span><a href="tel:056494410" class="hover:text-primary transition-colors">056494410</a></div>
          </div>
        </div>
        <!-- Links Column -->
        <div class="lg:col-span-4 flex flex-col gap-4 lg:pt-16 lg:items-end text-left lg:text-right reveal-right stagger-3">
          <h4 class="font-label-lg text-label-lg font-bold text-primary mb-1 uppercase tracking-wider">Quick Links</h4>
          <nav class="flex flex-col gap-3" aria-label="Footer navigation">
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-all duration-300 opacity-80 hover:opacity-100" href="index.html">Home</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-all duration-300 opacity-80 hover:opacity-100" href="study_in_japan.html">Study Hub</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-all duration-300 opacity-80 hover:opacity-100" href="our_service.html">Services</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-all duration-300 opacity-80 hover:opacity-100" href="about_us.html">About Us</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-all duration-300 opacity-80 hover:opacity-100" href="contact_faq_modern.html">Contact & FAQ</a>
          </nav>
        </div>
      </div>
      <!-- Copyright -->
      <div class="mt-8 sm:mt-12 pt-6 sm:pt-8 border-t border-outline-variant/20 flex flex-col sm:flex-row justify-center sm:justify-between gap-4 items-center text-center sm:text-left">
        <p class="font-body-md text-body-md text-on-surface-variant/70 text-[#424750]">© <span class="copyright-year">2025</span> Yokoso Nippon Educational Consultancy Pvt. Ltd. All rights reserved.</p>
      </div>
    </div>
  </footer>`;
}

// ============================================
// GLOBAL ANIMATION ELEMENTS
// ============================================
function renderGlobalElements() {
  return `
  <!-- Preloader -->
  <div id="preloader" aria-hidden="true">
    <img class="preloader-logo" src="${LOGO_URL}" alt="Loading..." />
    <div class="preloader-bar"></div>
  </div>
  <!-- Scroll Progress Bar -->
  <div class="scroll-progress" aria-hidden="true"></div>
  <!-- Page Transition Overlay -->
  <div class="page-transition-overlay" aria-hidden="true"></div>
  <!-- Particle Background -->
  <canvas id="particles-canvas" aria-hidden="true"></canvas>
  <!-- Decorative Floating Blobs — responsive sizes -->
  <div class="float-blob" style="width:min(300px,40vw);height:min(300px,40vw);background:#002a58;top:10%;left:-5%;animation-delay:0s;"></div>
  <div class="float-blob" style="width:min(250px,35vw);height:min(250px,35vw);background:#005ac1;top:60%;right:-5%;animation-delay:-4s;"></div>
  <div class="float-blob" style="width:min(200px,30vw);height:min(200px,30vw);background:#a9c7ff;top:30%;right:20%;animation-delay:-8s;"></div>`;
}

// ============================================
// INJECTION LOGIC
// ============================================
document.addEventListener("DOMContentLoaded", () => {
  // Inject global animation elements at start of body
  document.body.insertAdjacentHTML("afterbegin", renderGlobalElements());

  // Inject header
  const headerSlot = document.getElementById("site-header");
  if (headerSlot) {
    headerSlot.outerHTML = renderHeader();
  }

  // Inject footer
  const footerSlot = document.getElementById("site-footer");
  if (footerSlot) {
    footerSlot.outerHTML = renderFooter();
  }

  // Re-init mobile menu handlers after injection
  const menuBtn = document.getElementById("mobile-menu-btn");
  const closeBtn = document.getElementById("mobile-menu-close");
  const mobileMenu = document.getElementById("mobile-menu");
  const mobileOverlay = document.getElementById("mobile-overlay");

  function openMenu() {
    if (mobileMenu) mobileMenu.classList.add("open");
    if (mobileOverlay) mobileOverlay.classList.add("open");
    if (menuBtn) menuBtn.setAttribute("aria-expanded", "true");
    document.body.style.overflow = "hidden";
  }
  function closeMenu() {
    if (mobileMenu) mobileMenu.classList.remove("open");
    if (mobileOverlay) mobileOverlay.classList.remove("open");
    if (menuBtn) menuBtn.setAttribute("aria-expanded", "false");
    document.body.style.overflow = "";
  }

  if (menuBtn) menuBtn.addEventListener("click", openMenu);
  if (closeBtn) closeBtn.addEventListener("click", closeMenu);
  if (mobileOverlay) mobileOverlay.addEventListener("click", closeMenu);
  document
    .querySelectorAll("#mobile-menu a")
    .forEach((l) => l.addEventListener("click", closeMenu));
});
