<table>
    <thead>
        <tr>
            <?php

                include "configuracion.php";

                $peticion = "
                    SHOW COLUMNS FROM ".$_GET['tabla']."
                ";

                $resultado = mysqli_query($mibd, $peticion);

                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<th>".$fila['Field']."</th>";

                }

            ?>
        </tr>
    </thead>