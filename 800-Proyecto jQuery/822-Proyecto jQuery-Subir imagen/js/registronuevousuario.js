$(document).ready(function(){
    $("#enviarregistro").click(function(){
        console.log("ok registro")
        var nuevousuario = $("#nuevousuario").val();
        var nuevacontrasena = $("#nuevacontrasena").val();
        var nuevousuario = $("#nuevousuario").val();
        var nuevonombrecompleto = $("#nuevonombrecompleto").val();
        var datosformulario = new FormData();
        datosformulario.append('image', $('#nuevafoto')[0].files[0]);
        datosformulario.append('usuario', nuevousuario);
        datosformulario.append('contrasena', nuevacontrasena);
        datosformulario.append('nombrecompleto', nuevonombrecompleto);
        $.ajax({
            async: true,
            type: "POST",
            dataType: "html",
            url: "php/registrousuario.php",
            data: datosformulario,
            processData: false,
            contentType: false,
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