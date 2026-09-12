/* Healing Therapy Center V2 — vanilla JS, no dependencies */
(function () {
    'use strict';

    /* Sticky header shadow + scroll-to-top visibility */
    var header = document.getElementById('site-header');
    var scrollTop = document.getElementById('scroll-top');
    var onScroll = function () {
        var y = window.scrollY;
        if (header) header.classList.toggle('is-scrolled', y > 8);
        if (scrollTop) scrollTop.classList.toggle('show', y > 500);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    if (scrollTop) {
        scrollTop.addEventListener('click', function () {
            var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' });
        });
    }

    /* Mobile nav (with focus management) */
    var burger = document.getElementById('nav-burger');
    var navPanel = document.getElementById('primary-nav');
    if (burger && navPanel) {
        var setOpen = function (open) {
            document.body.classList.toggle('nav-open', open);
            burger.setAttribute('aria-expanded', open ? 'true' : 'false');
            burger.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
            if (open) {
                var first = navPanel.querySelector('a, button');
                if (first) first.focus();
            }
        };
        burger.addEventListener('click', function () {
            setOpen(!document.body.classList.contains('nav-open'));
        });
        document.addEventListener('keydown', function (e) {
            if (!document.body.classList.contains('nav-open')) return;
            if (e.key === 'Escape') {
                setOpen(false);
                burger.focus();
            } else if (e.key === 'Tab') {
                // keep focus inside the open drawer (plus the close button)
                var items = [burger].concat([].slice.call(
                    navPanel.querySelectorAll('a[href], button:not([disabled])')));
                var firstEl = items[0], lastEl = items[items.length - 1];
                if (e.shiftKey && document.activeElement === firstEl) {
                    e.preventDefault(); lastEl.focus();
                } else if (!e.shiftKey && document.activeElement === lastEl) {
                    e.preventDefault(); firstEl.focus();
                }
            }
        });
    }

    /* Dropdown toggles (click/tap + keyboard; hover handled by CSS on desktop) */
    document.querySelectorAll('.nav__toggle').forEach(function (toggle) {
        toggle.addEventListener('click', function () {
            var item = toggle.closest('.nav__item--drop');
            var open = item.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            // Close siblings
            item.parentElement.querySelectorAll('.nav__item--drop').forEach(function (other) {
                if (other !== item) {
                    other.classList.remove('is-open');
                    var t = other.querySelector('.nav__toggle');
                    if (t) t.setAttribute('aria-expanded', 'false');
                }
            });
        });
    });
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.nav__item--drop')) {
            document.querySelectorAll('.nav__item--drop.is-open').forEach(function (item) {
                item.classList.remove('is-open');
                var t = item.querySelector('.nav__toggle');
                if (t) t.setAttribute('aria-expanded', 'false');
            });
        }
    });

    /* Close mobile nav when a link inside it is followed */
    document.querySelectorAll('.nav a[href]').forEach(function (link) {
        link.addEventListener('click', function () {
            document.body.classList.remove('nav-open');
            if (burger) burger.setAttribute('aria-expanded', 'false');
        });
    });

    /* Sticky mobile appointment CTA: appears after the hero CTA scrolls
       out of view, retires while the final CTA band / footer are visible */
    var stickyCta = document.getElementById('sticky-cta');
    var heroActions = document.querySelector('.hero__actions');
    if (stickyCta && heroActions && 'IntersectionObserver' in window) {
        var pastHero = false, nearEnd = false;
        var update = function () {
            var show = pastHero && !nearEnd && !document.body.classList.contains('nav-open');
            stickyCta.classList.toggle('show', show);
            document.body.classList.toggle('cta-docked', show);
        };
        new IntersectionObserver(function (entries) {
            pastHero = !entries[0].isIntersecting && entries[0].boundingClientRect.top < 0;
            update();
        }).observe(heroActions);
        var endMarkers = document.querySelectorAll('.cta-band, .site-footer');
        var endVisible = new Map();
        var endIO = new IntersectionObserver(function (entries) {
            entries.forEach(function (en) { endVisible.set(en.target, en.isIntersecting); });
            nearEnd = [...endVisible.values()].some(Boolean);
            update();
        });
        endMarkers.forEach(function (el) { endIO.observe(el); });
        if (burger) burger.addEventListener('click', function () { setTimeout(update, 50); });
    }

    /* Scroll reveal (respects prefers-reduced-motion via CSS) */
    var reveals = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && reveals.length) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in');
                    io.unobserve(entry.target);
                }
            });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.05 });
        reveals.forEach(function (el) { io.observe(el); });
    } else {
        reveals.forEach(function (el) { el.classList.add('in'); });
    }
})();
