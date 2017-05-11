(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.global = {
    attach: function (context) {
      /*--------------------------
          ACTIVE WOW JS
      ----------------------------*/
      new WOW().init();
    }
  };
})(Drupal, jQuery);