$(document).ready(function(){

    // select2Init();
    //$('select.my_select2').select2();

    // $('select.selectpicker').selectpicker({
    //     style: 'btn-info',
    //     size: 2
    // });


    $('.scroll_to_top a').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
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
    });
    $btn.on('click', function() {
        $hlinks.toggleClass('hidden');
    });
    updateNav();
/*Navigation responsiveness END*/

    $('#team .object_block').on('click', function(){
        var info_max_height = 0;
        var this_height = $(this).find('.info_block').outerHeight();
        $('#team .object_block').each(function () {
            var this_info_max_height = this_height;
            if (this_info_max_height > info_max_height)
            {
                 info_max_height = this_info_max_height;
            }
        });

        $(this).toggleClass('opened');
        var img_link = $(this).find('.img_block img').attr('src');
        if($(this).hasClass('opened')){
            if ($(window).width() > 543) {
                $(this).css('margin-bottom', info_max_height);
            }
            else {
                $(this).css('margin-bottom', this_height);
            }
            $(this).find('.img_block img').attr('src', img_link.replace('team', 'team_opened'))
        }
        else {
            $(this).css('margin-bottom', '0');
            $(this).find('.img_block img').attr('src', img_link.replace('team_opened', 'team'))
        }
    });


    $('select').multiselect({
        includeSelectAllOption: true,
        selectAllValue: 'select-all-value',
        selectAllText: 'Tout'
    });


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