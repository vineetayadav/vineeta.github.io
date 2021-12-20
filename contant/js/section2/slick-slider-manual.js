$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 850,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 630,
            settings: {
                slidesToShow: 2
            }
        },  {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});