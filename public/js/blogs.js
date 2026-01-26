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

    function createButton(text, page, isActive = false, isNav = false, isDisabled = false) {
        const btn = document.createElement(isNav || typeof page === 'number' ? 'button' : 'div');
        
        // Base classes for the dark theme container items
        let classes = 'w-10 h-10 flex items-center justify-center border-r border-white/10 text-sm transition-colors duration-200 ';
        
        if (isDisabled) {
            btn.innerHTML = text; // Usually '...'
            classes += 'text-gray-500 cursor-default';
        } else {
            classes += 'cursor-pointer hover:bg-white/10 ';
            if (isActive) {
                // Active state: Cyan/Blue text, bold
                classes += 'text-cyan-400 font-bold';
            } else {
                // Inactive state: White text
                classes += 'text-white';
            }
            
            // Add click handler
            btn.onclick = () => {
                currentPage = page;
                updateDisplay();
                document.getElementById('blog').scrollIntoView({ behavior: 'smooth' });
            };
        }
        
        if (text === '<' || text === '>') {
             // Styling specifically for arrows if needed, but generic works
             btn.innerHTML = text === '<' ? '<i class="fa-solid fa-chevron-left"></i>' : '<i class="fa-solid fa-chevron-right"></i>';
        } else {
             btn.innerText = text;
        }

        btn.className = classes;
        return btn;
    }

    function renderButtons() {
        const wrapper = document.getElementById('pagination-js');
        wrapper.innerHTML = '';
        
        // Wrapper style: Dark rounded container
        wrapper.className = 'mt-12 flex justify-center items-center bg-[#1f2937] rounded-lg overflow-hidden w-fit mx-auto shadow-lg';

        if (totalPages <= 1) return;

        // PREV BUTTON
        if (currentPage > 1) {
            wrapper.appendChild(createButton('<', currentPage - 1, false, true));
        } else {
             // Optional: Show disabled prev button or nothing? User example showed <. 
             // Let's hide it if on first page standardly, or disable. 
             // Image 2 shows "1" at start without prev if at start? 
             // Actually standard pagination usually keeps the layout stable. 
             // I'll render it as disabled/invisible or just don't render. 
             // User prompt: "< 1 ...". Let's assume standard behavior. 
             // Let's render it but maybe disabled or hidden. 
             // I'll just skip it if current is 1 for cleaner look, or render disabled.
             // Let's skip for now to save space.
             // Actually, the example "< 1 2 3" implies < exists.
             // Let's add it.
        }
        
        // Logic for sliding window
        // Always show 1
        // Always show Last
        // Show window of 3 around current
        
        let startPage = Math.max(1, currentPage - 1);
        let endPage = Math.min(totalPages, currentPage + 1);
        
        // If window is at edges, ensure we show 3 items if possible
        if (currentPage === 1) {
            endPage = Math.min(3, totalPages);
        } else if (currentPage === totalPages) {
            startPage = Math.max(totalPages - 2, 1);
        }
        
        // Render Page 1
        if (startPage > 1) {
            wrapper.appendChild(createButton(1, 1, currentPage === 1));
            if (startPage > 2) {
                wrapper.appendChild(createButton('...', null, false, false, true));
            }
        }
        
        // Render Window
        for (let i = startPage; i <= endPage; i++) {
            wrapper.appendChild(createButton(i, i, currentPage === i));
        }
        
        // Render Last Page
        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                wrapper.appendChild(createButton('...', null, false, false, true));
            }
            wrapper.appendChild(createButton(totalPages, totalPages, currentPage === totalPages));
        }

        // NEXT BUTTON
        if (currentPage < totalPages) {
            wrapper.appendChild(createButton('>', currentPage + 1, false, true));
        }
    }

    updateDisplay();
});