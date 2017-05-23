'use strict';

(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.about = {
    attach: function attach(context) {

      /*------------------------------
        ABOUT VIDEO POPUP
      --------------------------------*/
      $('.about-video-button', context).magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 320,
        preloader: false
      });
    }
  };
})(Drupal, jQuery);
//# sourceMappingURL=about.js.map
