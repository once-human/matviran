document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu');
    const navLinks = document.getElementById('nav-links');

    mobileMenuButton.addEventListener('click', function() {
        navLinks.classList.toggle('active');
        mobileMenuButton.classList.toggle('open');
        const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
        mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
    });

    // Change header background on scroll
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        header.classList.toggle('scrolled', window.scrollY > 50);
    });

    // Handle dropdown menu visibility on click (for touch devices)
    document.querySelectorAll('.dropdown > a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            this.nextElementSibling.classList.toggle('show');
        });
    });
});
