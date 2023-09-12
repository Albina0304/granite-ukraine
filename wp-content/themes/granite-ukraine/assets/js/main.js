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
    var mapEl = document.getElementById("googleMap");
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
  myMap();
});