<?php
    session_start();
    if (isset($_POST['Acceder'])) {
        include('conexion.php');
        $usuario=$_POST['usuario'];
        $clave=$_POST['clave'];
        if (empty($usuario) || empty($clave)) {
            $variable1 = "El nombre de usuario o contraseña es incorrecto";
            Header("Location: ../error.php/?variable1=$variable1");
        }else{
            $sql = "SELECT nombreusuario,nombres,apellidos,correo,clave,tipo,direccion FROM usuario WHERE nombreusuario = '".$usuario."' and clave='".$clave."';";
            $query=mysqli_query($conn,$sql);
            while ($registro = mysqli_fetch_array($query)){
                $user = $registro['nombreusuario'];
                $nombres = $registro['nombres'];
                $apellidos = $registro['apellidos'];
                $clave = $registro['clave'];
                $correo = $registro['correo'];
                $tipo = $registro['tipo'];
                $direccion = $registro['direccion'];
            //array("{$registro['$variable']}","{$registro['fecha_muestra1']}","{$registro['fecha_muestra2']}");
            }
            $counter=mysqli_num_rows($query);

            if ($counter==1) {
                //echo "<br>Acceso al sistema";
                $_SESSION['user'] = $user;
                $_SESSION['nombres'] = $nombres;
                $_SESSION['apellidos'] = $apellidos;
                $_SESSION['correo'] = $correo;
                $_SESSION['clave'] = $clave;
                $_SESSION['tipo'] = $tipo;
                $_SESSION['direccion'] = $direccion;
                if($tipo=='Usuario'){
                    Header("Location: ../Usuario/usuario.php");
                }else{
                    Header("Location: ../Administrador/admin.php");
                }
            } else {
                //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                echo "<br>Error. El nombre de usuario o contraseña son incorrectos.";
            }
        }
    } elseif(isset($_POST['Registrar'])){
        Header("Location: ../registro.php");
    }
    mysqli_close($conn);
?>