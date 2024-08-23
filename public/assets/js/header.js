document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu');
    const navLinks = document.getElementById('nav-links');

    mobileMenuButton.addEventListener('click', function() {
        navLinks.classList.toggle('active');
        mobileMenuButton.classList.toggle('open');
    });

    // Change header background on scroll
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        header.classList.toggle('scrolled', window.scrollY > 50);
    });

    // Handle dropdown menu visibility on click (for touch devices)
    document.querySelectorAll('.dropdown > a').forEach(function(dropdownToggle) {
        dropdownToggle.addEventListener('click', function(event) {
            event.preventDefault();
            const dropdownMenu = this.nextElementSibling;
            const isVisible = dropdownMenu.style.display === 'block';
            
            // Hide all other dropdowns
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                if (menu !== dropdownMenu) {
                    menu.style.display = 'none';
                    menu.style.opacity = '0';
                    menu.style.visibility = 'hidden';
                    menu.style.transform = 'translateY(10px)';
                }
            });

            // Toggle the clicked dropdown
            dropdownMenu.style.display = isVisible ? 'none' : 'block';
            dropdownMenu.style.opacity = isVisible ? '0' : '1';
            dropdownMenu.style.visibility = isVisible ? 'hidden' : 'visible';
            dropdownMenu.style.transform = isVisible ? 'translateY(10px)' : 'translateY(0)';
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.display = 'none';
                menu.style.opacity = '0';
                menu.style.visibility = 'hidden';
                menu.style.transform = 'translateY(10px)';
            });
        }
    });
});
