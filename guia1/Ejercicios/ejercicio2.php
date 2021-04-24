<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    
    <div class="form-container">
        <form action="sesion.php" id="form" method="post">
            <h3>Login</h3>
            <div class="container">
                <span class="icon"><img src="user.png" alt=""/></span>
                <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" required/>
            </div>
            <div class="container">
                <span class="icon"><img src="email.png" alt=""/></span>
                <input type="email" name="email" id="email" placeholder="Email" required/>
            </div>
            <div class="container">
                <span class="icon"><img src="clave.png" alt=""></span>
                <input type="password" name="clave" id="clave" placeholder="Contraseña" required/>
            </div>
            <input type="submit" value="login">
        </form>
    </div>
</body>
</html>