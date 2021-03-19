<?php
session_start();

//incluye la clase Tipo y CrudTipo
require_once('../bd/usuario/crud_usuario.php');
require_once('../bd/usuario/usuario.php');
$crud=new CrudUsuario();
$usuario=new Usuario();
//obtiene todos los libros con el método mostrar de la clase crud
$usuario=$crud->obtenerUsuario($_GET['id']);
 
if(!isset($_SESSION['user'])){
    header('Location: ../index.php');
    exit;
} else {?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Proyecto G1</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php require_once('nav_sup.php'); ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php require_once('nav_main.php'); ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Administrador</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Usuarios</li>
                        </ol>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header">
                                            <h3 class="text-center font-weight-light my-4">Actualizar Usuario</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="../bd/usuario/administrar_usuario.php" method="post">
                                            	<input type='hidden' name='id' value='<?php echo $usuario->getId()?>'>
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputEmailAddress">Nombre de Usuario</label>
                                                    <input class="form-control py-4" id="inputUserName" name="usuario" type="text" aria-describedby="emailHelp" value="<?php echo $usuario->getUsuario()?>" readonly required />
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="inputFirstName">Nombres</label>
                                                            <input class="form-control py-4" id="inputFirstName" name="nombre" type="text" value="<?php echo $usuario->getNombre()?>" required pattern="[A-Za-z]+" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="inputLastName">Apellidos</label>
                                                            <input class="form-control py-4" id="inputLastName" name="apellido" type="text" value="<?php echo $usuario->getApellido()?>" required pattern="[A-Za-z]+" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputEmailAddress">Correo</label>
                                                    <input class="form-control py-4" id="inputEmailAddress" name="correo" type="email" aria-describedby="emailHelp" value="<?php echo $usuario->getCorreo()?>" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputAddress">Dirección</label>
                                                    <input class="form-control py-4" id="inputAddress" name="direccion" type="text" aria-describedby="emailHelp" value="<?php echo $usuario->getDireccion()?>" pattern="[A-Za-z0-9]+" required />
                                                </div>
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputEmailAddress">Contraseña</label>
                                                    <input class="form-control py-4" id="inputEmailAddress" name="clave" type="password" aria-describedby="emailHelp" value="<?php echo $usuario->getClave()?>" required />
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control py-4" id="inputTipeAccount" name="cuenta" type="hidden" aria-describedby="emailHelp" value="<?php echo $usuario->getTipo()?>" disabled />
                                                </div>
                                                <input type='hidden' name='actualizar' value='actualizar'>
                                                <div class="form-group mt-4 mb-0">
                                                <input type="submit"  class="btn btn-primary btn-block" value="Guardar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Proyecto G1 2021</div>
                            <div>
                                <a href="#">Todos los derechos reservados</a>
                                &middot;
                                <a href="#">Sangolquí 2021</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
    </body>
</html>

<?php }
?>