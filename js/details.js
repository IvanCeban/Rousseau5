$(document).ready(function(){

    initObjectMap();


    function initObjectMap() {
        var latlong = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('object_map'), {
            zoom: 4,
            center: latlong,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: latlong,
            map: map
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
        slidesToShow: 2,
        slidesToScroll: 1,
        speed: 100,
        asNavFor: '.promotion_gallery',
        dots: false,
        arrows: false,
        focusOnSelect: true
    });
});