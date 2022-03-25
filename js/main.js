(function() {
    'use strict';{

let app = new Vue({
    el:'#app',
    data:{
        activeBtn:false
    },
    methods: {
        showMenu:function() {
          this.activeBtn = !this.activeBtn
        }
    }
})
}


{   //カルーセル
    const next = document.getElementById('next');
    const prev = document.getElementById('prev');
    const ul = document.getElementById('imgs');
    const slides = ul.children;
    const dots = [];
    let currentIndex = 0;

    function updateButtons(){
        prev.classList.remove('hidden');
        next.classList.remove('hidden');
        if (currentIndex === 0){
            prev.classList.add('hidden');
        }
        if (currentIndex === slides.length -1){
            next.classList.add('hidden');
        }
    }

    function moveSlides(){
        const slideWidth = slides[0].getBoundingClientRect().width;
        ul.style.transform = `translateX(${-1 * slideWidth * currentIndex}px)`;
    }
    function setupDots(){
        for (let i = 0; i < slides.length; i++){
            const button = document.createElement('button');
            button.addEventListener('click',function(){
                currentIndex = i;
                updateDots();
                updateButtons();
                moveSlides();
            })
            dots.push(button);
            document.getElementById('slideBtn').appendChild(button);
        }
        dots[0].classList.add('current');
    }
function updateDots(){
    dots.forEach(function(dot){
        dot.classList.remove('current');
    });
    dots[currentIndex].classList.add('current');
}
    updateButtons();
    setupDots();

    next.addEventListener('click',function(){
        currentIndex++;
        updateButtons();
        updateDots();
        moveSlides();
    });
    prev.addEventListener('click',function(){
        currentIndex--;
        updateButtons();
        updateDots();
        moveSlides();
    });

    window.addEventListener('resize',function(){
        moveSlides();
    })
}

})();

