
    <tbody>
        <?php
            include "configuracion.php";
            $peticion = "
                SELECT * FROM ".$_GET['tabla']."
            ";
            $resultado = mysqli_query($mibd, $peticion);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                foreach($fila as $clave=>$valor){
                    echo "<td>".$valor."</td>";
                }
                echo '
                    <td>
                        <a href="?operacion=editar&id='.$fila['Identificador'].'">
                            <button>
                                Editar
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="?operacion=eliminar&id='.$fila['Identificador'].'&tabla='.$_GET['tabla'].'">
                            <button>
                                Eliminar
                            </button>
                        </a>
                    </td>
                ';
                echo "</tr>";
            }
        ?>
        
    </tbody>
</table>