document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu');
    const navLinks = document.getElementById('nav-links');

    mobileMenuButton.addEventListener('click', function() {
        navLinks.classList.toggle('active');
        mobileMenuButton.classList.toggle('open');

        // Toggle animation for hamburger icon
        mobileMenuButton.querySelectorAll('.bar').forEach((bar, index) => {
            if (index === 0) {
                bar.style.transform = mobileMenuButton.classList.contains('open') ? 'rotate(45deg) translateY(8px)' : 'rotate(0) translateY(0)';
            } else if (index === 1) {
                bar.style.opacity = mobileMenuButton.classList.contains('open') ? '0' : '1';
            } else if (index === 2) {
                bar.style.transform = mobileMenuButton.classList.contains('open') ? 'rotate(-45deg) translateY(-8px)' : 'rotate(0) translateY(0)';
            }
        });
    });

    // Change header background on scroll
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        header.classList.toggle('scrolled', window.scrollY > 50);
    });
});
