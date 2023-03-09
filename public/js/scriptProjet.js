window.onload = function() {

      const swiper = new Swiper('.swiper2', {
        // Optional parameters
        direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // nextButton: '.swiper-button-next',
        // prevButton: '.swiper-button-prev',

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
      });


    // Creer le swiperJS comme ça et l'ajouter ? Pour pouvoir utiliser on slide change, etc ... https://codepen.io/escadesign/pen/VJKxjB
    // var swiperContainer = document.getElementById("swiper-container");
    // swiperContainer.on('slideChange', function (e) {
    //   console.log('*** mySwiper.activeIndex', mySwiper.activeIndex);
    // });



}