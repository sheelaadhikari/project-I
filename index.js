let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
let header = document.querySelector('.header');
menu.click = () => {
    menu.classList.toggle('fa-times');
    menu.classList.toggle('active');
}
window.onscroll = () => {
    menu.classList.remove('fa-times');
    menu.classList.remove('active');

    if (window.scrolly > 0) {
        header.classList.add('active');


    }
    else {
        header.classList.remove('active');
    }
} 