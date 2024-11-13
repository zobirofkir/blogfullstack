document.addEventListener("DOMContentLoaded", function() {
const images = document.querySelectorAll('.image-item');
const slider = document.getElementById('imageSlider');
let currentIndex = 0;

function showImage(index) {
    const translateXValue = -index * 100;
    slider.style.transform = `translateX(${translateXValue}%)`;
}

showImage(currentIndex);


document.getElementById('prevButton').addEventListener('click', function() {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
    showImage(currentIndex);
});

document.getElementById('nextButton').addEventListener('click', function() {
    currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
    showImage(currentIndex);
});
});
