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


function destroyUser(event, id) {
    event.preventDefault();
    Swal.fire({
        title: 'حذف',
        text: 'آیا از حذف کردن مطمئن هستید؟',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'بله',
        cancelButtonText: 'خیر',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
    }).then((result) => {
        if (result.isConfirmed) {
            document.querySelector("#destroy-user-" + id).submit();
        }
    })
}
