$(function () {
   'use strict' ;
   // Adjust slider height
   var windowHeight=$(window).height(),
       upperNavHeight= $('.upper-bar').innerHeight(),
       navbarHeight=$('.navbar').innerHeight();
     $('.slider , .carousel-item').height(windowHeight-(upperNavHeight+navbarHeight));

  // feautered-work
  $(".feautered-work ul li").on('click',function() {
    $(this).addClass("active").siblings().removeClass("active");
     console.log($(this).data('class'));
     if($(this).data('class') === 'all')
     {
       $('.suffle-images .col-sm').css('opacity','1')
     }
     else
     {
        $('.suffle-images .col-sm').css('opacity','0.3');
        $($(this).data('class')).parent().css('opacity','1')
     }
  });
});


 // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  //  End Back to top button

  $(document).ready(function() {
  $("#testimonial-slider").owlCarousel({
    items: 3,
    itemsDesktop:[1000,3],
    itemsDesktopSmall:[979,2],
    itemsTablet:[768, 2],
    itemsMobile:[650, 1],
    pagination: true,
    autoPlay: true
  });
});




