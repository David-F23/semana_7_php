<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="style/css" href="result_ej1.php">-->
    <title>Cookies</title>
</head>
<body>
    
    <form action="result_ej1.php" method="get">
        
        <label for="colorArriba">Elija un color de arriba</label><br>
        <select name="colorArriba" id="colorArriba" required>
            <option value=""></option>
            <option value="rojo">Rojo</option>
            <option value="azul">Azul</option>
            <option value="verde">Verde</option>
        </select><hr>
        <label for="colorMedio">Elija un color del medio</label><br>
        <select name="colorMedio" id="colorMedio" required>
            <option value=""></option>
            <option value="rojo">Rojo</option>
            <option value="azul">Azul</option>
            <option value="verde">Verde</option>
        </select><hr>
        <label for="colorAbajo">Elija un color de abajo</label><br>
        <select name="colorAbajo" id="colorAbajo" required>
            <option value=""></option>
            <option value="rojo">Rojo</option>
            <option value="azul">Azul</option>
            <option value="verde">Verde</option>
        </select><hr>
        <input type="submit" value="Continuar">
    </form>
</body>
</html>