<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=StyleSheet href="css/estilos.css" TYPE="text/css" />
    <title>Proyecto - G1</title>
</head>
<body>
    <br>
    <div style="position: relative; width:100%; height:100%;">
        <h1 style="text-align:center; color:white">Proyecto Grupo 1</h1>
        <br>
        <div class="cont1">
            <br><br>
            <h2>Acceso al sistema</h2>
            <form action="bd/login.php" method="POST">
                <br>
                <label for="fname">Nombre de usuario:</label><br>
                <input type="text" id="usuario" name="usuario"><br>
                <br>
                <label for="lname">Contraseña:</label><br>
                <input type="text" id="clave" name="clave"><br><br>
                <br>
                <input type="submit" value="Acceder">
                <br><br><br>
                <input type="submit" value="Registrarse">
            </form>
        </div>
    </div>
    
</body>
</html>
