'use strict';

(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.headerSlider = {
    attach: function attach(context) {

      /*---------------------------
        SMOOTH SCROLL
      -----------------------------*/
      $('.slider-area h3 a', context).on('click', function (event) {
        var id = $(this).attr("href");
        var offset = 40;
        var target = $(id).offset().top - offset;
        $('html, body').animate({
          scrollTop: target
        }, 1500, "easeInOutExpo");
        event.preventDefault();
      });

      /*-----------------------------
        SLIDER ACTIVE
      ------------------------------*/
      $('.pogoSlider', context).pogoSlider({
        pauseOnHover: false
      }).data('plugin_pogoSlider');
    }
  };
})(Drupal, jQuery);
//# sourceMappingURL=header-slider.js.map
