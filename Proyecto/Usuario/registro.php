<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=StyleSheet href="../css/estilos.css" TYPE="text/css" />
    <title>Proyecto - G3</title>
</head>
<body>
    <br>
    <div style="position: relative; width:100%; height:100%;">
        <h1 style="text-align:center; color:white">Proyecto Grupo 3</h1>
        <br>
        <div class="cont1">
            <h2>Registrarse</h2>
            <form action="../bd/conexion.php" method="POST">
                <br>
                <label for="fname">Nombre de usuario:</label><br>
                <input type="text" id="user" name="user"><br>
                <br>
                <label for="fname">Nombre:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <br>
                <label for="fname">Apellido:</label><br>
                <input type="text" id="lname" name="lname"><br>
                <br>
                <label for="fname">Correo:</label><br>
                <input type="email" id="mail" name="mail"><br>
                <br>
                <label for="lname">Contraseña:</label><br>
                <input type="password" id="pass" name="pass"><br>
                <br>
                <input type="submit" value="Enviar">
                <br>
            </form>
        </div>
    </div>
    
</body>
</html>
