<?php

    try {
        include "0-origen.php";
    } catch (Exception $e) {
        echo 'Ha habido un error: ',  $e->getMessage(), "\n";
    }

?>