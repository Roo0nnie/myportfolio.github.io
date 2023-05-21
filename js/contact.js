// Swiper Information

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    centeredSlides: false,
    spaceBetween: 22,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      20: {
          slidesPerView: 1,
      },
      520: {
          slidesPerView: 2,
      },
      920: {
          slidesPerView: 3
      }

    }
  });

  var swiper = new Swiper(".flip-container", {
    effect: "flip",
    grabCursor: true,
  });