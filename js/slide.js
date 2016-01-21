$(function(){ //se lance quand la page est chargé
      setInterval(function(){
         $(".slideshow ul").animate({marginLeft:-100},500,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 3500);
   });