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
        <link rel=StyleSheet href="../css/estilos.css" TYPE="text/css" />
        <title>Proyecto - G1</title>
    </head>
    <body>
        <nav><ul>
            <li><a href="admin.php">Inicio</a></li>
            <li><a href="#">Mi cuenta</a></li>
            <li><a href="#">Gestión de usuarios</a></li>
            <li><a href="#">Gestión de recomendaciones</a></li>
            <li><a href="../bd/salir.php">Cerrar sesión</a></li>
        </ul></nav>
        <br><br><br>
        <h1>Administrador</h1>
        <img src="../img/user.png" alt="" width="25%" height="25%">
        <h2>Bienvenido <?php echo $_SESSION['user']; ?></h2>
    </body>
    </html>
<?php }
?>