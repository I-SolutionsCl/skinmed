$(function () {

    $('a[href*=#]').click(function () {

        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                && location.hostname == this.hostname) {

            var $target = $(this.hash);

            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');

            if ($target.length) {

                var targetOffset = $target.offset().top;

                $('html,body').animate({scrollTop: targetOffset}, 1000); // fixear 

                return false;

            }

        }

    });

});


$(document).ready(function() {
    
    var original_position_offset = $('.bot').offset();
    barra = original_position_offset.top;
    $('.bot').css('position', 'fixed');
});

$(window).scroll(function () {
    var height = $('.bot').outerHeight();
    var where_scroll = $(window).scrollTop();
    var window_height = $(window).height();
 //alert(where_scroll + window_height+" BARRA "+barra +"HEIGHT" +height);
    if((where_scroll + window_height) =< barra) {
       
//        $('.bot').css({'position':'relative', 'bottom':'0px'});
         $('.bot').css({'position':'relative', 'bottom':'0px'});
    }
      if((where_scroll + window_height) > (barra + height))  {
           
//         $('.bot').css('position', 'fixed');
        $('.bot').css({'position':'fixed', 'bottom':'0px'});
    }

});


 

  



