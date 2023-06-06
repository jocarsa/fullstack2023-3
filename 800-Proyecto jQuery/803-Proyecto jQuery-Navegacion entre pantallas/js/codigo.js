// Navegación entre las pantallas
$(document).ready(function(){
    console.log("jQuery funcionando");
    $("#enviarlogin").click(function(){
        $("#login").hide();
        $("#usuarios").show();
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