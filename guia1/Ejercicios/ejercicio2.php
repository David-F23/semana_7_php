<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <div class="form-container">
        <form action="" id="form" method="post">
            <h3>Login</h3>
            <div class="container">
                <span class="icon"><i class="user"></i></span>
                <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
            </div>
            <div class="container">
                <span class="icon"><i class="correo"></i></span>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="container">
                <span class="icon"><i class="contrasena"></i></span>
                <input type="password" name="clave" id="clave" placeholder="Contraseña">
            </div>
            <input type="submit" value="login">
        </form>
    </div>
</body>
</html>