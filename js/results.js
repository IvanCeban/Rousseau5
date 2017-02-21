$(document).ready(function(){

    $('.view_type li').on('click', function () {
        $(this).parent().find('li').removeClass('active');
        $(this).addClass('active');
        var this_class = $(this).attr('class');
        var toRemove = '_btn active';
        var view_type = this_class.replace(toRemove,'');
        $('.results_container').attr("class", "results_container "+view_type);

        if($(this).hasClass('map_view_btn')){
            initResultsMap();
            resultsCarouselInit();
        }
        else {
            if($('.carousel').hasClass('flickity-enabled')){
                $('.carousel').flickity('destroy');
            }
        }
    });
    
    function resultsCarouselInit() {
        $('.carousel').flickity({
            contain: true,
            wrapAround: true,
            pageDots: true,
            prevNextButtons: false,
            friction: 0.5
        });
    }

    function initResultsMap() {
        var latlong = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('results_map'), {
            zoom: 4,
            center: latlong,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: latlong,
            map: map
        });
    }

    $(document).on('click', '.results_container.grid_view .properties_container, .results_container.list_view .img_block', function() {
       var this_block = $(this).closest('.object_block');
        var this_link = this_block.find('.title_container a').attr('href');
        window.location.href = this_link;
    });

});