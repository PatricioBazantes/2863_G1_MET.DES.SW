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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel=StyleSheet href="../css/estilos.css" TYPE="text/css" />
        <title>Proyecto - G1</title>
    </head>
    <body>
        <?php require_once('menu.php'); ?>
        <br><br><br><br>
        <div class="container">
           <div class="row degr justify-content-center">
              <br><br><br>
               <h1>Gestión de Cuentas de Usuario</h1><br><br><br>
                <h2>Ingresar un nuevo usuario</h2>
                <br><br><br>
                <div class="col-6 text-center">
                <form action='../bd/recomendaciones/administrar_recom.php' method='post'>
                    <input type='hidden' name='id' value="<?php echo $codigo ?>">
                    Producto: <br>
                    <select class="form-select" name="idprod" aria-label="Default select example">
                    <?php foreach ($listaP as $prod) {?>
                        <option value="<?php echo $prod->getId() ?>"><?php echo $prod->getNombre() ?></option>
                    <?php }?>
                    </select><br>
                    Nombre: <br>
                    <input class="form-control" type='text' name='nombre'><br>
                    Descripción: <br>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" ></textarea><br>
                    Tipo: <br>
                    <input class="form-control" type='text' name='tipo'><br>
                    <input type='hidden' name='insertar' value='insertar'>
                    
                    <input type='submit' class="btn btn-primary" value='Guardar'>&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="usuarios.php">Volver</a>
                    
                </form>
                <br><br>
               </div>
           </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
    </html>
<?php }
?>