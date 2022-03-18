var button = document.querySelector('.first-nav');
var sidebar = document.querySelector('#mySlideNav');
var adminMain = document.querySelector('#adminMain');
var sidebarLinks = document.querySelectorAll('.sidebar-link');
var sidebarIcons = document.querySelectorAll('.sidebar-icon');
var logo = document.querySelector('.logo');

button.addEventListener('click', function () {
    sidebar.classList.toggle('display');
    adminMain.classList.toggle('display');
    sidebarLinks.forEach(sidebarLink => {
        sidebarLink.classList.toggle('display');
    });
    sidebarIcons.forEach(sidebarIcon => {
        sidebarIcon.classList.toggle('display');
    });
    logo.classList.toggle('display');
});