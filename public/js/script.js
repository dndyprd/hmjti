// SORTIR BIDANG
function bidangSort(targetNumber) { 
    const allContents = document.querySelectorAll('.content-bidang');
    allContents.forEach(content => {
        content.classList.remove('flex');
        content.classList.add('hidden');
    });

    const activeContent = document.getElementById('bidang' + targetNumber);
    if (activeContent) {
        activeContent.classList.remove('hidden');
        activeContent.classList.add('flex');
    }

    // BUTTON HIGHLIGHT 
    const allButtons = document.querySelectorAll('.btn-bidang');
    allButtons.forEach(btn => {  
        btn.classList.remove('bg-blue-700', 'text-slate-100');
        btn.classList.add('text-blue-700');
    });
 
    const activeBtn = document.getElementById('btn' + targetNumber);
    if (activeBtn) {
        activeBtn.classList.add('bg-blue-700', 'text-slate-100');
        activeBtn.classList.remove('text-blue-700');
    }
} 

// PAGINATION BLOG
document.addEventListener('DOMContentLoaded', function() {
    const perPage = 6;
    const blogItems = document.querySelectorAll('.blog-item');
    const totalPages = Math.ceil(blogItems.length / perPage);
    let currentPage = 1;

    function updateDisplay() { 
        blogItems.forEach(item => {
            if (parseInt(item.getAttribute('data-page')) === currentPage) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        });

        renderButtons();
    }

    function renderButtons() {
        const wrapper = document.getElementById('pagination-js');
        wrapper.innerHTML = '';

        if (totalPages <= 1) return;
 
        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement('button');
            btn.innerText = i; 
            btn.className = `cursor-pointer w-10 h-10 rounded-md font-bold transition ${currentPage === i ? 'bg-blue-700 text-white' : 'border border-blue-700 text-blue-700 hover:bg-blue-50'}`;
            
            btn.onclick = () => {
                currentPage = i;
                updateDisplay();
                document.getElementById('blog').scrollIntoView({ behavior: 'smooth' });
            };
            wrapper.appendChild(btn);
        }
    }
 
    updateDisplay();
});

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