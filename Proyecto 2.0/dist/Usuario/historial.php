<?php
session_start();

require_once('../bd/consultas/crud_consulta.php');
require_once('../bd/consultas/consulta.php');
$crud=new CrudConsulta();
$consulta= new Consulta();
$id = $_SESSION['idUsuario'];
$listaConsultas=$crud->mostrar($id);
 
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
                        <h1 class="mt-4">Usuario</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Historial</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body" style="text-align: center;">
                                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                                <br>
                                <h2>Historial de Búsquedas</h2>
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    Listado de búsquedas
                                </div>
                                <div class="table-responsive">
                                <br>
				                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
				                  <thead>
				                    <tr>
				                      <th WIDTH="10%" scope="col">Fecha</th>
				                      <th WIDTH="20%" scope="col">Ubicación</th>
				                      <th WIDTH="10%" scope="col">Tipo</th>
				                      <th WIDTH="15%" scope="col">Producto</th>
				                      <th WIDTH="10%" scope="col">Tipo de recomendación</th>
                      				  <th WIDTH="25%" scope="col">Recomendación</th>
				                    </tr>
				                  </thead>
				                  <tbody>                    
				                    <?php foreach ($listaConsultas as $recom) {?>
				                    <tr>
				                      <td WIDTH="10%"><?php echo $recom->getFecha() ?></td>
				                      <td WIDTH="20%"><?php echo $recom->getDescripcion() ?></td>
				                      <td WIDTH="10%"><?php echo $recom->getTipop() ?></td>
				                      <td WIDTH="15%"><?php echo $recom->getProducto() ?></td>
				                      <td WIDTH="10%"><?php echo $recom->getTipo() ?></td>
                      				  <td WIDTH="25%"><?php echo $recom->getDescR() ?></td>
				                    </tr>
				                    <?php }?>
				                  </tbody>
				                </table>
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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
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