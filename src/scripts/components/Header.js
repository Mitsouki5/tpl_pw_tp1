export default class Header {
  constructor(element) {
    this.element = element;
    this.options = {
      threshold: 0.1,
    };
    this.scrollPosition = 0;
    this.lastScrollPosition = 0;
    this.html = document.documentElement;
    this.cadenas = false;
    this.init();
    this.initNavMobile();
  }

  init() {
    this.setOptions();

    window.addEventListener('scroll', this.onScroll.bind(this));
  }

  onScroll() {
    this.lastScrollPosition = this.scrollPosition;
    this.scrollPosition = document.scrollingElement.scrollTop;

    this.setHeaderState();
    this.setDirections();
  }

  setHeaderState() {
    if (
      this.scrollPosition >=
      document.scrollingElement.scrollHeight * this.options.threshold
    ) {
      this.html.classList.add('header-is-hidden');
    } else {
      this.html.classList.remove('header-is-hidden');
    }
  }

  setDirections() {
    if (this.cadenas == false) {
      if (this.scrollPosition >= this.lastScrollPosition) {
        this.html.classList.add('is-scrolling-down');
        this.html.classList.remove('is-scrolling-up');
      } else {
        this.html.classList.add('is-scrolling-up');
        this.html.classList.remove('is-scrolling-down');
      }
    }
  }

  initNavMobile() {
    const toggle = this.element.querySelector('.js-toggle');
    toggle.addEventListener('click', this.onToggleNav.bind(this));
  }

  onToggleNav() {
    this.html.classList.toggle('nav-is-active');
  }

  setOptions() {
    if ('threshold' in this.element.dataset) {
      // Permet de gérer le pourcentage du défilement
      this.options.threshold = 0.3;
    }
    console.log(this.element.dataset);
    if ('autoHide' in this.element.dataset) {
      // Permet de faire en sorte que le header static reste sur la page
      this.cadenas = true;
    }
  }
}
