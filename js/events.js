$(document).ready(function(){

    $('.scroll_to_top a').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

    $('.tooltip').tooltipster({
        animation: 'fade',
        delay: 100,
        theme: 'tooltipster-punk'
    });

/*Navigation responsiveness START*/
    var $nav = $('.navbar');
    var $btn = $('.navbar button');
    var $vlinks = $('.navbar .visible-links');
    var $hlinks = $('.navbar .hidden-links');
    var breaks = [];
    function updateNav() {

        var availableSpace = $btn.hasClass('hidden') ? $nav.width() : $nav.width() - $btn.width() - 30;

        // The visible list is overflowing the nav
        if($vlinks.width() > availableSpace) {

            // Record the width of the list
            breaks.push($vlinks.width());

            // Move item to the hidden list
            $vlinks.children().last().prependTo($hlinks);

            // Show the dropdown btn
            if($btn.hasClass('hidden')) {
                $btn.removeClass('hidden');
            }

            // The visible list is not overflowing
        } else {

            // There is space for another item in the nav
            if(availableSpace > breaks[breaks.length-1]) {

                // Move the item to the visible list
                $hlinks.children().first().appendTo($vlinks);
                breaks.pop();
            }

            // Hide the dropdown btn if hidden list is empty
            if(breaks.length < 1) {
                $btn.addClass('hidden');
                $hlinks.addClass('hidden');
            }
        }

        // Keep counter updated
        $btn.attr("count", breaks.length);

        // Recur if the visible list is still overflowing the nav
        if($vlinks.width() > availableSpace) {
            updateNav();
        }

    }
    // Window listeners
    $(window).resize(function() {
        updateNav();
        hideListView();
    });
    $btn.on('click', function() {
        $hlinks.toggleClass('hidden');
    });
    updateNav();
/*Navigation responsiveness END*/

  
    

    $('select').multiselect({
        includeSelectAllOption: true,
        selectAllValue: 'select-all-value',
        selectAllText: 'Tout'
    });

    function hideListView() {
        if ($(window).width() < 768) {
            if($('.results_section ul.view_type li.list_view_btn').hasClass('active')){
                $('.results_section ul.view_type li.grid_view_btn').trigger('click');
            }
        }
    }

    // $('.dropdown-menu li:first-child:not(.selected) a').on('click', function () {
    //     $('.selectpicker').selectpicker('selectAll');
    //     $(this).parent().addClass('selected');
    // })
    // $('.dropdown-menu li:first-child.selected a').on('click', function () {
    //     $('.selectpicker').selectpicker('selectAll');
    // })
    //
    // $('.selectpicker').multiselect({
    //     includeSelectAllOption: true,
    //     selectAllValue: 'select-all-value'
    // });
});