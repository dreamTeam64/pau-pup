

$(document).ready(function(){
	var isRight;
	isRight = true;
    $("#menuBut").click(function(){
    	if (isRight) {
    		$("#menuBut").animate({right : '250px'});
    		isRight = false;
    	} else{
    		$("#menuBut").animate({right : '0px'});
    		isRight = true;
    	};
    	$("#Logo").slideToggle();
        $("#menu ul").toggle();
    });
});