$('.counter-number').counterUp({
    delay: 10,
    time: 3000
});


const hamburgerMenu = document.querySelector('.hamburger-menu');
const navbar = document.querySelector('.navbar-nav');
const closeMenu = document.querySelector('.close-menu');
const overlayMenu = document.querySelector('.header-overlay-menu');

hamburgerMenu.addEventListener('click', function () {
    navbar.classList.add('show');
    overlayMenu.classList.add('display');
});

closeMenu.addEventListener('click', function () {
    navbar.classList.remove('show');
    overlayMenu.classList.remove('display');
});

overlayMenu.addEventListener('click', function () {
    navbar.classList.remove('show');
    overlayMenu.classList.remove('display');
});


const authUserIcon = document.querySelector('.auth-user-icon');
const authUser = document.querySelector('.auth-user');

authUserIcon.addEventListener('click', function () {
    authUser.classList.toggle('display');
});


function logoutUser() {
    document.querySelector('#logout-form').submit();
}
