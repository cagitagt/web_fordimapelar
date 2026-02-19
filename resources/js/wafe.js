 let wafe1 = document.getElementById('wafe1');
        let wafe2 = document.getElementById('wafe2');
        let wafe3 = document.getElementById('wafe3');
        let wafe4 = document.getElementById('wafe4');

        window.addEventListener('scroll', function(){
            let value = window.scrollY;

            wafe1.style.backgroundPositionX = 800 + value * 4 + 'px';
            wafe2.style.backgroundPositionX = 500 + value * -4 + 'px';
            wafe3.style.backgroundPositionX = 600 + value * 2 + 'px';
            wafe4.style.backgroundPositionX = 100 + value * -2 + 'px';
        })