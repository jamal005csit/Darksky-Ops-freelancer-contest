/**
 * Darksky Ops — main.js
 * Minimal JS: cursor, header scroll, reveal observer.
 * No frameworks. No dependencies.
 */

(function () {
  'use strict';

  // ─── Custom Cursor ───────────────────────────
  const cursor = document.getElementById('cursor');
  const ring   = document.getElementById('cursor-ring');

  if (cursor && ring && window.matchMedia('(pointer: fine)').matches) {
    let mx = 0, my = 0, rx = 0, ry = 0;

    document.addEventListener('mousemove', function (e) {
      mx = e.clientX;
      my = e.clientY;
      cursor.style.left = mx + 'px';
      cursor.style.top  = my + 'px';
    });

    function animateRing() {
      rx += (mx - rx) * 0.12;
      ry += (my - ry) * 0.12;
      ring.style.left = rx + 'px';
      ring.style.top  = ry + 'px';
      requestAnimationFrame(animateRing);
    }
    animateRing();

    document.querySelectorAll('a, button').forEach(function (el) {
      el.addEventListener('mouseenter', function () {
        ring.style.width   = '52px';
        ring.style.height  = '52px';
        ring.style.opacity = '0.6';
      });
      el.addEventListener('mouseleave', function () {
        ring.style.width   = '32px';
        ring.style.height  = '32px';
        ring.style.opacity = '1';
      });
    });
  }

  // ─── Header Scroll Class ─────────────────────
  var header = document.getElementById('site-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });
  }

  // ─── Intersection Observer: Reveal ───────────
  var reveals = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && reveals.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    reveals.forEach(function (el) { io.observe(el); });
  } else {
    // Fallback: show all immediately
    reveals.forEach(function (el) { el.classList.add('visible'); });
  }

})();
