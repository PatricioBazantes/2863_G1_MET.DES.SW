<?php
    include('conexion.php');
    
    $sql = "SELECT * FROM tipo";
    echo "SQL: ".$sql;
    //mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
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
?>