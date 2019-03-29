/* ############### index.php ##################*/

// fix navbar at the top when scrolling
$(window).scroll(function() {
   var pos = $(window).scrollTop();
   console.log(pos);
   if (pos>50) {
       $('nav').addClass('navbar-fixed-top container fade in');
       $('nav').css({
           
       })
   }
   else if(pos < 50){
       $('nav').removeClass('navbar-fixed-top container fade in');
   }
});