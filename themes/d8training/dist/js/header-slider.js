'use strict';

(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.headerSlider = {
    attach: function attach(context) {

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
