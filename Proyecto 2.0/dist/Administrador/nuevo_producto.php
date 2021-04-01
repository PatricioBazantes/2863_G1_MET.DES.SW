<?php
session_start();

require_once('../bd/producto/crud_producto.php');
require_once('../bd/producto/producto.php');
require_once('../bd/producto/provincia.php');
require_once('../bd/producto/tipo.php');

$crud=new CrudProducto();
$producto= new Producto();
$tipo= new Tipo();
$provincia= new Provincia();
$listaP=$crud->listarp();
$listaT=$crud->listart();

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
                            <li class="breadcrumb-item active">Productos</li>
                        </ol>
                        <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Añadir nuevo Producto</h3></div>
                                    <div class="card-body">
                                        <form action="../bd/producto/administrar_producto.php" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Código</label>
                                                <input class="form-control py-4" id="inputUserName" name="id" type="text" aria-describedby="emailHelp"  pattern="[0-9]+" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Nombre Producto</label>
                                                <input class="form-control py-4" id="inputEmailAddress" name="nombre" type="correo" aria-describedby="emailHelp"  required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Nombre Científico</label>
                                                <input class="form-control py-4" id="inputEmailAddress" name="nombrec" type="text" aria-describedby="emailHelp"  required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Tiempo de cultivo</label>
                                                <input class="form-control py-4" id="inputEmailAddress" name="tiempo" type="text" aria-describedby="emailHelp"  required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputAddress">Descripción del producto</label>
                                                <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
	                                            <label class="small mb-1" for="inputAddress">Tipo (Especie)</label><br>
							                    <select class="form-control" name="codigot" aria-label="Default select example">
							                    <?php foreach ($listaT as $tipo) {?>
							                        <option value="<?php echo $tipo->getId() ?>"><?php echo $tipo->getNombre() ?></option>
							                    <?php }?> 
							                    </select>
						                	</div>
						                	<div class="form-group">
						                		<label class="small mb-1" for="inputAddress">Provincia</label><br>
							                    <select class="form-control" name="codigop" aria-label="Default select example">
							                    <?php foreach ($listaP as $provincia) {?>
							                        <option value="<?php echo $provincia->getId() ?>"><?php echo $provincia->getNombre() ?></option>
							                    <?php }?> 
							                    </select>
						                	</div>
                                            <input type='hidden' name='insertar' value='insertar'>
                                            <div class="form-group mt-4 mb-0">
                                                <input type="submit"  class="btn btn-primary btn-block" value="Guardar">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="productos.php">Volver</a></div>
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