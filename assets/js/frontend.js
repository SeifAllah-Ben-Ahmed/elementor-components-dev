/*
 * Theme-level behaviour the SeifHub widgets rely on, ported from the Interiox theme's custom.js
 * (THEMEMASCOT.hot / initialize / widget). Runs on the same events as the theme: document ready,
 * window load (+400ms isotope relayout) and window resize (+400ms isotope relayout).
 * Widget-specific handlers live in assets/js/widgets/ (ported from Mascot Core unchanged).
 */
(function ($) {
  'use strict';

  var $document = $(document);
  var $window = $(window);

  function isLTR() {
    return $('html').attr('dir') !== 'rtl';
  }

  /* THEMEMASCOT.hot.TM_Mouse_Follow_Show_Floating_Info */
  function mouseFollowShowFloatingInfo($scope) {
    var $has_mouse_follow_floating_info = $scope.find('.tm-has-mouse-follow-floating-info');
    if ($has_mouse_follow_floating_info.length > 0) {
      var $floating_info_holder = $('.tm-mouse-follow-floating-info-holder');
      if (!$floating_info_holder.length) {
        $(document.body).append('<div class="tm-mouse-follow-floating-info-holder"><div class="mouse-follow-floating-info-inner"><div class="floating-subtitle"></div><div class="floating-title"></div></div></div>');
        $floating_info_holder = $('.tm-mouse-follow-floating-info-holder');
      }
      var $floating_subtitle = $floating_info_holder.find('.floating-subtitle'),
        $floating_title = $floating_info_holder.find('.floating-title'),
        windowWidth = $window.width();

      $has_mouse_follow_floating_info.find('.tm-floating-info-item').each(function () {
        var $thisItem = $(this);
        if ($thisItem.data('seifFloatingInfo')) { return; }
        $thisItem.data('seifFloatingInfo', true);

        //info element position
        $thisItem.on('mousemove', function (e) {
          if (e.clientX + 20 + $floating_info_holder.width() > windowWidth) {
            $floating_info_holder.addClass('floating-info-right');
          } else {
            $floating_info_holder.removeClass('floating-info-right');
          }

          $floating_info_holder.css({
            top: e.clientY + 20,
            left: e.clientX + 20,
          });
        });

        //show/hide info element
        $thisItem
          .on('mouseenter', function () {
            var $this_item_subtitle = $(this).find('.floating-subtitle'),
              $this_item_title = $(this).find('.floating-title');

            if ($this_item_title.length) {
              $floating_title.html($this_item_title.text());
            }

            if ($this_item_subtitle.length) {
              $floating_subtitle.html($this_item_subtitle.text());
            }

            if (!$floating_info_holder.hasClass('floating-info-active')) {
              $floating_info_holder.addClass('floating-info-active');
            }
          })
          .on('mouseleave', function () {
            if ($floating_info_holder.hasClass('floating-info-active')) {
              $floating_info_holder.removeClass('floating-info-active');
            }
          });
      });
    }
  }

  /* THEMEMASCOT.initialize.TM_wow */
  var wowStarted = false;
  function wow() {
    if (wowStarted || typeof window.WOW !== 'function') { return; }
    wowStarted = true;
    var wow = new window.WOW({
      mobile: false, // trigger animations on mobile devices (default is true)
    });
    wow.init();
  }

  /* THEMEMASCOT.initialize.TM_SwiperSlider */
  function swiperSlider($scope) {
    var $swiper_container = $scope.find('.tm-swiper-container');
    if ($swiper_container.length > 0 && typeof window.Swiper === 'function') {
      $swiper_container.each(function () {
        var this_item = $(this);
        if (this_item.data('seifSwiper')) { return; }
        this_item.data('seifSwiper', true);
        var swiper = new window.Swiper(this_item.find('.swiper-container-inner')[0], {
          slidesPerView: this_item.attr('data-items') ? this_item.attr('data-items') : 4,
          spaceBetween: this_item.attr('data-space') ? this_item.data('space') : 15,
          loop: this_item.attr('data-loop') ? this_item.data('loop') : false,
          centeredSlides: this_item.attr('data-centered') ? this_item.data('centered') : false,

          speed: this_item.attr('data-speed') ? this_item.data('speed') : 300,
          freeMode: this_item.attr('data-freemod') ? this_item.data('freemod') : false,
          autoplay: {
            delay: this_item.attr('data-delay') ? this_item.data('delay') : 3000,
            reverseDirection: this_item.attr('data-reversedir') ? this_item.data('reversedir') : false,
          },

          navigation: {
            nextEl: this_item.find('.tm-swiper-button-next')[0],
            prevEl: this_item.find('.tm-swiper-button-prev')[0],
          },
          pagination: {
            el: this_item.find('.swiper-pagination')[0],
            type: this_item.attr('data-pagination-type') ? this_item.attr('data-pagination-type') : 'progressbar',
            clickable: true,
            renderCustom: function (swiper, current, total) {
              return current + ' of ' + total;
            },
          },
          breakpoints: {
            0: {
              slidesPerView: this_item.attr('data-xs-items') ? this_item.attr('data-xs-items') : 1,
            },
            576: {
              slidesPerView: this_item.attr('data-sm-items') ? this_item.attr('data-sm-items') : 1,
            },
            768: {
              slidesPerView: this_item.attr('data-md-items') ? this_item.attr('data-md-items') : 2,
            },
            992: {
              slidesPerView: this_item.attr('data-lg-items') ? this_item.attr('data-lg-items') : 3,
            },
            1200: {
              slidesPerView: this_item.attr('data-items') ? this_item.attr('data-items') : 4,
            },
            1400: {
              slidesPerView: this_item.attr('data-xxl-items') ? this_item.attr('data-xxl-items') : 4,
            },
          },
        });
      });
    }
  }

  /* tmMasonryItemsHeightResizer (theme helper used by TM_masonryIsotope) */
  function tmMasonryItemsHeightResizer(size, container) {
    if (container.hasClass('masonry-tiles')) {
      var padding = parseInt(container.find('.isotope-item:not(.isotope-item-sizer)').css('padding-left')),
        masonry_default = container.find('.tm-masonry-default'),
        masonry_large_height = container.find('.tm-masonry-large-height'),
        masonry_large_wide = container.find('.tm-masonry-large-wide'),
        masonry_large_width_height = container.find('.tm-masonry-large-width-height');
      if ($window.width() > 680) {
        masonry_default.css('height', size - 2 * padding);
        masonry_large_height.css('height', Math.round(2 * size) - 2 * padding);
        masonry_large_width_height.css('height', Math.round(2 * size) - 2 * padding);
        masonry_large_wide.css('height', size - 2 * padding);
      } else {
        masonry_default.css('height', size);
        masonry_large_height.css('height', size);
        masonry_large_width_height.css('height', size);
        masonry_large_wide.css('height', Math.round(size / 2));
      }
    }
  }

  /* THEMEMASCOT.widget.TM_masonryIsotope */
  function masonryIsotope($scope) {
    var $gallery_isotope = $scope.find('.isotope-layout');
    if ($gallery_isotope.length > 0 && $.fn.isotope) {
      $gallery_isotope.each(function () {
        var $each_istope = $(this);
        $each_istope.addClass('isotope-rendered');
        var layout = function () {
          if ($each_istope.hasClass('masonry')) {
            var isotope_inner = $each_istope.children('.isotope-layout-inner'),
              size = $each_istope.find('.isotope-item-sizer').width();
            tmMasonryItemsHeightResizer(size, $each_istope);

            isotope_inner.isotope({
              isOriginLeft: isLTR(),
              itemSelector: '.isotope-item',
              layoutMode: 'masonry',
              masonry: {
                columnWidth: '.isotope-item-sizer',
              },
              getSortData: {
                name: function (itemElem) {
                  return $(itemElem).find('.title').text();
                },
                date: '[data-date]',
              },
              filter: '*',
            });
          } else {
            var isotope_inner = $each_istope.children('.isotope-layout-inner');
            isotope_inner.isotope({
              isOriginLeft: isLTR(),
              itemSelector: '.isotope-item',
              layoutMode: 'fitRows',
              getSortData: {
                name: function (itemElem) {
                  return $(itemElem).find('.title').text();
                },
                date: '[data-date]',
              },
              filter: '*',
            });
          }
        };
        if ($.fn.imagesLoaded) {
          $each_istope.imagesLoaded(layout);
        } else {
          layout();
        }

        //search for isotope with single item and add a class to remove left right padding.
        var count = $each_istope.find('.isotope-item:not(.isotope-item-sizer)').length;
        if (count == 1) {
          $each_istope.addClass('isotope-layout-single-item');
        }
      });
    }
  }

  function serviceBlocks() {
    return $('.elementor-widget-seif-service-block');
  }

  // Document ready: THEMEMASCOT.hot.init, initialize.init (TM_wow, TM_SwiperSlider), widget.init (TM_masonryIsotope).
  $document.ready(function () {
    var $scope = serviceBlocks();
    mouseFollowShowFloatingInfo($scope);
    wow();
    swiperSlider($scope);
    setTimeout(function () {
      masonryIsotope(serviceBlocks());
    }, 0);
  });

  // Window load: TM_masonryIsotope after 400ms, then the theme triggers scroll + resize
  // (jquery.appear only checks on these events, so counters already in view start here).
  $window.on('load', function () {
    setTimeout(function () {
      masonryIsotope(serviceBlocks());
    }, 400);
    $window.trigger('scroll');
    $window.trigger('resize');
  });

  // Window resize: TM_masonryIsotope after 400ms.
  $window.on('resize', function () {
    setTimeout(function () {
      masonryIsotope(serviceBlocks());
    }, 400);
  });

  // Elementor editor: widgets are re-rendered without a page load, so run the same init per widget.
  $window.on('elementor/frontend/init', function () {
    if (!window.elementorFrontend || !elementorFrontend.isEditMode()) { return; }
    elementorFrontend.hooks.addAction('frontend/element_ready/seif-funfact-counter.default', function () {
      setTimeout(function () { $window.trigger('scroll'); }, 0);
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/widget', function ($scope) {
      if (!$scope.hasClass('elementor-widget-seif-service-block')) { return; }
      mouseFollowShowFloatingInfo($scope);
      wow();
      swiperSlider($scope);
      masonryIsotope($scope);
    });
  });
})(jQuery);
