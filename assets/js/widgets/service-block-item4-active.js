(function($) {
  'use strict';

  var WidgetServiceBlockHandler = function ($scope) {
    if ($('.service-block-style4').length) {
      // Add active class to the first item by default on page load
      $('.service-block-style4').first().addClass('active');

      $('.service-block-style4').on('mouseenter', function () {
        // Add active class to the hovered item
        $(this).addClass('active');
        // Remove active class from other items
        $('.service-block-style4').not(this).removeClass('active');
      });

      $('.service-block-style4').on('mouseleave', function () {
        // Ensure the hovered item keeps the active class
        $(this).addClass('active');
      });
    }
  };


  //elementor front start
  $(window).on("elementor/frontend/init", function () {
      elementorFrontend.elementsHandler.attachHandler( 'seif-service-block', WidgetServiceBlockHandler, 'skin-style4' );
  });
})(jQuery);