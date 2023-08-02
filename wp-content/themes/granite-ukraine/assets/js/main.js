//=../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js
//=../../node_modules/slick-carousel/slick/slick.min.js
jQuery(document).ready(function ($) {
    $('.main-wrapper a').click(function(e) {
        e.preventDefault();
        var linkid = $(this).attr('href');
        var headerHeight = $('.header').outerHeight();
        $('html, body').animate({
          scrollTop: $(linkid).offset().top - headerHeight
        }, 1);
    });
    $('.header-burger, .main-wrapper li a').on ('click', function(e) {
      $('.main-wrapper').toggleClass('is-active');
      $('#burger-nav').toggleClass('open');
  });
  window.onscroll = function() {scrollFunction()};
  window.onload = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("scroll").style.display = "block";
    } else {
      document.getElementById("scroll").style.display = "none";
    }
  }
  $('#scroll').click(function() {
    $('html, body').animate({
      scrollTop: 0,
    }, 800);
  });
});