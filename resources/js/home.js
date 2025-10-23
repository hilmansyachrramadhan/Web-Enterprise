// Smooth scroll ke bagian About
document.addEventListener('DOMContentLoaded', function () {
    const btnDetails = document.querySelector('.btn-details');
    if (btnDetails) {
        btnDetails.addEventListener('click', function () {
            document.querySelector('.about-section').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    }

    // Auto-close navbar di mobile
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        link.addEventListener('click', function () {
            const navbarCollapse = document.querySelector('.navbar-collapse');
            const navbarToggler = document.querySelector('.navbar-toggler');
            if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
        });
    });

    // Lazy loading gambar
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img').forEach(img => imageObserver.observe(img));
    }
});
