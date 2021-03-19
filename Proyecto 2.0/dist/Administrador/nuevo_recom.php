<?php
session_start();

require_once('../bd/recomendaciones/crud_recom.php');
require_once('../bd/recomendaciones/recom.php');
require_once('../bd/recomendaciones/producto.php');

$crud=new CrudRecom();
$usuario= new Recom();
$codigo=$crud->obtenerid();
$producto=new Producto();
$listaP=$crud->listarp();

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
                            <li class="breadcrumb-item active">Recomendaciones</li>
                        </ol>
                        <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Añadir nueva Recomendación</h3></div>
                                    <div class="card-body">
                                        <form action="../bd/recomendaciones/administrar_recom.php" method="post">
                                            <input type='hidden' name='id' value="<?php echo $codigo ?>">
                                            <div class="form-group">
	                                            <label class="small mb-1" for="inputAddress">Producto</label><br>
							                    <select class="form-control" name="idprod" aria-label="Default select example">
							                    <?php foreach ($listaP as $prod) {?>
							                        <option value="<?php echo $prod->getId() ?>"><?php echo $prod->getNombre() ?></option>
							                    <?php }?>
							                    </select>
						                	</div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Nombre Recomendación</label>
                                                <input class="form-control py-4" id="inputEmailAddress" name="nombre" type="text" aria-describedby="emailHelp"  required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputAddress">Descripción</label>
                                                <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
	                                            <label class="small mb-1" for="inputAddress">Tipo</label><br>
							                    <select class="form-control" name="tipo" aria-label="Default select example">
							                    <option value="Suelo">Suelo</option>
							                    <option value="Clima">Clima</option>
							                    </select>
						                	</div>
						                	<input type='hidden' name='insertar' value='insertar'>
                                            <div class="form-group mt-4 mb-0">
                                                <input type="submit"  class="btn btn-primary btn-block" value="Guardar">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="recoms.php">Volver</a></div>
                                    </div>
                                </div><br>
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