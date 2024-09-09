import Swiper from 'swiper/bundle';
export default class Carousel {
  constructor(element) {
    this.element = element;

    this.options = {
      slidesPerView: 1,
      gap: 20,
      pagination: {
        el: this.element.querySelector('.swiper-pagination'),
      },

      navigation: {
        nextEl: this.element.querySelector('.swiper-button-next'),
        prevEl: this.element.querySelector('.swiper-button-prev'),
      },
    };
    console.log(this.options);
    this.init();
  }
  init() {
    console.log('Initialisation de ma composante Carousel');
    this.setOptions();
    new Swiper(this.element, this.options);
  }
  setOptions() {
    if ('split' in this.element.dataset) {
      this.options.breakpoints = {
        768: {
          slidesPerView: 2.5,
        },
      };
    }
    if ('autoplay' in this.element.dataset) {
      this.options.autoplay = {
        delay: 3000,
        pauseOnMouseEnter: true,
        autoplayDisableOnInteraction: false,
      };
    }
    if ('loop' in this.element.dataset) {
      this.options.loop = true;
    }
    if ('slides' in this.element.dataset) {
      this.options = {
        slidesPerView: 1.2,
      };
    }
  }
}
