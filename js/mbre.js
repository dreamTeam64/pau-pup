$(document).ready(function(){
        $.ajax({
            url : "../onlineShow.php",
            type : "GET",
            success : function(html){
                $('#WhosOnline').append(html);
            }
        });

        
});

function charger(){
    setTimeout( function(){
        $.ajax({
            url : "../onlineShow.php",
            type : "GET",
            success : function(html){
                $('#WhosOnline').empty(html);
                $('#WhosOnline').prepend(html);
            }
        });
        charger();
    }, 5000);
}

charger();