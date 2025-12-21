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