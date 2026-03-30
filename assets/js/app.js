/* azurium-theme-nova - app.js */
document.addEventListener('DOMContentLoaded', () => {
    // Copy IP to clipboard
    document.querySelectorAll('[data-copy]').forEach((button) => {
        button.addEventListener('click', () => {
            const text = button.getAttribute('data-copy');
            if (navigator.clipboard) {
                navigator.clipboard.writeText(text).then(() => {
                    const original = button.innerHTML;
                    button.innerHTML = '<i class="bi bi-check2"></i> Copied!';
                    setTimeout(() => { button.innerHTML = original; }, 2000);
                });
            }
        });
    });

    // Active nav link
    const path = window.location.pathname;
    document.querySelectorAll('.nova-navbar .nav-link').forEach((link) => {
        if (link.getAttribute('href') && path.startsWith(link.getAttribute('href')) && link.getAttribute('href') !== '/') {
            link.classList.add('active');
        } else if (link.getAttribute('href') === '/' && path === '/') {
            link.classList.add('active');
        }
    });
});
