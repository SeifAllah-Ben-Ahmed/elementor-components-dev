(function ($) {
  'use strict';

  function bool(value) { return value === true || value === 'true' || value === 'yes'; }
  function number(value, fallback) { var result = Number(value); return Number.isFinite(result) ? result : fallback; }

  // Theme: THEMEMASCOT.initialize.TM_wow -> new WOW({ mobile: false }).init().
  var wowStarted = false;
  function initWow() {
    if (wowStarted || typeof window.WOW !== 'function') { return; }
    wowStarted = true;
    new window.WOW({ mobile: false }).init();
  }

  function initCounters(scope) {
    var items = scope.querySelectorAll('.animate-number');
    var start = function (item) {
      if (item.dataset.seifAnimated) { return; }
      item.dataset.seifAnimated = '1';
      var delay = Math.floor(Math.random() * (400 - 10) + 10);
      setTimeout(function () {
        if ($.fn.animateNumbers) {
          $(item).animateNumbers(item.getAttribute('data-value'), true, parseInt(item.getAttribute('data-animation-duration'), 10)).addClass('appeared');
        } else {
          item.textContent = item.getAttribute('data-value');
        }
      }, delay);
    };
    if (!('IntersectionObserver' in window)) { items.forEach(start); return; }
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) { start(entry.target); observer.unobserve(entry.target); }
      });
    });
    items.forEach(function (item) { observer.observe(item); });
  }

  function initCarousel(scope) {
    scope.querySelectorAll('.tm-swiper-container').forEach(function (container) {
      if (container.dataset.seifSwiper || !window.Swiper) { return; }
      var inner = container.querySelector('.swiper-container-inner');
      if (!inner) { return; }
      container.dataset.seifSwiper = '1';
      var data = container.dataset;
      new window.Swiper(inner, {
        slidesPerView: number(data.items, 4),
        spaceBetween: number(data.space, 15),
        loop: bool(data.loop),
        centeredSlides: bool(data.centered),
        speed: number(data.speed, 300),
        freeMode: bool(data.freemod),
        autoplay: { delay: number(data.delay, 3000), reverseDirection: bool(data.reversedir) },
        navigation: { nextEl: container.querySelector('.tm-swiper-button-next'), prevEl: container.querySelector('.tm-swiper-button-prev') },
        pagination: {
          el: container.querySelector('.swiper-pagination'),
          type: data.paginationType || 'progressbar',
          clickable: true,
          renderCustom: function (swiper, current, total) { return current + ' of ' + total; }
        },
        breakpoints: {
          0: { slidesPerView: number(data.xsItems, 1) },
          576: { slidesPerView: number(data.smItems, 1) },
          768: { slidesPerView: number(data.mdItems, 2) },
          992: { slidesPerView: number(data.lgItems, 3) },
          1200: { slidesPerView: number(data.items, 4) },
          1400: { slidesPerView: number(data.xxlItems, 4) }
        }
      });
    });
  }

  // Mirrors the theme's TM_masonryIsotope: masonry for .masonry holders, fitRows for grids.
  function initIsotope(scope) {
    $(scope).find('.isotope-layout').each(function () {
      var $holder = $(this);
      var $inner = $holder.children('.isotope-layout-inner');
      if (!$inner.length || $holder.data('seifIsotope')) { return; }
      $holder.data('seifIsotope', true);
      if ($holder.find('.isotope-item:not(.isotope-item-sizer)').length === 1) {
        $holder.addClass('isotope-layout-single-item');
      }
      if (!$.fn.isotope) { return; }
      $holder.addClass('isotope-rendered');
      var options = { isOriginLeft: document.documentElement.getAttribute('dir') !== 'rtl', itemSelector: '.isotope-item', filter: '*' };
      if ($holder.hasClass('masonry')) {
        options.layoutMode = 'masonry';
        options.masonry = { columnWidth: '.isotope-item-sizer' };
      } else {
        options.layoutMode = 'fitRows';
      }
      $inner.isotope(options);
      $inner.find('img').each(function () {
        if (!this.complete) { $(this).one('load error', function () { $inner.isotope('layout'); }); }
      });
    });
  }

  function initServiceInteractions(scope) {
    scope.querySelectorAll('.service-block-style1 .inner-box').forEach(function (item) {
      if (item.dataset.seifBound) { return; }
      item.dataset.seifBound = '1';
      $(item).on('mouseenter', function () { $(item).find('.content-box .inner').stop().slideDown(400); });
      $(item).on('mouseleave', function () { $(item).find('.content-box .inner').stop().slideUp(400); });
    });
    ['style4', 'style10'].forEach(function (style) {
      scope.querySelectorAll('.tm-sc-service').forEach(function (block) {
        var items = block.querySelectorAll('.service-block-' + style);
        if (!items.length) { return; }
        items[0].classList.add('active');
        items.forEach(function (item) {
          if (item.dataset.seifBound) { return; }
          item.dataset.seifBound = '1';
          var activate = function () {
            items.forEach(function (other) { other.classList.remove('active'); });
            item.classList.add('active');
            var image = item.getAttribute('data-bg');
            if (image) { block.style.backgroundImage = 'url(' + JSON.stringify(image) + ')'; }
          };
          item.addEventListener('mouseenter', activate);
          item.addEventListener('focusin', activate);
        });
        var firstImage = items[0].getAttribute('data-bg');
        if (firstImage) { block.style.backgroundImage = 'url(' + JSON.stringify(firstImage) + ')'; }
      });
    });
    scope.querySelectorAll('.service-creative-tab').forEach(function (tabs) {
      tabs.querySelectorAll('.service-item[data-tab]').forEach(function (item) {
        if (item.dataset.seifBound) { return; }
        item.dataset.seifBound = '1';
        var activate = function () {
          tabs.querySelectorAll('.service-item, .each-image').forEach(function (other) { other.classList.remove('current'); });
          item.classList.add('current');
          var image = document.getElementById(item.dataset.tab);
          if (image) { image.classList.add('current'); }
        };
        item.addEventListener('mouseenter', activate);
        item.addEventListener('focusin', activate);
      });
    });
    // Theme: THEMEMASCOT.hot.TM_Mouse_Follow_Show_Floating_Info.
    var blocks = scope.querySelectorAll('.tm-has-mouse-follow-floating-info');
    if (blocks.length) {
      var $holder = $('.tm-mouse-follow-floating-info-holder');
      if (!$holder.length) {
        $holder = $('<div class="tm-mouse-follow-floating-info-holder"><div class="mouse-follow-floating-info-inner"><div class="floating-subtitle"></div><div class="floating-title"></div></div></div>').appendTo(document.body);
      }
      var $floatingSubtitle = $holder.find('.floating-subtitle'),
        $floatingTitle = $holder.find('.floating-title');
      $(blocks).find('.tm-floating-info-item').each(function () {
        if (this.dataset.seifFloatingBound) { return; }
        this.dataset.seifFloatingBound = '1';
        $(this)
          .on('mousemove', function (e) {
            $holder.toggleClass('floating-info-right', e.clientX + 20 + $holder.width() > $(window).width());
            $holder.css({ top: e.clientY + 20, left: e.clientX + 20 });
          })
          .on('mouseenter', function () {
            var $title = $(this).find('.floating-title'),
              $subtitle = $(this).find('.floating-subtitle');
            if ($title.length) { $floatingTitle.html($title.text()); }
            if ($subtitle.length) { $floatingSubtitle.html($subtitle.text()); }
            $holder.addClass('floating-info-active');
          })
          .on('mouseleave', function () { $holder.removeClass('floating-info-active'); });
      });
    }
  }

  function initService(scope) {
    var root = scope.jquery ? scope[0] : scope;
    if (!root) { return; }
    initCarousel(root);
    initIsotope(root);
    initServiceInteractions(root);
    initWow();
  }
  function initFunfact(scope) { initCounters(scope.jquery ? scope[0] : scope); }

  $(window).on('elementor/frontend/init', function () {
    ['default', 'skin-style1', 'skin-style2', 'skin-style3', 'skin-style4', 'skin-style5',
      'skin-style6', 'skin-style7', 'skin-style8', 'skin-style9', 'skin-style10',
      'skin-creative1', 'skin-cursor-floating-info'].forEach(function (skin) {
      elementorFrontend.hooks.addAction('frontend/element_ready/seif-service-block.' + skin, initService);
    });
    elementorFrontend.hooks.addAction('frontend/element_ready/seif-funfact-counter.default', initFunfact);
  });
  $(function () {
    document.querySelectorAll('.elementor-widget-seif-service-block').forEach(initService);
    document.querySelectorAll('.elementor-widget-seif-funfact-counter').forEach(initFunfact);
  });
})(jQuery);
