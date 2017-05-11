(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.preloader = {
    attach: function (context) {

      $(window).on('load', function () {
        $(".preloader", context).fadeOut(1000);
      });

    }
  };
})(Drupal, jQuery);