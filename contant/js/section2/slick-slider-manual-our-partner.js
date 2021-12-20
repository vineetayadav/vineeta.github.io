$(document).ready(function(){
    $('.our-partner-slid').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 850,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 630,
            settings: {
                slidesToShow: 1
            }
        },  {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});