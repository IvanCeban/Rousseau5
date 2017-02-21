$(document).ready(function(){

    $(window).resize(function() {
        setTeamObjectHeight();
    });

    $('#team .object_block').on('click', function(evt){
        var this_height = $(this).outerHeight();
        $(this).height(this_height);

        $('#team .object_block').not(this).each(function(){
            $(this).removeClass('opened');
            var img_link = $(this).find('.img_block img').attr('src');
            $(this).find('.img_block img').attr('src', img_link.replace('team_img_opened', 'team_img'));
            var this_img_block = $(this).find('.img_block');
            setTimeout(function(){
                $(this_img_block).removeClass('absolute');
            }, 500);
        });

        $(this).toggleClass('opened');
        var this_img_block = $(this).find('.img_block');
        var img_link = $(this).find('.img_block img').attr('src');
        if($(this).hasClass('opened')){
            $(this_img_block).addClass('absolute');
            $(this).find('.img_block img').attr('src', img_link.replace('team_img', 'team_img_opened'))
        }
        else {
            setTimeout(function(){
                $(this_img_block).removeClass('absolute');
            }, 500);
            $(this).find('.img_block img').attr('src', img_link.replace('team_img_opened', 'team_img'));

        }

        if ($(window).width() < 768) {
            $('html, body').animate({
                scrollTop: $(this_img_block).offset().top - 30
            }, 250);
        }
    });

    $('#team .object_block .info_block').on('click', function(event){
        event.stopPropagation();
    });
    $('#team .object_block .info_block button').on('click', function(){
        var this_object_block = $(this).closest('.object_block');
        $(this_object_block).removeClass('opened');
        var img_link = $(this_object_block).find('.img_block img').attr('src');
        $(this_object_block).find('.img_block img').attr('src', img_link.replace('team_img_opened', 'team_img'));
        var this_img_block = $(this_object_block).find('.img_block');
        setTimeout(function(){
            $(this_img_block).removeClass('absolute');
        }, 500);
    });

    function setTeamObjectHeight() {
        $('#team .object_block').each(function(){
            $(this).removeClass('opened');
            var img_link = $(this).find('.img_block img').attr('src');
            $(this).find('.img_block img').attr('src', img_link.replace('team_img_opened', 'team_img'));
            var this_img_block = $(this).find('.img_block');
            setTimeout(function(){
                $(this_img_block).removeClass('absolute');
            }, 500);
            $(this).css('height', 'auto');
        });
    }
});