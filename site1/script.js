/* =========================================================================
   川崎ビッグ - Urban Retreat
   Vanilla JS: header scroll, hamburger, intersection fade, smooth scroll, pagetop
   ========================================================================= */
(function () {
  'use strict';

  /* ------------------------------------------------------------------
     no-js -> js
     ------------------------------------------------------------------ */
  document.documentElement.classList.remove('no-js');
  document.documentElement.classList.add('js');

  /* ------------------------------------------------------------------
     Header scroll state
     ------------------------------------------------------------------ */
  const header = document.querySelector('.l-header');
  const SCROLL_THRESHOLD = 30;
  let lastScrollState = false;

  function updateHeaderState() {
    if (!header) return;
    const scrolled = window.scrollY > SCROLL_THRESHOLD;
    if (scrolled !== lastScrollState) {
      header.classList.toggle('is-scrolled', scrolled);
      lastScrollState = scrolled;
    }
  }

  /* ------------------------------------------------------------------
     Page top button
     ------------------------------------------------------------------ */
  const pagetop = document.querySelector('.js-pagetop');
  const PAGETOP_THRESHOLD = 600;

  function updatePagetop() {
    if (!pagetop) return;
    pagetop.classList.toggle('is-visible', window.scrollY > PAGETOP_THRESHOLD);
  }

  if (pagetop) {
    pagetop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ------------------------------------------------------------------
     Combined scroll listener (rAF throttle)
     ------------------------------------------------------------------ */
  let ticking = false;
  function onScroll() {
    if (!ticking) {
      window.requestAnimationFrame(function () {
        updateHeaderState();
        updatePagetop();
        ticking = false;
      });
      ticking = true;
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  updateHeaderState();
  updatePagetop();

  /* ------------------------------------------------------------------
     Hamburger / Mobile menu (CLAUDE.md準拠)
     ------------------------------------------------------------------ */
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      const isOpen = this.classList.toggle('active');
      mobileMenu.classList.toggle('active');
      this.setAttribute('aria-expanded', String(isOpen));
      this.setAttribute('aria-label', isOpen ? 'メニューを閉じる' : 'メニューを開く');
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    mobileMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.setAttribute('aria-label', 'メニューを開く');
        document.body.style.overflow = '';
      });
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.setAttribute('aria-label', 'メニューを開く');
        document.body.style.overflow = '';
        hamburger.focus();
      }
    });
  }

  /* ------------------------------------------------------------------
     Intersection Observer fade-up
     ------------------------------------------------------------------ */
  const fadeTargets = document.querySelectorAll('.js-fade');

  if ('IntersectionObserver' in window && fadeTargets.length) {
    const io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          const el = entry.target;
          const delay = parseInt(el.dataset.fadeDelay || '0', 10);
          if (delay > 0) {
            window.setTimeout(function () {
              el.classList.add('is-visible');
            }, delay);
          } else {
            el.classList.add('is-visible');
          }
          io.unobserve(el);
        }
      });
    }, {
      root: null,
      rootMargin: '0px 0px -10% 0px',
      threshold: 0.12
    });

    fadeTargets.forEach(function (el) {
      io.observe(el);
    });
  } else {
    // fallback: show all
    fadeTargets.forEach(function (el) {
      el.classList.add('is-visible');
    });
  }

  /* ------------------------------------------------------------------
     Hero: trigger fade-up immediately on load (above the fold)
     ------------------------------------------------------------------ */
  window.addEventListener('load', function () {
    const heroFades = document.querySelectorAll('.s-hero .js-fade');
    heroFades.forEach(function (el) {
      const delay = parseInt(el.dataset.fadeDelay || '0', 10);
      window.setTimeout(function () {
        el.classList.add('is-visible');
      }, delay);
    });
  });

  /* ------------------------------------------------------------------
     Smooth scroll for in-page anchor links (offset by header height)
     ------------------------------------------------------------------ */
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      const href = link.getAttribute('href');
      if (!href || href === '#' || href.length < 2) return;

      const target = document.querySelector(href);
      if (!target) return;

      e.preventDefault();
      const headerHeight = header ? header.offsetHeight : 0;
      const top = target.getBoundingClientRect().top + window.scrollY - headerHeight + 1;
      window.scrollTo({ top: top, behavior: 'smooth' });
    });
  });

})();
