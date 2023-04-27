// var swiper = new Swiper(".slide-content", {
//     slidesPerView: 3,
//     spaceBetween: 30,
//     slidesPerGroup: 1,
//     loop: true,
//     loopFillGroupWithBlank: true,
//     grabCursor: 'true',
//     // hashNavigation: {
//     //   watchState: true,
//     // },
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//       dynamicBullets: true,
//     },
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
//     breakpoints:{
//       0:{
//         slidesPerView:1,
//       },
//       640:{
//         slidesPerView:2,
//       },
//       900:{
//         slidesPerView:3,
//       }
//     }
//   });

var swiper = new Swiper(".slide-content", {
  slidesPerView: 1,
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  grabCursor: 'true',
  keyboard: {
    enabled: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // breakpoints:{
  //   0:{
  //     slidesPerView:1,
  //   },
  //   640:{
  //     slidesPerView:2,
  //   },
  // }
});

  // var swiper = new Swiper(".monswiper", {
  //   slidesPerView: 1,
  //   spaceBetween: 30,
  //   slidesPerGroup: 1,
  //   pagination: {
  //     el: ".swiper-pagination",
  //     clickable: true,
  //   },
  //   navigation: {
  //       nextEl: ".swiper-button-next",
  //       prevEl: ".swiper-button-prev",  
  //   },
  //   breakpoints: {
  //     "@0.00": {
  //       slidesPerView: 1,
  //       spaceBetween: 10,
  //     },
  //     "@0.75": {
  //       slidesPerView: 2,
  //       spaceBetween: 20,
  //     },
  //     "@1.00": {
  //       slidesPerView: 3,
  //       spaceBetween: 40,
  //     },
  //     "@1.50": {
  //       slidesPerView: 4,
  //       spaceBetween: 50,
  //     },
  //   },
  // });

  // var swiper = new Swiper(".slide-content", {
  //   effect: "flip",
  //   grabCursor: true,
  //   pagination: {
  //     el: ".swiper-pagination",
  //   },
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev",
  //   },
  // });

  // var swiper = new Swiper(".slide-content", {
  //   // slidesPerView: 3,
  //   spaceBetween: 30,
  //   slidesPerGroup: 3,
  //   cssMode: true,
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev",
  //   },
  //   pagination: {
  //     el: ".swiper-pagination",
  //   },
  //   mousewheel: true,
  //   keyboard: true,
  // });