/* ============================================
   YOKOSO NIPPON - Shared JavaScript
   Complete Animation Engine
   ============================================ */

const isTouchDevice = window.matchMedia("(hover: none)").matches;
const isMobile = window.innerWidth <= 768;

document.addEventListener("DOMContentLoaded", () => {
  // ============================================
  // 1. PRELOADER
  // ============================================
  const preloader = document.getElementById("preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      setTimeout(() => preloader.classList.add("loaded"), 400);
    });
    // Fallback: force hide after 3s
    setTimeout(() => preloader.classList.add("loaded"), 3000);
  }

  // ============================================
  // 2. SCROLL REVEAL OBSERVER (Enhanced)
  // ============================================
  const revealSelectors = [
    ".reveal",
    ".reveal-left",
    ".reveal-right",
    ".reveal-scale",
    ".reveal-rotate",
    ".reveal-blur",
    ".reveal-flip",
    ".timeline-line",
    ".stagger-item",
    ".reveal-on-scroll",
  ];
  const revealElements = document.querySelectorAll(revealSelectors.join(","));
  const revealObserver = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: "0px 0px -40px 0px" },
  );

  revealElements.forEach((el) => revealObserver.observe(el));

  // Immediate reveal for elements already visible
  requestAnimationFrame(() => {
    revealElements.forEach((el) => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        el.classList.add("active");
      }
    });
  });

  // ============================================
  // 3. PARALLAX SCROLLING
  // ============================================
  const parallaxEls = document.querySelectorAll("[data-parallax]");
  if (parallaxEls.length && !isMobile) {
    let ticking = false;
    window.addEventListener(
      "scroll",
      () => {
        if (!ticking) {
          requestAnimationFrame(() => {
            const scrollY = window.pageYOffset;
            parallaxEls.forEach((el) => {
              const speed = parseFloat(el.dataset.parallax) || 0.3;
              const rect = el.getBoundingClientRect();
              const offset =
                (rect.top + scrollY - window.innerHeight / 2) * speed;
              el.style.transform = `translateY(${-offset * 0.1}px)`;
            });
            ticking = false;
          });
          ticking = true;
        }
      },
      { passive: true },
    );
  }

  // ============================================
  // 4. MOUSE-FOLLOW CURSOR
  // ============================================
  if (window.innerWidth > 768 && !isTouchDevice) {
    const cursor = document.createElement("div");
    cursor.className = "custom-cursor";
    const dot = document.createElement("div");
    dot.className = "custom-cursor-dot";
    document.body.appendChild(cursor);
    document.body.appendChild(dot);

    let mouseX = 0,
      mouseY = 0;
    let cursorX = 0,
      cursorY = 0;

    document.addEventListener("mousemove", (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
      dot.style.left = mouseX + "px";
      dot.style.top = mouseY + "px";
    });

    function animateCursor() {
      cursorX += (mouseX - cursorX) * 0.15;
      cursorY += (mouseY - cursorY) * 0.15;
      cursor.style.left = cursorX + "px";
      cursor.style.top = cursorY + "px";
      requestAnimationFrame(animateCursor);
    }
    animateCursor();

    // Hover effect on interactive elements
    const hoverTargets =
      "a, button, .card-interaction, .btn-hover, .faq-item, .tilt-card, input, textarea, select";
    document.querySelectorAll(hoverTargets).forEach((el) => {
      el.addEventListener("mouseenter", () => cursor.classList.add("hovering"));
      el.addEventListener("mouseleave", () =>
        cursor.classList.remove("hovering"),
      );
    });
  }

  // ============================================
  // 5. ANIMATED TYPOGRAPHY (Split Text)
  // ============================================
  document.querySelectorAll(".text-animate-split").forEach((el) => {
    const text = el.textContent;
    el.textContent = "";
    el.setAttribute("aria-label", text);
    [...text].forEach((char, i) => {
      const span = document.createElement("span");
      span.className = "char";
      span.style.animationDelay = `${i * 0.03}s`;
      span.textContent = char === " " ? "\u00A0" : char;
      el.appendChild(span);
    });
  });

  // ============================================
  // 6. 3D TILT CARD EFFECT
  // ============================================
  if (!isTouchDevice) {
    document.querySelectorAll(".tilt-card").forEach((card) => {
      card.addEventListener("mousemove", (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateX = ((y - centerY) / centerY) * -6;
        const rotateY = ((x - centerX) / centerX) * 6;
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
      });
      card.addEventListener("mouseleave", () => {
        card.style.transform =
          "perspective(1000px) rotateX(0) rotateY(0) scale3d(1,1,1)";
      });
    });
  }

  // ============================================
  // 7. MAGNETIC BUTTON EFFECT
  // ============================================
  document.querySelectorAll(".btn-magnetic").forEach((btn) => {
    btn.addEventListener("mousemove", (e) => {
      const rect = btn.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;
      btn.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
    });
    btn.addEventListener("mouseleave", () => {
      btn.style.transform = "translate(0, 0)";
    });
  });

  // ============================================
  // 8. BUTTON MOUSE-GLOW EFFECT
  // ============================================
  document.querySelectorAll(".btn-hover").forEach((btn) => {
    btn.addEventListener("mousemove", (e) => {
      const rect = btn.getBoundingClientRect();
      btn.style.setProperty(
        "--mouse-x",
        ((e.clientX - rect.left) / rect.width) * 100 + "%",
      );
      btn.style.setProperty(
        "--mouse-y",
        ((e.clientY - rect.top) / rect.height) * 100 + "%",
      );
    });
    btn.addEventListener("click", () => {
      btn.style.transform = "scale(0.95)";
      setTimeout(() => (btn.style.transform = ""), 150);
    });
  });

  // ============================================
  // 9. INTERACTIVE PARTICLE BACKGROUND
  // ============================================
  const particleCanvas = document.getElementById("particles-canvas");
  if (particleCanvas) {
    const ctx = particleCanvas.getContext("2d");
    let particles = [];
    let pMouseX = 0,
      pMouseY = 0;

    function resizeCanvas() {
      particleCanvas.width = window.innerWidth;
      particleCanvas.height = window.innerHeight;
    }
    resizeCanvas();
    window.addEventListener("resize", resizeCanvas);

    document.addEventListener("mousemove", (e) => {
      pMouseX = e.clientX;
      pMouseY = e.clientY;
    });

    class Particle {
      constructor() {
        this.reset();
      }
      reset() {
        this.x = Math.random() * particleCanvas.width;
        this.y = Math.random() * particleCanvas.height;
        this.size = Math.random() * 2 + 0.5;
        this.speedX = (Math.random() - 0.5) * 0.5;
        this.speedY = (Math.random() - 0.5) * 0.5;
        this.opacity = Math.random() * 0.5 + 0.1;
      }
      update() {
        this.x += this.speedX;
        this.y += this.speedY;
        // Mouse repulsion
        const dx = this.x - pMouseX;
        const dy = this.y - pMouseY;
        const dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < 120) {
          this.x += dx * 0.02;
          this.y += dy * 0.02;
        }
        if (this.x < 0 || this.x > particleCanvas.width) this.speedX *= -1;
        if (this.y < 0 || this.y > particleCanvas.height) this.speedY *= -1;
      }
      draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(0, 42, 88, ${this.opacity})`;
        ctx.fill();
      }
    }

    const particleCount = isMobile
      ? 20
      : Math.min(60, Math.floor(window.innerWidth / 25));
    for (let i = 0; i < particleCount; i++) particles.push(new Particle());

    function drawLines() {
      for (let i = 0; i < particles.length; i++) {
        for (let j = i + 1; j < particles.length; j++) {
          const dx = particles[i].x - particles[j].x;
          const dy = particles[i].y - particles[j].y;
          const dist = Math.sqrt(dx * dx + dy * dy);
          if (dist < 150) {
            ctx.beginPath();
            ctx.moveTo(particles[i].x, particles[i].y);
            ctx.lineTo(particles[j].x, particles[j].y);
            ctx.strokeStyle = `rgba(0, 42, 88, ${0.06 * (1 - dist / 150)})`;
            ctx.lineWidth = 0.5;
            ctx.stroke();
          }
        }
      }
    }

    function animateParticles() {
      ctx.clearRect(0, 0, particleCanvas.width, particleCanvas.height);
      particles.forEach((p) => {
        p.update();
        p.draw();
      });
      drawLines();
      requestAnimationFrame(animateParticles);
    }
    animateParticles();
  }

  // ============================================
  // 10. SMOOTH PAGE TRANSITIONS
  // ============================================
  const overlay = document.querySelector(".page-transition-overlay");
  if (overlay) {
    document.querySelectorAll('a[href$=".html"]').forEach((link) => {
      link.addEventListener("click", (e) => {
        const href = link.getAttribute("href");
        if (
          !href ||
          href.startsWith("#") ||
          href.startsWith("mailto:") ||
          href.startsWith("tel:")
        )
          return;
        e.preventDefault();
        overlay.classList.add("entering");
        setTimeout(() => (window.location.href = href), 500);
      });
    });
  }

  // ============================================
  // 11. SCROLL PROGRESS BAR
  // ============================================
  const progressBar = document.querySelector(".scroll-progress");
  if (progressBar) {
    window.addEventListener(
      "scroll",
      () => {
        const scrollTop = document.documentElement.scrollTop;
        const scrollHeight =
          document.documentElement.scrollHeight - window.innerHeight;
        const progress = scrollTop / scrollHeight;
        progressBar.style.transform = `scaleX(${progress})`;
      },
      { passive: true },
    );
  }

  // ============================================
  // 12. MOBILE MENU
  // ============================================
  const menuBtn = document.getElementById("mobile-menu-btn");
  const closeBtn = document.getElementById("mobile-menu-close");
  const mobileMenu = document.getElementById("mobile-menu");
  const mobileOverlay = document.getElementById("mobile-overlay");

  function openMobileMenu() {
    if (mobileMenu) mobileMenu.classList.add("open");
    if (mobileOverlay) mobileOverlay.classList.add("open");
    document.body.style.overflow = "hidden";
  }

  function closeMobileMenu() {
    if (mobileMenu) mobileMenu.classList.remove("open");
    if (mobileOverlay) mobileOverlay.classList.remove("open");
    document.body.style.overflow = "";
  }

  if (menuBtn) menuBtn.addEventListener("click", openMobileMenu);
  if (closeBtn) closeBtn.addEventListener("click", closeMobileMenu);
  if (mobileOverlay) mobileOverlay.addEventListener("click", closeMobileMenu);
  document.querySelectorAll("#mobile-menu a").forEach((link) => {
    link.addEventListener("click", closeMobileMenu);
  });

  // ============================================
  // 13. FAQ ACCORDION
  // ============================================
  window.toggleFaq = function (element) {
    document.querySelectorAll(".faq-item").forEach((item) => {
      if (item !== element) item.classList.remove("active");
    });
    element.classList.toggle("active");
  };

  document.querySelectorAll(".accordion-toggle").forEach((btn) => {
    btn.addEventListener("click", () => {
      btn.closest(".group").classList.toggle("open");
    });
  });

  // ============================================
  // 14. LAZY LOAD IMAGE FADE-IN
  // ============================================
  document.querySelectorAll('img[loading="lazy"]').forEach((img) => {
    if (img.complete) {
      img.classList.add("loaded");
    } else {
      img.addEventListener("load", () => img.classList.add("loaded"));
    }
  });

  // ============================================
  // 15. NAVBAR SCROLL SHADOW
  // ============================================
  const header = document.querySelector("header, nav.sticky");
  if (header) {
    window.addEventListener(
      "scroll",
      () => {
        if (window.pageYOffset > 10) {
          header.classList.add("shadow-md");
        } else {
          header.classList.remove("shadow-md");
        }
      },
      { passive: true },
    );
  }

  // ============================================
  // 16. ANIMATED COUNTER
  // ============================================
  document.querySelectorAll("[data-counter]").forEach((el) => {
    const target = parseInt(el.dataset.counter);
    const suffix = el.dataset.suffix || "";
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animateCounter(el, target, suffix);
            observer.unobserve(el);
          }
        });
      },
      { threshold: 0.5 },
    );
    observer.observe(el);
  });

  function animateCounter(el, target, suffix) {
    const duration = 2000;
    const start = performance.now();
    function update(currentTime) {
      const elapsed = currentTime - start;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.floor(eased * target).toLocaleString() + suffix;
      if (progress < 1) requestAnimationFrame(update);
    }
    requestAnimationFrame(update);
  }

  // ============================================
  // 17. COPYRIGHT YEAR
  // ============================================
  document.querySelectorAll(".copyright-year").forEach((el) => {
    el.textContent = new Date().getFullYear();
  });

  // ============================================
  // 18. FORM VALIDATION FEEDBACK
  // ============================================
  document.querySelectorAll("input, textarea").forEach((input) => {
    input.addEventListener("blur", function () {
      if (this.value.trim() !== "") {
        this.classList.add("border-primary/30");
      } else {
        this.classList.remove("border-primary/30");
      }
    });
  });

  // ============================================
  // 19. SMOOTH SCROLL FOR ANCHOR LINKS
  // ============================================
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    });
  });

  // ============================================
  // 20. ICON HOVER RE-TRIGGER
  // ============================================
  document
    .querySelectorAll(".icon-hover-bounce, .icon-hover-spin")
    .forEach((el) => {
      const icon = el.querySelector(".material-symbols-outlined");
      if (icon) {
        el.addEventListener("mouseenter", () => {
          icon.style.animation = "none";
          void icon.offsetWidth;
          icon.style.animation = "";
        });
      }
    });
});
