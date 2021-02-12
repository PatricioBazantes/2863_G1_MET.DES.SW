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
            <li><a href="usuario.php">Inicio</a></li>
            <li><a href="#">Mi cuenta</a></li>
            <li><a href="#">Nueva búsqueda</a></li>
            <li><a href="#">Historial de búsquedas</a></li>
            <li><a href="../bd/salir.php">Cerrar sesión</a></li>
        </ul></nav>

        <br><br><br><br>
        <h1>Usuario: <?php echo $_SESSION['user'];?></h1>
        <h2>Datos de la cuenta: </h2>
        <h3>Nombres: <?php echo $_SESSION['nombres']; ?></h3>
        <h3>Apellidos:  <?php echo $_SESSION['apellidos']; ?></h3>
        <h3>Correo:  <?php echo $_SESSION['correo']; ?></h3>
        <h3>Tipo de cuenta:  <?php echo $_SESSION['tipo']; ?></h3>
        <form action="actualizar.php" method="POST">
            <input type="submit" value="Actualizar datos">
        </form>
    </body>
    </html>
<?php }
?>