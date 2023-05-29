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
                <h2>Tabla: <?php echo $_GET['tabla']; ?></h2>
                <div id="caja">
                    <?php
                        include "inc/tabla.php";
                    ?>
                </div>
            </section>
        </main>
        <footer>
        </footer>
    </body>
</html>