$(document).ready(function(){

    console.log("ready");

    let mainPageForm = $("form.input-link-shorter")
    mainPageForm.find(".spinner-data-input").hide();
    mainPageForm.find(".spinner-data-input").removeClass('d-none');

    //
    $( "form" ).on( "submit", function( event ) {
        event.preventDefault();
        let _this = $( this );
        let obSerialezeString = _this.serialize();
        _this.find(".spinner-data-input").fadeIn();
        $.ajax({
            url: _this.attr('action'),
            data: obSerialezeString,
            dataType: 'json',
            type: 'POST',
            success: function(data){
                console.log( data );
                _this.find(".output-link-data").text(data);
                _this.find(".output-link-data").slideDown();
            }
        })
            .fail(function(data) {
                _this.find(".output-link-data").text(data.responseText);
        })
            .always(function(data) {
                console.log( data );
                setTimeout(function () {
                    _this.find(".spinner-data-input").fadeOut();
                },1000)

            });

    });
});