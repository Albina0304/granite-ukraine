//=../../node_modules/lightbox2/dist/js/lightbox.min.js
//=../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js
//=../../node_modules/slick-carousel/slick/slick.min.js
//=../../node_modules/select2/dist/js/select2.js
jQuery(document).ready(function ($) {
    //=../../assets/js/asyncLoadJsFiles.js
    //=../../assets/js/initLightbox.js
    //=../../assets/js/initSliders.js
    //=../../assets/js/header.js
    //=../../assets/js/modal.js
    //=../../assets/js/map.js
    //=../../assets/js/scroll.js
    //=../../assets/js/ajax.js
    $('.filter-selection').select2({
        placeholder: 'Виберіть опцію',
        minimumResultsForSearch: -1
    });
    var homeMenuLink = $('.home .main-wrapper a');
    if (homeMenuLink.length) {
        homeMenuLink.click(function(e) {
            e.preventDefault();
            
            var linkid = $(this).attr('href');
            var headerHeight = $('.header').outerHeight();
            $('html, body').animate({
            scrollTop: $(linkid).offset().top - headerHeight+1
            }, 800);
        });
    } else {
        $('.main-wrapper a').click(function(event) {
            event.preventDefault();
            window.location.href = '/'+ event.currentTarget.hash
        });
    }
    $(".menu-menu-container").contents().unwrap();
});