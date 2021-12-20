$(document).ready(function(){
    $('.about-us-slider-us').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 850,
            settings: {
                slidesToShow: 1
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