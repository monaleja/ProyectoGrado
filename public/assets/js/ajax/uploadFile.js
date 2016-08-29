$("#image").on('change', function() {
    var file = $(this)[0].files[0];
    var reader = new FileReader();

    reader.onloadend = function() {

        $('#getval').css('backgroundImage', "url(" + reader.result + ")");
        $('#icon').css('display',"none");
        var form = $("#form-loadimage");
        var url = form.attr("action");

        $.ajax({
            url: url, // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: reader.result, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(data)   // A function to be called if request succeeds
            {
                console.log(data);
            }
        });
    }

    if(file){
        reader.readAsDataURL(file);
    }


});