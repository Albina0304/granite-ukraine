//=../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js
//=../../node_modules/slick-carousel/slick/slick.min.js
jQuery(document).ready(function ($) {
    $('.header-wrapper a').click(function(e) {
        e.preventDefault();
        var linkid = $(this).attr('href');
        var headerHeight = $('.header').outerHeight();
        $('html, body').animate({
          scrollTop: $(linkid).offset().top - headerHeight
        }, 1);
    });
    $('.header-burger, .header-wrapper li a').on ('click', function(e) {
      $('.header-wrapper').toggleClass('is-active');
      $('#burger-nav').toggleClass('open');
  });
});