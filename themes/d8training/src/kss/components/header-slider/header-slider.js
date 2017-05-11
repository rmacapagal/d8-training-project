(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.headerSlider = {
    attach: function (context) {

      /*-----------------------------
        SLIDER ACTIVE
      ------------------------------*/
      $('.pogoSlider', context).pogoSlider({
        pauseOnHover: false
      }).data('plugin_pogoSlider');

    }
  };
})(Drupal, jQuery);