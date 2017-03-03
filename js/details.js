$(document).ready(function(){

    initObjectMap();


    $('.details_gallery').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        speed: 200,
        asNavFor: '.details_gallery_thumbnails',
        prevArrow: '<button type="button" class="slick-prev"><i class="icn icon-arrow_big_left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="icn icon-arrow_big_right"></i></button>'
    });
    $('.details_gallery_thumbnails').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        speed: 200,
        asNavFor: '.details_gallery',
        dots: false,
        arrows: false,
        focusOnSelect: true
    });

    $('.promotion_gallery').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        speed: 100,
        asNavFor: '.promotion_gallery_thumbnails',
        prevArrow: '<button type="button" class="slick-prev"><i class="icn icon-arrow_big_left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="icn icon-arrow_big_right"></i></button>'
    });
    $('.promotion_gallery_thumbnails').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 100,
        asNavFor: '.promotion_gallery',
        dots: false,
        arrows: false,
        focusOnSelect: true
    });

    function initObjectMap() {
        var latlong = {lat: 46.207389, lng: 6.155903};

        var map = new google.maps.Map(document.getElementById('object_map'), {
            zoom: 13,
            center: latlong,
            scrollwheel: false,
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            },
            streetViewControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            }
        });
        var markerImage = new google.maps.MarkerImage('img/map_pin.svg',
            new google.maps.Size(63, 77),
            new google.maps.Point(0, 0),
            new google.maps.Point(33, 55));

        var marker = new google.maps.Marker({
            position: latlong,
            map: map,
            icon: markerImage
        });
    }


    $('#promotions_accordion').on('shown.bs.collapse', function () {
        // promoGalleryInit();
        var this_header_link = $(this).find('.card .card-header a[aria-expanded="true"]');
        console.log(this);
        $('html, body').animate({
            scrollTop: $(this_header_link).offset().top - 60
        }, 250);
    })
});