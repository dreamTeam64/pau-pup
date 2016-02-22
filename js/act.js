$(document).ready(function(){
        $.ajax({
            url : "/intranet/scripts/getFlux.php",
            type : "GET",
            success : function(html){
                $('#actualite').append(html);
            }
        });

        
});

function charger(){
    setTimeout( function(){
        $.ajax({
            url : "/intranet/scripts/getFlux.php",
            type : "GET",
            success : function(html){
                $('#actualite').empty(html);
                $('#actualite').prepend(html);
            }
        });
        charger();
    }, 5000);
}

charger();