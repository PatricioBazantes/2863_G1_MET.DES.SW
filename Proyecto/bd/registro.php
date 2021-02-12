<?php
//if (isset($_POST['registrar'])) {
    include('conexion.php');
    $usuario=$_POST['user'];
    $nombre=$_POST['fname'];
    $apellido=$_POST['lname'];
    $correo=$_POST['mail'];
    $clave=$_POST['pass'];
    $tipo='Usuario';
    
    $rs = mysqli_query($conn, "SELECT MAX(codigousuario) AS codigousuario FROM usuario");
    if ($row = mysqli_fetch_row($rs)) {
        $codigo = trim($row[0]);
        $codigo = $codigo+1;
    }

    $sql = "INSERT INTO usuario(CodigoUsuario, NombreUsuario, Nombres, Apellidos, Correo, Clave, Tipo) 
        VALUES ('$codigo', '$usuario', '$nombre', '$apellido', '$correo', '$clave', '$tipo')";
    if (mysqli_query($conn, $sql)) {
        echo "<br>Nuevo usuario registrado";
        //$_SESSION['user_id'] = $result['ID'];
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
//}
?>