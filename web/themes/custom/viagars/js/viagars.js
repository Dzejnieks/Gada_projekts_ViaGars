(function($, Drupal, drupalSettings) {
  'use strict';
  /**
   * Add "is-active" class, regardless of query parameters.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.mobileMenu = {
    attach: function(context) {
      $('.navbar-toggle').click(function() {
        $('.menu--main').toggleClass('open');
      });
    }
  };

  Drupal.behaviors.anchor = {
    attach: function(context) {
      $('a[data-drupal-link-system-path]', context).click(function() {
        const href = $(this).attr('href'); // Link will look like: /#par-mums
        const scrollableTitle = href.split('#')[1]; // Cut out string after # symbol
        const link = `#${scrollableTitle}`;

        // Pass block ID where to scroll to
        Drupal.behaviors.anchor.scrollTo(link);
      });
    },
    scrollTo: function(elemId) {
      $('html,body').animate(
        {
          scrollTop: $(elemId).offset().top - 50
        },
        'slow'
      );
    }
  };

  // Drupal.behaviors.fixednav = {
  //   attach: function(context) {
  //     var header = document.getElementById('mainheader');
  //     var sticky = header.offsetTop;
  //     function nav_class() {
  //       if (window.pageYOffset > sticky) {
  //         header.classList.add('stickynav-active');
  //       } else {
  //         header.classList.remove('stickynav-active');
  //       }
  //     }
  //     nav_class();
  //     window.onscroll = function() {
  //       nav_class();
  //     };
  //   }
  // };

    Drupal.behaviors.anchor = {
    attach: function (context) {
      $("a[data-drupal-link-system-path]", context).click(function () {
        const href = $(this).attr('href'); // Link will look like: /#par-mums
        const scrollableTitle = href.split('#')[1]; // Cut out string after # symbol
        const link = `#${scrollableTitle}`;

        // Pass block ID where to scroll to
        Drupal.behaviors.anchor.scrollTo(link);
      });
    },
    scrollTo: function (elemId) {
      $('html,body').animate({
        scrollTop: $(elemId).offset().top -50
      }, 'slow');
    }
  };
})(jQuery, Drupal, drupalSettings);
