
    <tbody>
        <?php
            include "configuracion.php";
            $peticion = "
                SELECT * FROM ".$_GET['tabla']."
            ";
            if(isset($_GET['buscar'])){
                foreach($_POST as $clave => $valor){
                    $peticion .= "
                        WHERE ".$clave." LIKE '%".$valor."%'
                    ";
                }
                
            }
        echo $peticion;
            $resultado = mysqli_query($mibd, $peticion);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                foreach($fila as $clave=>$valor){
                    if(strpos($clave, "FK") !== false){
                        echo "<td>";
                        $partido = explode("_",$clave);
                        $tabla = $partido[1];
                        $columna = $partido[2];
                        $peticion2 = "
                            SELECT ".$columna." 
                            FROM ".$tabla."
                            WHERE Identificador = ".$valor."
                        ";
                        //echo $peticion2;
                        $resultado2 = mysqli_query($mibd, $peticion2);
                        while ($fila2 = mysqli_fetch_assoc($resultado2)) {
                            echo $fila2[$columna];
                        }
                        echo "</td>";
                    }else{
                        echo "<td>".$valor."</td>";
                    }
                    
                }
                echo '
                    <td>
                        <a href="?operacion=editar&id='.$fila['Identificador'].'&tabla='.$_GET['tabla'].'">
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