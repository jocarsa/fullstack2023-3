<?php
    session_start();
    if(!isset($_SESSION['llave'])){
        echo "No puedes entrar";
        die();
    }
?>
<!doctype html>
<html lang="es">
    <head>
        <title>Panel de control</title>
        <meta charset="utf-8">
        <link rel="Stylesheet" href="css/paneldecontrol.css"> 
    </head>
    <body>
        <header>
            <h1>Panel de control</h1>
        </header>
        <main>
            <nav>
                <?php include "inc/navegacion.php"; ?>
            </nav>
            <section>
                
                    <?php 
                        if(isset($_GET['tabla'])){
                            echo "<h2>Tabla: ".$_GET['tabla']."</h2>"; 
                        }
                    ?>
                <div id="caja">
                    <?php
                    if(isset($_GET['tabla'])){
                        include "inc/tabla.php";
                    }else{
                        echo "Estás en el escritorio";
                    }
                    ?>
                </div>
            </section>
        </main>
        <footer>
        </footer>
    </body>
</html>
<?php include "inc/registro.php" ?>