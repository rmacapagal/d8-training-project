'use strict';

(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.counter = {
    attach: function attach(context) {

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
//# sourceMappingURL=counter.js.map
