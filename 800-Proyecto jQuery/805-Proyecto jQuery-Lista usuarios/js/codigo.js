// Navegación entre las pantallas
$(document).ready(function(){
    console.log("jQuery funcionando");
    $("#enviarlogin").click(function(){
        $.ajax({
            async: true,
            type: "POST",
            dataType: "html",
            url: "php/login.php",
            data: "usuario="+$("#usuario").val()+"&contrasena="+$("#contrasena").val(),
            success: function(datos){
                console.log(datos)
                if(datos == "ok"){
                    $("#login").hide();
                    $("#usuarios").show();
                    $("#contactos").load("php/listacontactos.php")
                }
            }
        });
    });
    $(".contacto").click(function(){
        $("#usuarios").hide();
        $("#chat").show();
    });
    $("#volver").click(function(){
        $("#chat").hide();
        $("#usuarios").show();
    })
});