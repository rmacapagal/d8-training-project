'use strict';

(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.mainMenu = {
    attach: function attach(context) {

      /*---------------------------
        SMOOTH SCROLL
      -----------------------------*/
      $('.navbar-header a, ul#nav a', context).on('click', function (event) {
        var id = $(this).attr("href");
        var offset = 40;
        var target = $(id).offset().top - offset;
        $('html, body').animate({
          scrollTop: target
        }, 1500, "easeInOutExpo");
        event.preventDefault();
      });

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
//# sourceMappingURL=main-menu.js.map
