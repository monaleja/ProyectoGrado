$(document).ready(function(){

    $(".btn-delete").click(function(){

        var row = $(this).parents("tr");

        var usuario = row.data("usuario");
        var form = $("#form-delete");
        var url = form.attr("action").replace(":USUARIO",usuario);
        var data = form.serialize();

        $.ajax({
            url: url,
            type: "POST",
            data:data,
            cache:false,
            success: function(result){
                alert(result);
            },
            error:function(){
                alert("Ocurrio un error al borrar el usuario, Por favor comunicarse con soporte");
            }
        });
    });
});