// mudança da nav no scroll

//arrow function
window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle('window-scrolled', window.scrollY > 0);
})

//animation_btn (circular text)

const textButtons = document.querySelectorAll('.animation_btn');

textButtons.forEach(textButton =>{
    let text = textButton.querySelector('p');

    text.innerHTML = text.innerHTML.split('').map((character,index) =>
        `<span style="transform: rotate(${index * 12}deg)">${character}</span>`).join('')
})


//SwiperJS - Tablets, Web and Mobile configurations
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints:{
        slidesPerView: 2,
        spaceBetween: 40
    },
    1023: {
        slidesPerView: 3,
        spaceBetween: 60
    }
});


//Responsive navbar

const nav = document.querySelector('.nav__links');
const openNavBtn = document.querySelector('#nav__toogle-open');
const closeNavBtn = document.querySelector('#nav__toogle-close');

const openNav = () => {
    nav.style.display = 'flex';
    openNavBtn.style.display = 'none';
    closeNavBtn.style.display = 'inline-block';

}
openNavBtn.addEventListener('click', openNav);


const closeNav = () => {
    nav.style.display = 'none';
    openNavBtn.style.display = 'inline-block';
    closeNavBtn.style.display = 'none';
}
closeNavBtn.addEventListener('click', closeNav);

nav.querySelectorAll('li a').forEach(navLink => {
    navLink.addEventListener('click', closeNav);
})
