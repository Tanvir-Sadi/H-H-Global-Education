var owl = $('.owl-carousel');

owl.owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    // autoplay: true,
    responsive:{
        0:{
            items:1,
        },
        950:{
            items:2,
        }
    }
});

owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});
