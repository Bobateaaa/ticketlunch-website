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

    // Close menu when a link is clicked (excluding dropdown triggers)
    const menuLinks = menuContainer.querySelectorAll('a:not(.menu-item-has-children > a), button');
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

    // Dropdown for menu items with children
    const itemsWithChildren = document.querySelectorAll('.menu-item-has-children > a');

    itemsWithChildren.forEach(link => {

        // Inject SVG arrow
        const arrow = document.createElement('span');
        arrow.classList.add('menu-arrow');
        arrow.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                <path d="M1 1L9 8L1 15" stroke="#323232" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        `;
        link.appendChild(arrow);

        link.addEventListener('click', function(e) {
            e.preventDefault();

            const parentItem = this.parentElement;
            const submenu = parentItem.querySelector('.sub-menu');
            const isOpen = parentItem.classList.contains('active');

            // Close all other open dropdowns
            document.querySelectorAll('.menu-item-has-children.active').forEach(openItem => {
                if (openItem !== parentItem) {
                    openItem.classList.remove('active');
                    openItem.querySelector('.sub-menu').style.maxHeight = null;
                }
            });

            // Toggle current
            if (isOpen) {
                parentItem.classList.remove('active');
                submenu.style.maxHeight = null;
            } else {
                parentItem.classList.add('active');
                submenu.style.maxHeight = submenu.scrollHeight + 'px';
            }
        });
    });
});