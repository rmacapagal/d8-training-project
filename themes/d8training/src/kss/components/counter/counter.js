(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.counter = {
    attach: function (context) {

      /*----------------------------
          COUNTER UP ACTIVE
      ------------------------------*/
       $('.counter').counterUp({
          delay: 10,
          time: 3000
      });

    }
  };
})(Drupal, jQuery);