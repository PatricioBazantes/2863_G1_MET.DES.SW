<?php
$servername = "localhost:3308";
$database = "agricola_01";
$username = "admin";
$password = "admin";

$usuario=$_POST['user'];
$nombre=$_POST['fname'];
$apellido=$_POST['lname'];
$correo=$_POST['mail'];
$clave=$_POST['pass'];
$tipo='Usuario';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Fallo al conectar a la Base de Datos: " . mysqli_connect_error());
}
 
echo "Conexión a la base de datos exitosa!<br>";
 
$sql = "INSERT INTO usuario(CodigoUsuario, NombreUsuario, Nombres, Apellidos, Correo, Clave, Tipo) 
      VALUES (NULL, '$usuario', '$nombre', '$apellido', '$correo', '$clave', '$tipo')";
if (mysqli_query($conn, $sql)) {
      echo "<br>Nuevo usuario registrado";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
