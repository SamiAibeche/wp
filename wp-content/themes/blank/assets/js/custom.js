$(document).ready(function(){
    console.log("Script Loaded");


    /**
     * Ajax Request Example
     */

    //We use FormData Object if we want to send a file with ajax.
    var data = new FormData();
    data.append("action", "blank_ajax_action");

    $.ajax({
        url: myscript.url,
        data : data,
        cache: false,
        dataType: 'json',
        processData: false, // Don't process the files
        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
        type: 'POST'

    }).done(function(response) {
        console.log(response);
    });

});