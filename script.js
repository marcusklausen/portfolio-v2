let heroRight = document.querySelector('#hero-right');
let nav = document.querySelector('#nav');

let heroLeft = document.querySelector('#hero-left');
let logo = document.querySelector('#logo');



window.addEventListener('resize', () => {
    nav.style.width = heroRight.offsetWidth + "px"
    logo.style.width = heroLeft.offsetWidth + "px"
})