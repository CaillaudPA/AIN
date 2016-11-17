/**
 * Created by Pierre-Antoine on 27/10/2016.
 */
$(document).ready(function(){

    $(".addFacebookAccout").on("click", function(){

        var route = $(this).attr('route');
        var divToHide = $(this).parent().parent();

        $.ajax({
            url: route,
            success: function (response) {
            },
            error: function (error) {
                console.log(error);
            }
        });

    });

});