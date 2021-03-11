<?php
session_start();
 
if(!isset($_SESSION['user'])){
    header('Location: ../index.php');
    exit;
} else {?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel=StyleSheet href="../css/estilos.css" TYPE="text/css" />
        <title>Proyecto - G1</title>
    </head>
    <body>
        <?php require_once('menu.php'); ?>
        <br><br><br><br>
        <div class="cont1">
           <h1>Actualizar datos</h1>
           <form action="../bd/actualizar_us.php" method="POST">
                <label for="user">Nombre de usuario:</label><br>
                <input type="text" id="user" name="user" value="<?php echo $_SESSION['user'];?>"><br>
                <label for="nombre">Nombres:</label><br>
                <input type="text" id="nombre" name="nombre" value="<?php echo $_SESSION['nombres']; ?>" required pattern="[A-Za-z]+"><br>
                <label for="apellido">Apellidos:</label><br>
                <input type="text" id="apellido" name="apellido" value="<?php echo $_SESSION['apellidos']; ?>" required pattern="[A-Za-z]+"><br>
                <label for="correo">Correo:</label><br>
                <input type="email" id="correo" name="correo" value="<?php echo $_SESSION['correo']; ?>" required><br>
                <label for="direccion">Direccion:</label><br>
                <input type="text" id="direccion" name="direccion" value="<?php echo $_SESSION['direccion']; ?>"><br>
                <label for="cuenta">Tipo de cuenta:</label><br>
                <input type="text" id="cuenta" name="cuenta" value="<?php echo $_SESSION['tipo']; ?>" disabled><br><br>
                <input type="submit" class="btn btn-primary" value="Actualizar datos"><br><br>
           </form>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
    </html>
<?php }
?>