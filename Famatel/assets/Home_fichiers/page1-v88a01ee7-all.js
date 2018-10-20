jQuery(document).ready(function(){
    var mySwiper = new Swiper ('#qx-carousel-792553', {
    slidesPerView: 4,slidesPerGroup: 1,spaceBetween: 30,autoplay:true,speed:2000,loop:false,navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },pagination: {
    el: ".swiper-pagination",
    clickable: true
  },breakpoints:{
    1024: { 
        slidesPerView: 4,  
        slidesPerGroup: 1,
        spaceBetween: 30
    },    
    768: { 
        slidesPerView: 3,  
        slidesPerGroup: 1,
        spaceBetween: 1
    },
    480: { 
        slidesPerView: 1,  
        slidesPerGroup: 1,
        spaceBetween: 1
    },
  }              
    });
});