$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        responsive:{
            0: {
                items: 1
            },
            800: {
                items: 2
            },
            1270: {
                items: 3
            }
        }
    })
    $('#arrow-right').click(function () {
        $('.owl-carousel').trigger('next.owl.carousel');
    }); 
    $('#arrow-left').click(function () {
        $('.owl-carousel').trigger('prev.owl.carousel', [300]);
    });
});