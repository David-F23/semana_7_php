<?php
    if(isset($_POST["usuario"]) && isset($_POST["email"]) && isset($_POST["clave"])){

        session_start();

        $_SESSION["SesionUsuario"] = array(
            'Usuario' => $_POST['usuario'],
            'Email' => $_POST['email'],
            'Clave' => $_POST['clave'],
        ); 

        
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

    <style>
        h1{
            text-align: center;
            border:1px solid;
        }

        h3{
            text-align: center;
        }

        .green{
            background-color:rgb(0, 255, 0);
        }
    </style>
</head>
<body>
    <h1>Bienvenido/a</h1>
    <h3><mark class="green"><?php echo 'Ha iniciado sesión: </mark><mark>'. $_SESSION["SesionUsuario"]['Usuario']; ?></mark></h3>
    <h3><mark class="green"><?php echo 'Correo: </mark><mark>'. $_SESSION["SesionUsuario"]['Email']; ?></mark></h3>
    <h3><mark class="green"><?php echo 'Clave: </mark><mark>'. $_SESSION["SesionUsuario"]['Clave']; ?></mark></h3>

    
</body>
</html>