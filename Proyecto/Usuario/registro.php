<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel=StyleSheet href="../css/estilos.css" TYPE="text/css" />
    <title>Proyecto - G1</title>
</head>
<body>
    <br>
    <div style="position: relative; width:100%; height:100%;">
        <h1 style="text-align:center; color:white">Proyecto Grupo 1</h1>
        <br>
        <div class="cont1">
            <h2>Registrarse</h2>
            <form action="../bd/registro.php" method="POST">
                <br>
                <label for="fname">Nombre de usuario:</label><br>
                <input type="text" id="user" name="user" required pattern="[A-Za-z0-9]+"><br>
                <br>
                <label for="fname">Nombre:</label><br>
                <input type="text" id="fname" name="fname" required pattern="[A-Za-z]+"><br>
                <br>
                <label for="fname">Apellido:</label><br>
                <input type="text" id="lname" name="lname" required pattern="[A-Za-z]+"><br>
                <br>
                <label for="fname">Correo:</label><br>
                <input type="email" id="mail" name="mail" required><br>
                <br>
                <label for="lname">Contraseña:</label><br>
                <input type="password" id="pass" name="pass" required minlength="3"><br>
                <br>
                <input type="submit" value="Enviar">
                <br>
            </form>
            <br>
            <form action="../index.php">
                <input type="submit" value="Iniciar sesión">
            </form>
            <br>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>