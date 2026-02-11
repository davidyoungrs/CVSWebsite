document.addEventListener('DOMContentLoaded', () => {
    // Select DOM elements
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.desktop-nav');
    const navLinks = document.querySelectorAll('.desktop-nav a');

    // Ensure elements exist before adding event listeners
    if (mobileMenuToggle && navMenu) {

        // Toggle menu on button click
        mobileMenuToggle.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click from bubbling to document immediately
            const isExpanded = mobileMenuToggle.getAttribute('aria-expanded') === 'true';

            toggleMenu(!isExpanded);
        });

        // Close menu when clicking a link
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                toggleMenu(false);
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (navMenu.classList.contains('active') &&
                !navMenu.contains(e.target) &&
                !mobileMenuToggle.contains(e.target)) {
                toggleMenu(false);
            }
        });

        // Handle escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && navMenu.classList.contains('active')) {
                toggleMenu(false);
            }
        });

    } else {
        console.warn('Mobile menu elements not found');
    }

    /**
     * Toggles the menu state
     * @param {boolean} show - Whether to show or hide the menu
     */
    function toggleMenu(show) {
        if (!mobileMenuToggle || !navMenu) return;

        if (show) {
            navMenu.classList.add('active');
            mobileMenuToggle.classList.add('active');
            mobileMenuToggle.setAttribute('aria-expanded', 'true');

            // Icon transition
            const icon = mobileMenuToggle.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            }
        } else {
            navMenu.classList.remove('active');
            mobileMenuToggle.classList.remove('active');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');

            // Icon transition
            const icon = mobileMenuToggle.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        }
    }
});
