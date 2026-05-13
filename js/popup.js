document.addEventListener('DOMContentLoaded', function () {

    // Open popup
    document.querySelectorAll('[data-popup]').forEach(trigger => {
        trigger.addEventListener('click', function () {
            const popupId = this.getAttribute('data-popup');
            const overlay = document.getElementById(popupId);
            if (!overlay) return;

            // If it's a job application, update the title and job ID
            if (popupId === 'popup-postulez') {
                const jobTitle = this.getAttribute('data-job-title');
                const jobId    = this.getAttribute('data-job-id');
                document.getElementById('popup-postulez-title').textContent    = 'Postuler — ' + jobTitle;
                document.getElementById('popup-postulez-subtitle').textContent = 'Remplis le formulaire ci-dessous pour postuler à ce poste.';
                document.getElementById('popup-job-id').value = jobId;
            }

            overlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // prevent background scroll
        });
    });

    // Close on X button
    document.querySelectorAll('.popup__close').forEach(btn => {
        btn.addEventListener('click', function () {
            closeAllPopups();
        });
    });

    // Close on overlay click (outside popup)
    document.querySelectorAll('.popup-overlay').forEach(overlay => {
        overlay.addEventListener('click', function (e) {
            if (e.target === this) {
                closeAllPopups();
            }
        });
    });

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeAllPopups();
        }
    });

    function closeAllPopups() {
        document.querySelectorAll('.popup-overlay').forEach(overlay => {
            overlay.classList.remove('active');
        });
        document.body.style.overflow = '';
    }
});