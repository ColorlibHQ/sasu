/**
 * Sasu front-end behaviour, without jQuery.
 *
 * The plugin calls keep the options they always had; ColorlibUI provides
 * drop-in versions of Owl Carousel, Slick, Magnific Popup and AjaxChimp that
 * build the same markup, so the theme's stylesheets apply unchanged.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  UI.owl('.player_info_item', {
    items: 1,
    loop: true,
    dots: false,
    autoplay: true,
    margin: 40,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: true,
    navText: [
      '<img src="img/icon/left.svg" alt="">',
      '<img src="img/icon/right.svg" alt="">'
    ],
    responsive: {
      0: { margin: 15 },
      600: { margin: 10 },
      1000: { margin: 10 }
    }
  });

  UI.magnific('.popup-youtube, .popup-vimeo', {
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  UI.owl('.textimonial_iner', {
    items: 1,
    loop: true,
    dots: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: false,
    responsive: {
      0: { margin: 15 },
      600: { margin: 10 },
      1000: { margin: 10 }
    }
  });

  UI.enhanceSelects('select');

  // menu fixed js code
  window.addEventListener('scroll', function () {
    var fixed = window.pageYOffset + 1 > 50;
    UI.toElements('.main_menu').forEach(function (menu) {
      ['menu_fixed', 'animated', 'fadeInDown'].forEach(function (name) {
        menu.classList.toggle(name, fixed);
      });
    });
  }, { passive: true });

  UI.counter('.counter', { time: 2000 });

  // Main slider with a thumbnail strip; the thumbnail for the current slide
  // carries slick-active, and the .content block for it is the one shown.
  UI.ready(function () {
    function thumbs() {
      return UI.toElements('.slider-nav-thumbnails .slick-slide');
    }
    function show(el) {
      el.style.display = '';
      if (window.getComputedStyle(el).display === 'none') el.style.display = 'block';
    }

    UI.toElements('.slider').forEach(function (slider) {
      // On before slide change match active thumbnail to current slide
      slider.addEventListener('beforeChange', function (e) {
        thumbs().forEach(function (thumb, i) {
          thumb.classList.toggle('slick-active', i === e.detail.nextSlide);
        });
      });
      slider.addEventListener('afterChange', function (e) {
        UI.toElements('.content').forEach(function (content) {
          content.style.display = 'none';
        });
        UI.toElements('.content[data-id="' + (e.detail.currentSlide + 1) + '"]').forEach(show);
      });
    });

    UI.slick('.slider', {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      speed: 300,
      infinite: true,
      asNavFor: '.slider-nav-thumbnails',
      autoplay: true,
      pauseOnFocus: true,
      dots: true
    });

    UI.slick('.slider-nav-thumbnails', {
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider',
      focusOnSelect: true,
      infinite: true,
      prevArrow: false,
      nextArrow: false,
      centerMode: true,
      responsive: [{
        breakpoint: 480,
        settings: { centerMode: false }
      }]
    });

    // Only the first thumbnail slide starts active.
    thumbs().forEach(function (thumb, i) {
      thumb.classList.toggle('slick-active', i === 0);
    });
  });

  UI.magnific('.gallery_img', {
    type: 'image',
    gallery: { enabled: true }
  });

  UI.ready(function () {
    // Search Toggle
    var box = document.getElementById('search_input_box');
    var open = document.getElementById('search_1');
    var close = document.getElementById('close_search');
    if (box) {
      box.style.display = 'none';
      if (open) {
        open.addEventListener('click', function () {
          UI.slide(box, 'toggle');
          var input = document.getElementById('search_input');
          if (input) input.focus();
        });
      }
      if (close) {
        close.addEventListener('click', function () {
          UI.slide(box, 'up', 500);
        });
      }
    }
  });

  //------- Mailchimp js --------//
  UI.ajaxChimp('#mc_embed_signup form');
}());
