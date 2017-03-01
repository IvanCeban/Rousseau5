$(document).ready(function(){

    initContactMap();

    if ($(window).width() > 1199) {
        contactBlocksHeight();
    }
    else {
        $('.representatives_section .representatives_block').css('height', 'auto');
    }

    $(window).resize(function() {
        if ($(window).width() > 1199) {
            contactBlocksHeight();
        }
        else {
            $('.representatives_section .representatives_block').css('height', 'auto');
        }
    });

    $('.contact_block button').on('click', function () {
        var this_representatives_block = $(this).closest('.representatives_block');
        var this_representative = $(this).closest('.representative_container');

        $(this_representatives_block).find('.representative_container').hide();
        $(this_representative).show();
        $(this).html('send');
        $(this_representatives_block).addClass('active');
        $(this_representative).addClass('opened');
        $('#contact .item_active_background').fadeIn();

        if ($(window).width() < 1300) {
            $('html, body').animate({
                scrollTop: $(this_representatives_block).offset().top - 80
            }, 250);
        }
    });

    $('.representatives_section .representatives_block .close_btn').on('click', function () {
        var this_representatives_block = $(this).closest('.representatives_block');
        var this_representative = $(this_representatives_block).find('.representative_container');
        $(this_representatives_block).find('.representative_container').show();
        $(this_representative).find('.contact_block button').html('Contacter');
        $(this_representatives_block).removeClass('active');
        $(this_representative).removeClass('opened');
        $('#contact .item_active_background').fadeOut();
    });

    function contactBlocksHeight() {
        var max_height = 0;

        $('.representatives_section .representatives_block').each(function() {
            max_height = max_height > $(this).height() ? max_height : $(this).height();
            $(this).height(max_height);
        });
    }

    function initContactMap() {
        var latlong = {lat: 46.206979, lng: 6.143669};

        var map = new google.maps.Map(document.getElementById('contact_map'), {
            zoom: 18,
            center: latlong,
            scrollwheel: false,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                position: google.maps.ControlPosition.TOP_RIGHT
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
});