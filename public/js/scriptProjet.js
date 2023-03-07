window.onload = function() {


    // Creer le swiperJS comme ça et l'ajouter ? Pour pouvoir utiliser on slide change, etc ... https://codepen.io/escadesign/pen/VJKxjB
    var swiperContainer = document.getElementById("swiper-container");
    swiperContainer.on('slideChange', function (e) {
      console.log('*** mySwiper.activeIndex', mySwiper.activeIndex);
    });



}