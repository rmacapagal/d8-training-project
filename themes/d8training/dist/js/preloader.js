'use strict';

(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.preloader = {
    attach: function attach(context) {

      $(window).on('load', function () {
        $(".preloader", context).fadeOut(1000);
      });
    }
  };
})(Drupal, jQuery);
//# sourceMappingURL=preloader.js.map
