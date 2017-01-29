$(document).ready(function(){

    homepageCarouselInit();

    function homepageCarouselInit() {
        $('.carousel').flickity({
            contain: true,
            wrapAround: true,
            pageDots: false,
            friction: 0.5,
            autoPlay: true
        });
    }
});