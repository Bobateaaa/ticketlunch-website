document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.stats__card-toggle');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', function () {
            if (window.innerWidth >= 769) return; // disable on tablet/desktop

            const card = this.closest('.stats__card');
            const reduced = card.querySelector('.stats__card-text--reduced');
            const full = card.querySelector('.stats__card-text--full');
            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            if (isExpanded) {
                full.style.display = 'none';
                reduced.style.display = 'inline';
                this.textContent = '+';
                this.setAttribute('aria-expanded', 'false');
                card.classList.remove('active');
            } else {
                reduced.style.display = 'none';
                full.style.display = 'inline';
                this.textContent = '−';
                this.setAttribute('aria-expanded', 'true');
                card.classList.add('active');
            }
        });
    });
});