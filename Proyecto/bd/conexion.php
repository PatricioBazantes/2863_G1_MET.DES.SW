<?php
$servername = "localhost:3308";
$database = "proyecto";
$username = "admin";
$password = "admin";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Fallo al conectar a la Base de Datos: " . mysqli_connect_error());
}
?>
