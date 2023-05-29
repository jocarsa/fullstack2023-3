<?php
    
    $cadena = "Hola soy Jose Vicente y estoy muy seguro de que me llamo Jose Vicente";
    $explotado = explode(" ",$cadena);
    echo $explotado[1];
    echo "<br>";
    echo $cadena[1];
    $reemplazo = str_replace("Jose","Juan",$cadena);
    echo "<br>";
    echo $reemplazo;
    if(strpos($cadena,"Jorge") !== false){
        echo "existe en la cadena";
    }else{
        echo "no existe en la cadena";
    }
?>
