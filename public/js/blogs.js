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