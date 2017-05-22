'use strict';

(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.instagramFeed = {
    attach: function attach(context) {

      /*----------------------------
        INSTAGRAM FEED ACTIVE
      -----------------------------*/
      jQuery.fn.spectragram.accessData = {
        accessToken: '2136707.4dd19c1.d077b227b0474d80a5665236d2e90fcf',
        clientID: '4dd19c1f5c7745a2bca7b4b3524124d0'
      };

      $('.instagram-feed', context).spectragram('getUserFeed', {
        query: 'adrianengine', //this gets adrianengine's photo feed
        size: 'big',
        max: 5
      });

      $('.blog-instagram-feed-widget', context).spectragram('getUserFeed', {
        query: 'adrianengine', //this gets adrianengine's photo feed
        size: 'small',
        max: 6
      });
    }
  };
})(Drupal, jQuery);
//# sourceMappingURL=instagram-feed.js.map
