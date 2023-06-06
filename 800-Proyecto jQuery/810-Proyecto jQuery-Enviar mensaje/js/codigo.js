var yo = "";
var tu = "";
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
                    yo = $("#usuario").val();
                    $("#login").hide();
                    $("#usuarios").show();
                    $("#contactos").load("php/listacontactos.php?yo="+yo)
                }
            }
        });
    });
    $(document).on("click",".contacto",function(){
        tu = $(this).attr("idcontacto");
        $("#usuarios").hide();
        $("#chat").show();
    });
    $("#volver").click(function(){
        $("#chat").hide();
        $("#usuarios").show();
    })
    $('#nuevomensaje').keydown(function(event) {
        if (event.keyCode === 13) {
            console.log('Voy a enviar un mensaje');
            var mensaje = $(this).val()
            $(this).val("");
        }
      });
});