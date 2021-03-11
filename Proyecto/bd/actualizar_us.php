<?php
    include('conexion.php');
    $usuario=$_POST['user'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $direccion=$_POST['direccion'];
    //$tipo='Usuario';
    if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['correo'])) {
        $variable1 = "Es necesario llenar todos los campos";
        Header("Location: ../Usuario/error.php/?variable1=$variable1");
    }else{
        $sql = "UPDATE usuario SET nombres='$nombre', apellidos='$apellido', correo='$correo', direccion='$direccion' WHERE nombreusuario='$usuario'";
        echo "SQL: ".$sql;
        //mysqli_query($conn, $sql);
        
        if (mysqli_query($conn, $sql)) {
            //echo "<br>Usuario actualizado";
            //$variable1 = "Datos actualizados correctamente.";
            session_start ();
            $_SESSION['nombres'] = $nombre;
            $_SESSION['apellidos'] = $apellido;
            $_SESSION['correo'] = $correo;
            $_SESSION['direccion'] = $direccion;
            Header("Location: ../Administrador/datos.php");
            //$_SESSION['user_id'] = $result['ID'];
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>