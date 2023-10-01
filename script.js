window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > navbar.offsetHeight) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const menuIcon = document.querySelector('.menu-icon');
    const navLinks = document.querySelector('.nav-links');

    menuIcon.addEventListener('click', function () {
        navLinks.classList.toggle('active');
    });
});
