document.addEventListener("DOMContentLoaded", () => {
  // 1. Parallax Engine Initialization
  const parallaxElements = document.querySelectorAll("[data-parallax-speed]");
  parallaxElements.forEach((el) => {
    const speed = el.getAttribute("data-parallax-speed");
    el.style.setProperty("--parallax-speed", speed);
  });

  let ticking = false;
  const updateScrollData = () => {
    document.documentElement.style.setProperty("--scroll-y", window.scrollY);
    ticking = false;
  };

  window.addEventListener(
    "scroll",
    () => {
      if (!ticking) {
        window.requestAnimationFrame(updateScrollData);
        ticking = true;
      }
    },
    { passive: true },
  );

  // 2. Reveal-on-Scroll Engine
  const revealElements = document.querySelectorAll(".js-reveal");
  const observerOptions = {
    root: null,
    rootMargin: "0px 0px -10% 0px",
    threshold: 0.1,
  };

  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-in-view");
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  revealElements.forEach((el) => revealObserver.observe(el));
});
