$(window).load(function () {
  $('.infiniteslide').infiniteslide();
});

$("#humbarger, .dropdown-item a").click(function () {
  $(".humbarger-line").toggleClass("active");

  $("#dropdown-nav").toggleClass("in");
});



const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  autoplay: {
    delay: 2000,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

})

const menu = new Swiper('.menu-container', {
  // Optional parameters
  loop: true,

  autoplay: {
    delay: 2000,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

})

