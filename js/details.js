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

    $('.gallery').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        asNavFor: '.gallery_thumbnails',
        prevArrow: '<button type="button" class="slick-prev"><i class="icn icon-arrow_big_left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="icn icon-arrow_big_right"></i></button>'
    });
    $('.gallery_thumbnails').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.gallery',
        dots: false,
        arrows: false,
        focusOnSelect: true
    });
});