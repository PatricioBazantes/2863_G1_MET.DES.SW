<?php
//if (isset($_POST['registrar'])) {
    include('conexion.php');
    $usuario=$_POST['user'];
    $nombre=$_POST['fname'];
    $apellido=$_POST['lname'];
    $correo=$_POST['mail'];
    $clave=$_POST['pass'];
    $tipo='Usuario';
    if (empty($_POST['user']) || empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['mail']) || empty($_POST['pass'])) {
        $variable1 = "Es necesario llenar todos los campos";
        Header("Location: ../Usuario/error.php/?variable1=$variable1");
    }else{
        $q = mysqli_query($conn, "SELECT * FROM usuario WHERE nombreusuario = '$usuario'");
        if( mysqli_num_rows($q) == 0){
            $rs = mysqli_query($conn, "SELECT MAX(codigousuario) AS codigousuario FROM usuario");
            if ($row = mysqli_fetch_row($rs)) {
                $codigo = trim($row[0]);
                $codigo = $codigo+1;
            }

            $sql = "INSERT INTO usuario(CodigoUsuario, NombreUsuario, Nombres, Apellidos, Correo, Clave, Tipo) 
                VALUES ('$codigo', '$usuario', '$nombre', '$apellido', '$correo', '$clave', '$tipo')";
            if (mysqli_query($conn, $sql)) {
                echo "<br>Nuevo usuario registrado";
                $variable1 = "Nuevo usuario creado, ya puedes iniciar sesión con tu cuenta.";
                Header("Location: ../Usuario/nregistro.php/?variable1=$variable1");
                //$_SESSION['user_id'] = $result['ID'];
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }else{
            $variable1 = "¡Error! el usuario ya está registrado en el sistema.";
            Header("Location: ../Usuario/error.php/?variable1=$variable1");
        }
        mysqli_close($conn);
    }
?>