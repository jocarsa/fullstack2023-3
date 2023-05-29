<a href="?tabla=<?php echo $_GET['tabla']?>&operacion=nuevo">
        <button>
            Crear nuevo
        </button>
    </a>
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
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <tr>
            <?php
                $peticion = "
                    SHOW COLUMNS FROM ".$_GET['tabla']."
                ";
                $resultado = mysqli_query($mibd, $peticion);
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<th>
                    <form action='?tabla=".$_GET['tabla']."&buscar=si' method='POST'>
                    <input type='text' class='buscador' name='".$fila['Field']."'>
                    </form>
                    </th>";
                }
            ?>
            <th></th>
            <th></th>
        </tr>
    </thead>