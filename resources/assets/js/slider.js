import "slick-carousel";

$(".main-slider").slick({
  dots: true,
  autoplay: true,
  autoplaySpeed: 5000,
  prevArrow: "",
  nextArrow: ""
});

$(".product-slider").slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 1,
  prevArrow: `<button class="slick-arrow_left">
                <svg viewBox="0 0 24 24">
                  <path d="M22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12M14,7L9,12L14,17V7Z" />
                </svg>
              </button>`,
  nextArrow: `<button classs="slick-arrow_right">
                <svg viewBox="0 0 24 24">
                  <path d="M2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2A10,10 0 0,0 2,12M4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12M10,17L15,12L10,7V17Z" />
                </svg>
              </button>`,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 425,
      settings: {
        slidesToShow: 2
      }
    }
  ]
});
