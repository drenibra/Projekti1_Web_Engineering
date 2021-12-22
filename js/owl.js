$(document).ready(function() {
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
});