/*
    Kernel's only script. Two jobs, both optional: the site is entirely
    readable and fully navigable with JavaScript switched off.

    1. Scroll reveals. The layout adds .js to <html> before first paint, and
       site.css hides [data-reveal] only under that class — so without this
       file nothing is ever hidden. Elements are unobserved once revealed;
       the animation happens once and never replays.
    2. The reveals are skipped entirely when the visitor has asked for
       reduced motion, which leaves every element in its finished state.

    Instant navigation swaps <main> in place, so the reveals live in
    setUp(root): it runs once for the document and again, on
    instant:navigated, for each new <main> — dropping the previous
    observer first, so nothing is left watching a page that is gone.
*/
(function () {
    'use strict';

    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var observer = null;

    function setUp(root) {
        if (observer) {
            observer.disconnect();
            observer = null;
        }

        var reveals = root.querySelectorAll('[data-reveal]');

        if (!reveals.length) {
            return;
        }

        /* No observer support, or motion is unwanted: show everything at once. */
        if (reduced || !('IntersectionObserver' in window)) {
            reveals.forEach(function (el) {
                el.classList.add('is-visible');
            });

            return;
        }

        observer = new IntersectionObserver(
            function (entries, self) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    entry.target.classList.add('is-visible');
                    self.unobserve(entry.target);
                });
            },
            { rootMargin: '0px 0px -8% 0px', threshold: 0.05 }
        );

        reveals.forEach(function (el) {
            observer.observe(el);
        });
    }

    /* Loaded with defer: the document is parsed by the time this runs. */
    setUp(document);

    document.addEventListener('instant:navigated', function (event) {
        setUp(event.detail.main);
    });
})();
