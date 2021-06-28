var owl = $('.owl-carousel');

owl.owlCarousel({
    loop:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        1000:{
            items:2,
        }
    }
});
