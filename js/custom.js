jQuery(document).ready(function () {


    $('#carouselHacked').carousel();

   //this code is for animation nav
    var lastScroll = 0;
    jQuery(window).scroll(function () {
        var windowScrollPosTop = jQuery(window).scrollTop();

        if (windowScrollPosTop > lastScroll && windowScrollPosTop >= 150) {
            jQuery(".header").css({
                "background": "#B193DD",
            });
            jQuery(".top-header img.logo").css({
                "margin-top": "-85px",
                "margin-bottom": "0"
            });
            jQuery(".navbar-default").css({
                "margin-top": "-95px",
            });
            jQuery(".top-header").css({
                "border-bottom": "none",
            });
            
        } else {
            jQuery(".header").css({
                "background": "transparent",
            });
            jQuery(".top-header img.logo").css({
                "margin-top": "5px",
                "margin-bottom": "0px"
            });
            jQuery(".navbar-default").css({
                "margin-top": "8px",
                "margin-bottom": "0"
            });
           jQuery(".top-header").css({
               "border-bottom": "1px solid #D6D6D6",
           });
        }
        lastScroll = windowScrollPosTop;
    });

});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();  
    var limit     = $(window).height()/2,
        backToTop = $('#back-to-top');

    $(window).scroll(function () {
        if ( $(this).scrollTop() > limit ) {
            backToTop.fadeIn();
        } else {
            backToTop.fadeOut();
        }
    });
    
    // scroll body to 0px on click
    backToTop.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1500);
        return false;
    });
    
});
$(".inputField").on('input', function() {      
   if($(this).val() == '') {
      $(this).siblings('.inputField-delete').hide();
   }
   else {
      $(this).siblings('.inputField-delete').show();
   }
});
$(".inputField-delete").on('click', function() {       
      $(this).siblings('.inputField').val('');
      $(this).hide();
});
$("#datepicker1").on('change', function() {       
      if($(this).val() == '') {
         $(this).siblings('.inputField-delete').hide();
      }
      else {
         $(this).siblings('.inputField-delete').show();
      }
});
