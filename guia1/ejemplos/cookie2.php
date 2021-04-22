<?php

    if(isset($_POST["nombre"]) && isset($_POST["valor"])){

        $nombre = $_POST["nombre"];
        $valor = $_POST["valor"];
        $tiempo_expi = time() + 5;
        $ruta = "/";

        setcookie($nombre, $valor, $tiempo_expi, $ruta, "");
    }else{

        header("Location: cookie1.php");
    }

    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies dos</title>
</head>
<body>
    <h1>Ejemplo de uso de cookies</h1>
    <hr>
    
    <p>Se ah creado una cookie de nombre: <b><?php echo $_COOKIE[$nombre]; ?></b></p>
    <p>Con el valor de: <b><?php echo $_COOKIE[$valor]; ?></b></p>
</body>
</html>