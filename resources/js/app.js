// File ini sengaja dikosongkan / minimal.
// Semua interaksi ringan (menu mobile, dll) dipegang oleh Alpine.js
// yang dimuat lewat CDN di resources/views/layouts/app.blade.php.
//
// Kalau nanti kamu mau nambah animasi scroll atau interaksi JS custom,
// tulis kodenya di sini.

console.log('Portfolio loaded 🚀');

// ===== Loading screen =====
// Mensimulasikan progress loading, lalu fade-out layar loading
// dan memicu animasi masuk untuk konten situs.
document.addEventListener('DOMContentLoaded', () => {
    const loadingScreen = document.getElementById('loading-screen');
    const loadingBar = document.getElementById('loading-bar');
    const loadingPercent = document.getElementById('loading-percent');
    const siteContent = document.getElementById('site-content');

    let progress = 0;
    const minDuration = 1600; // ms — biar animasi chibi sempat kelihatan jalan
    const startTime = Date.now();

    const tick = () => {
        // progress "palsu" yang naik cepat lalu melambat mendekati 90%
        progress += (90 - progress) * 0.08 + 1;
        if (progress > 90) progress = 90;

        if (loadingBar) loadingBar.style.width = progress + '%';
        if (loadingPercent) loadingPercent.textContent = Math.floor(progress) + '%';

        if (Date.now() - startTime < minDuration) {
            requestAnimationFrame(tick);
        } else {
            finishLoading();
        }
    };

    const finishLoading = () => {
        if (loadingBar) loadingBar.style.width = '100%';
        if (loadingPercent) loadingPercent.textContent = '100%';

        setTimeout(() => {
            if (loadingScreen) loadingScreen.classList.add('loading-done');
            if (siteContent) siteContent.classList.add('site-enter-active');

            // Bersihkan elemen loading dari DOM setelah animasi selesai
            setTimeout(() => loadingScreen?.remove(), 700);
        }, 250);
    };

    requestAnimationFrame(tick);
});

// Scroll-reveal: elemen dengan class "reveal" akan muncul dengan animasi
// fade + slide-up begitu masuk area pandang layar.
document.addEventListener('DOMContentLoaded', () => {
    const revealEls = document.querySelectorAll('.reveal');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -40px 0px',
    });

    revealEls.forEach((el) => observer.observe(el));
});
