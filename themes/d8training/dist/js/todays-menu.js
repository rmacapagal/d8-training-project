'use strict';

(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.todaysMenu = {
    attach: function attach(context) {

      /*---------------------------
        MENU LIST MIXITUP FILTERING
      ----------------------------*/
      $('.food-menu-list', context).mixItUp();

      /*------------------------------
        MENU IMAGE POPUP
      -------------------------------*/
      $('.menu-popup', context).magnificPopup({
        type: 'image',
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
          beforeOpen: function beforeOpen() {
            // just a hack that adds mfp-anim class to markup 
            this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
            this.st.mainClass = this.st.el.attr('data-effect');
          }
        },
        closeOnContentClick: true,
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });
    }
  };
})(Drupal, jQuery);
//# sourceMappingURL=todays-menu.js.map
