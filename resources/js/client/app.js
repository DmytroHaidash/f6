import jQuery from 'jquery';

window.$ = window.jQuery = jQuery;

const observer = require('lozad')();
observer.observe();
require('./modules/modal');
require('./modules/slideshow');
require('./modules/masonry');
require('./modules/youtube');


(function ($) {
  require('./modules/teaser')($);
  require('./modules/toggle')($);
  require('./modules/nav')($);
  require('./modules/search')($);

  if (!localStorage.getItem('intro')) {
    $('#intro').show();
  }

  $('#intro .close').on('click', function () {
    $('#intro').fadeOut();
    localStorage.setItem('intro', 'false');
  });

  let menu  = $('.menu');
  let burgerMenu  = $('.burger-menu');
    burgerMenu.on('click', function () {
    $(this).toggleClass('active');
    menu.toggleClass('active');
  })

})(jQuery);