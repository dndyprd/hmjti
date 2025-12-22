// BLOG DETAILS SLIDER
const track = document.getElementById('slider-track');
const items = Array.from(document.querySelectorAll('.slider-item'));
let itemsPerView = getItemsPerView();
let isTransitioning = false;

const clonesBefore = items.slice(-3).map(el => el.cloneNode(true));
const clonesAfter = items.slice(0, 3).map(el => el.cloneNode(true));

clonesBefore.forEach(clone => track.prepend(clone));
clonesAfter.forEach(clone => track.append(clone));

let currentIdx = 3; 
track.style.transition = 'none';
updateSliderPosition();

function getItemsPerView() {
    if (window.innerWidth >= 1024) return 3;
    if (window.innerWidth >= 768) return 2;
    return 1;
}

function updateSliderPosition() {
    const width = items[0].offsetWidth;
    track.style.transform = `translateX(-${currentIdx * width}px)`;
}

function nextSlide() {
    if (isTransitioning) return;
    isTransitioning = true;
    currentIdx++;
    track.style.transition = 'transform 0.5s ease-out';
    updateSliderPosition();
}

function prevSlide() {
    if (isTransitioning) return;
    isTransitioning = true;
    currentIdx--;
    track.style.transition = 'transform 0.5s ease-out';
    updateSliderPosition();
}

track.addEventListener('transitionend', () => {
    isTransitioning = false;
    const totalItems = items.length;

    if (currentIdx >= totalItems + 3) {
        track.style.transition = 'none';
        currentIdx = 3;
        updateSliderPosition();
    }
        
    if (currentIdx <= 2) {
        track.style.transition = 'none';
        currentIdx = totalItems + 2;
        updateSliderPosition();
    }
});

window.addEventListener('resize', () => {
    itemsPerView = getItemsPerView();
    track.style.transition = 'none';
    updateSliderPosition();
});

setInterval(nextSlide, 5000);