(function() {
    'use strict';

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

let app2 = new Vue({
    el: "#app2",
   components: {
    'carousel': VueCarousel.Carousel,
    'slide': VueCarousel.Slide
   }
   });

Vue.component('home-btn', {
    template: '<center><br><a href="index.php" class="btn">Home</a></center>'
  })
new Vue({
      el: '#components-demo'
    })

})();

