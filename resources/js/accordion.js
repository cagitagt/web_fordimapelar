const accordions = document.querySelectorAll('.accordion');

    accordions.forEach(btn => {
        btn.addEventListener('click', () => {
            const panel = btn.nextElementSibling;
            const icon = btn.querySelector('.icon');

            if (panel.style.maxHeight) {
                panel.style.maxHeight = null; 
                icon.textContent = '+';
                icon.style.transform = 'rotate(0deg)';
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px"; 
                icon.textContent = '-';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });