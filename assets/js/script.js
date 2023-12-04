const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
    bar.addEventListener('click',()=>{
        nav.classList.add('active');
    })
}

if(close){
    close.addEventListener('click',()=>{
        nav.classList.remove('active');
    })
}

/*slide*/

let slideIndex = 0;

function showSlide(n) {
    const slides = document.querySelectorAll('.slide');
    const buttons = document.querySelectorAll('.slider-button');

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove('active');
    }

    slideIndex = n;
    if (slideIndex < 1) {
        slideIndex = slides.length;
    }
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = 'block';
    buttons[slideIndex - 1].classList.add('active');
}

function changeSlide(n) {
    showSlide(slideIndex + n);
}

function createButtons() {
    const sliderButtons = document.querySelector('.slider-buttons');
    const slides = document.querySelectorAll('.slide');

    for (let i = 0; i < slides.length; i++) {
        const button = document.createElement('span');
        button.classList.add('slider-button');
        button.addEventListener('click', () => showSlide(i + 1));
        sliderButtons.appendChild(button);
    }

    showSlide(slideIndex);
}

// Create the buttons when the page loads
createButtons();

// Automatically change slide every 5 seconds
setInterval(() => changeSlide(1), 5000);

/*preloader*/
