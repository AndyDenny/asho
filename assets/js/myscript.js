$(document).ready(function(){

    console.log("ready");

    $( "form" ).on( "submit", function( event ) {
        event.preventDefault();
        let obSerialezeString = $( this ).serialize();
        $.ajax({
            url: $( this ).attr('action'),
            data: obSerialezeString,
            dataType: 'json',
            type: 'POST',
            success: function(data){
                console.log( data );
            }
        });
        
    });
});