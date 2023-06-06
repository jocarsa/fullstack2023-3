var yo = "";
var tu = "";
// Navegación entre las pantallas
$(document).ready(function(){
    if($.cookie('usuario') != null){
        yo = $.cookie('usuario')
        $("#login").hide();
        $("#usuarios").show();
        $("#contactos").load("php/listacontactos.php?yo="+yo)
    }else{
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
                        $.cookie('usuario', $("#usuario").val(), { expires: 7 });
                        yo = $("#usuario").val();
                        $("#login").hide();
                        $("#usuarios").show();
                        $("#contactos").load("php/listacontactos.php?yo="+yo)
                    }
                }
            });
        });
    }
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
            $("#ajax").load("php/guardamensaje.php?yo="+yo+"&tu="+tu+"&mensaje="+encodeURI(mensaje))
        }
      });
});