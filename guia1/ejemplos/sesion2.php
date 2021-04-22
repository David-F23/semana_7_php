<?php
    if(isset($_POST["user"]) && isset($_POST["clave"])){

        session_start();
        $_SESSION["UserSesion"] = $_POST["user"];

    }else{

        header("Location: sesion1.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión 2</title>
</head>
<body>
    
    <p>Bienvenido/a : <?php echo $_SESSION['UserSesion']; ?></p>
</body>
</html>