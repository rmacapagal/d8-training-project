(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.global = {
    attach: function (context) {

      /*--------------------------
        SCROLLSPY ACTIVE
      ---------------------------*/
      $('body').scrollspy({
        target: '.bs-example-js-navbar-scrollspy',
        offset: 50
      });

    }
  };
})(Drupal, jQuery);