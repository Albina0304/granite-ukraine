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
  $(document).ready(function () {
    $(".menu-menu-container").contents().unwrap();
  });
  $('.form-wrapper input').on('focus input', function(e) {
    $(this).parents('.form-wrapper').find('.label').css('display','none')
  })
  $('.form-wrapper input').on('blur', function(e) {
    if(!$(this).val()) {
      $(this).parents('.form-wrapper').find('.label').css('display','block')
    }
  })
  $('.form-wrapper .label').on('click', function(e) {
    $(this).parents('.form-wrapper').find('input').focus();
  })
  $('.form-contact').on('submit', function(e) {
    e.preventDefault();
    setTimeout(function() {
      $('.form-wrapper input').val('');
      $('.form-wrapper .label').css('display', 'block');
    }, 2000);
  });
});