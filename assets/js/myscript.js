$(document).ready(function(){

    console.log("ready");

    $( "form" ).on( "submit", function( event ) {
        event.preventDefault();
        $.ajax({
            url: $( this ).attr('action'),
            data: new FormData($( this ).get(0)),
            dataType: 'json',
            type: 'POST',
            success: function(data){
                console.log( data );
            }
        });
        
    });
});