<?php
    $edad = 66;
    if($edad < 30){
        if($edad < 15){
           echo "Eres un niño"; 
        }else{
           echo "Eres un joven";  
        } 
    }else{
        if($edad < 60){
           echo "Ya no eres un joven"; 
        }else{
           echo "Decididamente... ya no eres joven";  
        } 
    }
    
?>
