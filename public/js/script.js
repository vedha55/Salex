// Add scroll effect to header
window.addEventListener('scroll', function () {
    const header = document.querySelector('.site-header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Mobile menu toggle
const mobileToggle = document.querySelector('.mobile-menu-toggle');
const mainNav = document.querySelector('.main-navigation');

mobileToggle.addEventListener('click', function () {
    this.classList.toggle('active');
    mainNav.classList.toggle('active');
});

// Add this script before closing </body> tag
document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNavigation = document.querySelector('.main-navigation');
    const headerActions = document.querySelector('.header-actions');

    mobileMenuToggle.addEventListener('click', function () {
        this.classList.toggle('active');
        mainNavigation.classList.toggle('active');
        headerActions.classList.toggle('active');

        if (mainNavigation.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'auto';
        }
    });

    // Close menu when clicking nav links
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            mobileMenuToggle.classList.remove('active');
            mainNavigation.classList.remove('active');
            headerActions.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    });
});

