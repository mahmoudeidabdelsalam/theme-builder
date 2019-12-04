import AOS from 'aos/dist/aos';

export default {
  init() {
    // JavaScript to be fired on all pages
    AOS.init();

    $('#slider_top').lightSlider({
      item: 1,
      auto: true,
      loop: true,
      speed: 800,
      pause: 6000,
      slideMargin: 0,
      enableDrag: false,
      slideEndAnimation: true,
      nextHtml: '<span><i class="fa fa-angle-right"></i></span>',
      prevHtml: '<span><i class="fa fa-angle-left"></i></span>',
      currentPagerPosition: 'left',
      onSliderLoad: function () {
        $('.lightSlider').removeClass('cS-hidden');
      },
      responsive: [{
        breakpoint: 800,
        settings: {
          item: 2,
          slideMove: 1,
          slideMargin: 6,
        },
      },
      {
        breakpoint: 480,
        settings: {
          item: 1,
          slideMove: 1,
        },
      },
      ],
    });

    // Inline popups
    $('.inline-popups').magnificPopup({
      delegate: 'a',
      removalDelay: 500, //delay removal by X to allow out-animation
      callbacks: {
        beforeOpen: function () {
          this.st.mainClass = this.st.el.attr('data-effect');
        },
      },
      midClick: 'true',
    });
    
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
