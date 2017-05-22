'use strict';

(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.global = {
    attach: function attach(context) {

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
//# sourceMappingURL=global.js.map
