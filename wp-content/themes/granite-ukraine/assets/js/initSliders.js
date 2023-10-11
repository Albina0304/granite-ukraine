const $sliderImage = $('.slider-image');
const $heroSlider = $('.hero-slider');
if ($sliderImage.length) {
    $sliderImage.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.hero-slider',
        responsive: [
            {
            breakpoint: 890,
            settings: {
                dots: true
            }
            }
        ]
    });
}
if ($heroSlider.length) {
    $heroSlider.slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.slider-image',
        focusOnSelect: true,
        responsive: [
            {
            breakpoint: 890,
            settings: 'unslick',
            dots: false
            }
        ]
    });
}