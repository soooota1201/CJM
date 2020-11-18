jQuery(function ($) {
  
  $("#humbarger, .dropdown-item a").click(function () {
    $(".humbarger-line").toggleClass("active");
  
    $("#dropdown-nav").toggleClass("in");
  });
});







// const menu = new Swiper('.menu-container', {
//   // Optional parameters
//   loop: true,

//   autoplay: {
//     delay: 2000,
//   },

//   // Navigation arrows
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },

// })

