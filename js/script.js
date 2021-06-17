var owl = $('.owl-carousel');

owl.owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay: true,
    responsive:{
        0:{
            items:1,
        },
        950:{
            items:2,
        }
    }
});
