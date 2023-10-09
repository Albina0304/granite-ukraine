//=../../node_modules/lightbox2/dist/js/lightbox.min.js
//=../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js
//=../../node_modules/slick-carousel/slick/slick.min.js
jQuery(document).ready(function ($) {
    $(".labors .btn").click( function(e) {
        e.preventDefault();
        var self = $(this);
        var product_id = $(this).data('product_id');
        $.ajax({
            type : "GET",
            url : '/wp-admin/admin-ajax.php',  
            data : {
                action: "labor_action",
                post_id: product_id,
            },
            success: function(response) {
                if(response.data) {
                    $('.boxes').append(response.data);
                    self.hide();
                }
           }
        });
    });
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
    if ($('.lightbox').length) {
        var lbContainer = $('.lightbox').find('.lb-container');
        var lbDataContainer = $('.lightbox').find('.lb-dataContainer');
        $(lbContainer).before($(lbDataContainer));
    }
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
            window.location.href = '/'+ e.currentTarget.hash
        });
    }
    $('.header-mobile-menu, .main-wrapper li a').on ('click', function(e) {
        $('.main-wrapper').toggleClass('is-active');
        $('#mobile-nav').toggleClass('open');
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
    function myMap() {
        var mapProp= {
            center: new google.maps.LatLng(50.892723,45.997514),
            zoom:5,
        };
        var googleMapsStyle = [
        {
            "featureType": "all",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "weight": "2.00"
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#9c9c9c"
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.text",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#f2f2f2"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "landscape.man_made",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "all",
            "stylers": [
                {
                    "saturation": -100
                },
                {
                    "lightness": 45
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#eeeeee"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#7b7b7b"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "simplified"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#46bcec"
                },
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#c8d7d4"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#070707"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        }
        ]
        var mapEl = document.getElementById("google-map");
        if(mapEl){
            var dataLatlan = JSON.parse(mapEl.getAttribute('data-latlan'));
            var dataMarker = mapEl.getAttribute('data-marker');
            var map = new google.maps.Map(mapEl, mapProp);
            for(var i = 0; i < dataLatlan.length; i++) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(dataLatlan[i]['lat'],dataLatlan[i]['lang']),
                    map: map,
                    icon: dataMarker
                });
            }
            map.setOptions({styles: googleMapsStyle });
            marker.setMap(map);
        }
    }
    myMap();
    $('.slider-image').slick({
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
    $('.hero-slider').slick({
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
    $('.form-wrapper').on('click', function(e) {
        $(this).find('input').focus();
    });
    $('.form-contact .wpcf7').on('wpcf7mailsent', function(event) {
        $('#confirmation').modal('show');
        setTimeout(function() {
            $('#confirmation').modal('hide');
        }, 2000);
    });
    $('.form-wrapper').on('click', function(e) {
        $(this).find('input').focus();
    });
    $('#modal-form .wpcf7').on('wpcf7mailsent', function(event) {
        $('#confirmation').modal('show');
        setTimeout(function() {
            $('#confirmation').modal('hide');
        }, 2000);
    });
    $('#confirmation').on('show.bs.modal', function () {
        $('#modal-form').modal('hide');
    });
});