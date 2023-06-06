var temporizador = setTimeout("bucle()",1000);

function bucle(){
    $("main").load("php/cargamensajes.php?yo="+yo+"&tu="+tu)
    console.log("voy a los mensajes")
    var contenedor = $('main');
    contenedor.scrollTop(contenedor.prop("scrollHeight"));
    clearTimeout(temporizador);
    temporizador = setTimeout("bucle()",1000);
}