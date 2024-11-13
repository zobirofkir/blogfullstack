document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', function () {
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('translate-y-0');
        } else {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('translate-y-0');
        }
    });
});
