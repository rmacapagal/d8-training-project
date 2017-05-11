'use strict';

(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.global = {
    attach: function attach(context) {
      /*--------------------------
          ACTIVE WOW JS
      ----------------------------*/
      new WOW().init();
    }
  };
})(Drupal, jQuery);
//# sourceMappingURL=wow.js.map
