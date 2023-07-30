//слайдер отзывов----------------------------------------------------
// Определение слайдера
const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

// Определение количества слайдов
const totalSlides = slides.length;

// Установка класса для показа/скрытия картинок прокрутки
if (totalSlides >= 3) {
    document.querySelector('.slider-container').classList.add('slider-has-buttons');
}

// Функция для перемещения слайдов влево или вправо
function moveSlides(direction) {
    const slideWidth = slides[0].offsetWidth;
    const currentTranslate = parseInt(slider.style.transform.replace('translateX(', '').replace('px)', '')) || 0;
    let newTranslate;

    if (direction === 'prev') {
        newTranslate = currentTranslate + slideWidth;
    } else if (direction === 'next') {
        newTranslate = currentTranslate - slideWidth;
    }

    // Цикличная прокрутка
    if (newTranslate < -(slideWidth * (totalSlides - 1))) {
        newTranslate = 0;
    } else if (newTranslate > 0) {
        newTranslate = -(slideWidth * (totalSlides - 1));
    }

    slider.style.transform = `translateX(${newTranslate}px)`;
}

// Обработчики событий для картинок прокрутки
prevButton.addEventListener('click', () => moveSlides('prev'));
nextButton.addEventListener('click', () => moveSlides('next'));
