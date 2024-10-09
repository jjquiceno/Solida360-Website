let index = 0;
const slides = document.querySelector('.slides');
const totalSlides = document.querySelectorAll('.slide').length;
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const indicators = document.querySelectorAll('.indicator');

function updateSlider() {
slides.style.transform = `translateX(${-index * 30}%)`;
indicators.forEach((indicator, i) => {
    indicator.classList.toggle('active', i === index);
});
}

prevButton.addEventListener('click', () => {
    index = (index - 1 + totalSlides) % totalSlides;
    updateSlider();
});

nextButton.addEventListener('click', () => {
    index = (index + 1) % totalSlides;
    updateSlider();
});

indicators.forEach((indicator, i) => {
    indicator.addEventListener('click', () => {
        index = i;
        updateSlider();
    });
});

let autoSlide = setInterval(() => {
    index = (index + 1) % totalSlides;
    updateSlider();
}, 3000);

document.querySelector('.slider').addEventListener('mouseover', () => {
    clearInterval(autoSlide);
});

document.querySelector('.slider').addEventListener('mouseout', () => {
    autoSlide = setInterval(() => {
        index = (index + 1) % totalSlides;
        updateSlider();
    }, 3000);
});

updateSlider();