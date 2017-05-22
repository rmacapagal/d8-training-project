(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.scrollToTop = {
    attach: function (context) {

      /*---------------------------
        SMOOTH SCROLL
      -----------------------------*/
      $('a.scrolltotop', context).on('click', function (event) {
        var id = $(this).attr("href");
        var offset = 40;
        var target = $(id).offset().top - offset;
        $('html, body').animate({
          scrollTop: target
        }, 1500, "easeInOutExpo");
        event.preventDefault();
      });


      /*----------------------------
        SCROLL TO TOP
      ------------------------------*/
      $(window).on("scroll",function () {
        var totalHeight = $(window).scrollTop();
        if (totalHeight > 300) {
          $(".scrolltotop", context).fadeIn();
        } else {
          $(".scrolltotop", context).fadeOut();
        }
      });

    }
  };
})(Drupal, jQuery);