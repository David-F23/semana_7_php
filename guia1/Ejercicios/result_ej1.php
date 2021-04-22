<?php
    if(isset($_GET["colorArriba"])){

        
        $nombre1 = $_GET["colorArriba"];
        $nombre2 = $_GET["colorMedio"];
        $nombre3 = $_GET["colorAbajo"];
        $valor1 = $_GET["colorArriba"];
        $valor2 = $_GET["colorMedio"];
        $valor3 = $_GET["colorAbajo"];
        $expi = time() + 5;
        $ruta = "/";

        setcookie($nombre1, $valor1, $expi, $ruta, "");

        setcookie($nombre2, $valor2, $expi, $ruta, "");

        setcookie($nombre3, $valor3, $expi, $ruta, "");
    }else{

        header("Location: ejercicio1.php");
    }
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado cookie</title>
</head>
<body>

    <section class="arriba">
        <?php echo 'nombre: '. $_COOKIE[$nombre1]; ?>
    </section>
    <div class="medio">
        <?php echo 'nombre: '. $_COOKIE[$nombre2]; ?>
    </div>
    <div class="abajo">
        <?php echo 'nombre: '. $_COOKIE[$nombre3]; ?>
    </div>
    <a href="ejercicio1.php">Volver</a>
    
    <?php include('Style.php'); ?>
</body>
</html>