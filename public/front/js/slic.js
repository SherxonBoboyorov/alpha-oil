$(document).ready(function(){

$('.slider__list').slick({
    dots: false,
    arrows:true,
    autoplaySpeed:5000,
    infinite: true,
    speed: 1500,
    autoplay:true,
    fade: true,
});

$('.our_partners__list').slick({
  dots: true,
  arrows:false,
  infinite: false,
  autoplaySpeed:3000,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 2,
        dots: false,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        dots: false,
        slidesToScroll: 1
      }
    }
  ]
});

})