(function ($) {
  'use strict';

  function bool(value) { return value === true || value === 'true' || value === 'yes'; }
  function number(value, fallback) { var result = Number(value); return Number.isFinite(result) ? result : fallback; }

  function animateIn(scope) {
    var items = scope.querySelectorAll('.wow, .tm-split-text');
    if (!items.length) { return; }
    var reveal = function (element) {
      if (element.dataset.seifRevealed) { return; }
      element.dataset.seifRevealed = '1';
      element.style.animationDelay = element.getAttribute('data-wow-delay') || '0ms';
      element.classList.add('animated');
      element.classList.add('seif-split-visible');
    };
    if (!('IntersectionObserver' in window)) {
      items.forEach(reveal);
      return;
    }
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) { reveal(entry.target); observer.unobserve(entry.target); }
      });
    }, { threshold: 0.1 });
    items.forEach(function (item) { observer.observe(item); });
  }

  function initCounters(scope) {
    var items = scope.querySelectorAll('.animate-number');
    var start = function (item) {
      if (item.dataset.seifAnimated) { return; }
      item.dataset.seifAnimated = '1';
      var value = number(item.getAttribute('data-value'), 0);
      var duration = number(item.getAttribute('data-animation-duration'), 1500);
      if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) { duration = 0; }
      if ($.fn.animateNumbers && duration > 0) {
        $(item).animateNumbers(value, true, duration);
      } else {
        item.textContent = value.toLocaleString();
      }
    };
    if (!('IntersectionObserver' in window)) { items.forEach(start); return; }
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) { start(entry.target); observer.unobserve(entry.target); }
      });
    }, { threshold: 0.25 });
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
        autoplay: bool(data.autoplay) ? { delay: number(data.delay, 3000), reverseDirection: bool(data.reversedir) } : false,
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
      $(item).on('mouseenter', function () { $(item).find('.content-box .inner').stop(true, true).slideDown(400); });
      $(item).on('mouseleave', function () { $(item).find('.content-box .inner').stop(true, true).slideUp(400); });
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
    scope.querySelectorAll('.tm-has-mouse-follow-floating-info').forEach(function (block) {
      if (block.dataset.seifFloatingBound) { return; }
      block.dataset.seifFloatingBound = '1';
      var holder = document.createElement('div');
      holder.className = 'seif-floating-info-holder';
      holder.innerHTML = '<div class="seif-floating-info-inner"><div class="floating-subtitle"></div><div class="floating-title"></div></div>';
      document.body.appendChild(holder);
      block.querySelectorAll('.tm-floating-info-item').forEach(function (item) {
        item.addEventListener('mousemove', function (event) {
          holder.style.top = (event.clientY + 20) + 'px';
          holder.style.left = (event.clientX + 20) + 'px';
          holder.classList.toggle('floating-info-right', event.clientX + holder.offsetWidth + 20 > window.innerWidth);
        });
        item.addEventListener('mouseenter', function () {
          var title = item.querySelector('.floating-title');
          var subtitle = item.querySelector('.floating-subtitle');
          holder.querySelector('.floating-title').textContent = title ? title.textContent : '';
          holder.querySelector('.floating-subtitle').textContent = subtitle ? subtitle.textContent : '';
          holder.classList.add('floating-info-active');
        });
        item.addEventListener('mouseleave', function () { holder.classList.remove('floating-info-active'); });
      });
    });
  }

  function initService(scope) {
    var root = scope.jquery ? scope[0] : scope;
    if (!root) { return; }
    initCarousel(root);
    initIsotope(root);
    initServiceInteractions(root);
    animateIn(root);
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
