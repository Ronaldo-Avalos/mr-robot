$(document).ready(function(){

$(window).scroll(function(){
     var windowWidth = $(window).width();

    
      
      var scroll = $(window).scrollTop();

      $('.acerca-de article').css({

      	'transform': 'translate (0px , -'+ scroll / 4 +'%)'
      });

   });

});