(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.mainMenu = {
    attach: function (context) {

      /* -------------------------
          STICKY MAINMENU
      ------------------------- */
      $("#mainmenu-area", context).sticky({
        topSpacing: 0
      });

      /*--------------------------------
          DROPDOWN MOBILE MENU
      ----------------------------------*/
      function doneResizing() {
        if (Modernizr.mq('screen and (max-width:991px)')) {
          $('.at-drop-down').on('click', function (e) {
            e.preventDefault();
            $(this).next($('.sub-menu')).slideToggle();
          });
        }
      }
      
      var id;
      $(window).resize(function () {
        clearTimeout(id);
        id = setTimeout(doneResizing, 0);
      });
      doneResizing();

    }
  };
})(Drupal, jQuery);