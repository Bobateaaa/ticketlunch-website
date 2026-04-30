document.addEventListener('DOMContentLoaded', function() {
    const burgerButton = document.getElementById('burger-menu');
    const menuContainer = document.getElementById('menu-container');

    if (!burgerButton || !menuContainer) return;

    // Toggle menu on burger click
    burgerButton.addEventListener('click', function() {
        burgerButton.classList.toggle('active');
        menuContainer.classList.toggle('active');
        burgerButton.setAttribute('aria-expanded', burgerButton.classList.contains('active'));
    });

    // Close menu when a link is clicked
    const menuLinks = menuContainer.querySelectorAll('a, button');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            burgerButton.classList.remove('active');
            menuContainer.classList.remove('active');
            burgerButton.setAttribute('aria-expanded', false);
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInsideHeader = document.querySelector('.header').contains(event.target);
        if (!isClickInsideHeader && menuContainer.classList.contains('active')) {
            burgerButton.classList.remove('active');
            menuContainer.classList.remove('active');
            burgerButton.setAttribute('aria-expanded', false);
        }
    });
});
