<?php
session_start();

//incluye la clase Tipo y CrudTipo
require_once('../bd/tipo/crud_tipo.php');
require_once('../bd/tipo/tipo.php');
$crud=new CrudTipo();
$tipo= new Tipo();
//obtiene todos los libros con el método mostrar de la clase crud
$listaTipos=$crud->mostrar();

 
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
                            <li class="breadcrumb-item active">Tipos</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body" style="text-align: center;">
                                <h2>Gestión de Tipos</h2>
				                <h3>Lista de tipos de productos</h3>
				                <br>
				                <form action="nuevo_tipo.php" method="POST">
				                    <input type="submit" class="btn btn-success" value="Nuevo tipo">
				                </form>
				                <br>
				                <table class="table table-striped">
				                  <thead>
				                    <tr>
				                      <th WIDTH="8%" scope="col">Código</th>
				                      <th WIDTH="20%" scope="col">Nombre</th>
				                      <th WIDTH="50%" scope="col">Descricpión</th>
				                      <th WIDTH="20%" scope="col">Opciones</th>
				                    </tr>
				                  </thead>
				                  <tbody>                    
				                    <?php foreach ($listaTipos as $tipo) {?>
				                    <tr>
				                      <td WIDTH="8%"><?php echo $tipo->getId() ?></td>
				                      <td WIDTH="20%"><?php echo $tipo->getNombre() ?></td>
				                      <td WIDTH="50%"><?php echo $tipo->getDescripcion() ?></td>
				                      <td WIDTH="20%">
				                          <a class="btn btn-primary" href="actualizar_tipo.php?id=<?php echo $tipo->getId()?>&accion=a">Actualizar</a>
				                          <a class="btn btn-danger" href="../bd/tipo/administrar_tipo.php?id=<?php echo $tipo->getId()?>&accion=e">Eliminar</a>
				                      </td>
				                    </tr>
				                    <?php }?>
				                  </tbody>
				                </table>
				                <br>
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