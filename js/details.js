$(document).ready(function(){

    initObjectMap();


    function initObjectMap() {
        var latlong = {lat: 40.712784, lng: -74.005941};

        var map = new google.maps.Map(document.getElementById('object_map'), {
            zoom: 20,
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
});