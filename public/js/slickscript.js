     // SLICK

    $(document).ready(function() {

    $('.responsive').slick({
    	centerMode: false,
    	dots: false,
        infinite: true,
        autoplay: true,
        speed: 1500,
        autoplaySpeed: 800,
        slidesToShow: 7,
        slidesToScroll: 1,
        draggable: true,
        mobileFirst: true,
        accessibility: true,
        swipe: true,


        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 2,
                autoplaySpeed: 800,
                draggable: true,
                swipe: true,
                accessibility: true,
                dots: false
                // centerMode: true,
            }

        }, {
            breakpoint: 800,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 2,
                dots: false,
                infinite: true,
                autoplaySpeed: 800,
            }

        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                autoplaySpeed: 800,
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1000,
            }
        }, {
            breakpoint: 320,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1200,
            }
        },{
            breakpoint: 279,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1200,
            }
        }]
    });

});



    // $(document).ready(function(){
      
    //   function checkWidth(){
    //     var windowSize = $(window).width();
    //     if(windowSize < 951){

    //         $('.responsive').slick({
    //             // centerMode: false,
    //             dots: false,
    //             infinite: true,
    //             autoplay: true,
    //             speed: 1000,
    //             autoplaySpeed: 800,
    //             slidesToShow: 5,
    //             slidesToScroll: 1,
    //             draggable: true,
    //             // mobileFirst: true,
    //             accessibility: true,
    //             // variableWidth: true
    //             swipe: true,
    //         })
    //     }
    //   }

    //   checkWidth();
    //   $(window).resize(checkWidth);
       
    // });


