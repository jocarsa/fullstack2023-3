$(document).ready(function(){
    $("#enviarregistro").click(function(){
        console.log("ok registro")
        var nuevousuario = $("#nuevousuario").val();
        var nuevacontrasena = $("#nuevacontrasena").val();
        var nuevousuario = $("#nuevousuario").val();
        var nuevonombrecompleto = $("#nuevonombrecompleto").val();
        $.ajax({
            async: true,
            type: "POST",
            dataType: "html",
            url: "php/registrousuario.php",
            data: "usuario="+nuevousuario+"&contrasena="+nuevacontrasena+"&nombrecompleto="+nuevonombrecompleto,
            success: function(datos){
                console.log(datos)
                if(datos == "ok"){
                    $.cookie('usuario', nuevousuario, { expires: 7 });
                    yo = $("#usuario").val();
                    $("#login").hide();
                    $("#usuarios").show();
                    $("#contactos").load("php/listacontactos.php?yo="+yo)
                }
            }
        });
    })
})