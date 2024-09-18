const menuIcon = document.getElementById('menuIcon');
const mobileMenu = document.getElementById('mobileMenu');
const overlay = document.getElementById('overlay');
const navLinks = document.querySelectorAll('.nav__link');

// Открытие меню
menuIcon.addEventListener('click', () => {
    mobileMenu.classList.toggle('open');
    overlay.classList.toggle('active');
});

// Закрытие меню при клике на затемнение
overlay.addEventListener('click', () => {
    mobileMenu.classList.remove('open');
    overlay.classList.remove('active');
});

// Закрытие меню при клике на любой пункт
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        overlay.classList.remove('active');
    });
});
