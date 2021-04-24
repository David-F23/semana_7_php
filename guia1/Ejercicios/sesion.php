<?php
    if(isset($_POST["usuario"]) && isset($_POST["email"]) && isset($_POST["clave"])){

        session_start();

        $_SESSION["SesionUsuario"] = $_POST["usuario"];

        echo 'Ha iniciado sesión, Bienvenido/a: '. $_SESSION["SesionUsuario"];
    }else{

        header('Location: ejercicio2.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión</title>
</head>
<body>
    <h1></h1>
</body>
</html>