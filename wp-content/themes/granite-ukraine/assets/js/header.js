$('.header-mobile-menu, .main-wrapper.global-menus-header li a').on ('click', function(e) {
    $('.main-wrapper').toggleClass('is-active');
    $('#mobile-nav').toggleClass('open');
});
window.onscroll = function() {scrollFunction()};
window.onload = function() {scrollFunction()};
