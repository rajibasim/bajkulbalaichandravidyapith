$(document).ready(function(){
    $('.slick-carousel').slick({
        arrows: false,
        centerPadding: "0px",
        dots: false,
        slidesToShow: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    $('.slick-carousel-testimonials').slick({
        arrows: false,
        centerPadding: "0px",
        dots: false,
        slidesToShow: 2,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,


        responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            //   centerMode: false
            }
          }]



    });
});
function openHumberger(){
    $("#navigation").fadeIn();
    $("#closeNav").fadeIn();    
    $("body").css('overflow','hidden');
}
function closeHumberger(){
    $("#navigation").fadeOut();
    $("#closeNav").fadeOut();     
    $("body").css('overflow','auto');
}

// Galley
