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
           <div class="row degr">
              <br><br><br>
               <h1>Gestión de productos agrícolas</h1><br><br><br>
                <h2>Ingresar un nuevo producto</h2>
                <br><br><br>
                <form action='../bd/producto/administrar_producto.php' method='post'>
                   Código: <br>
                    <input type='text' name='id' ><br>
                        Nombre producto: <br>
                    <input type='text' name='nombre'><br>
                       Nombre científico: <br>
                    <input type='text' name='nombrec'><br>
                        Descripcion producto: <br>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" ></textarea><br>
                        Tipo (Especie): <br>
                    <select class="form-select" name="codigot" aria-label="Default select example">
                    <?php foreach ($listaT as $tipo) {?>
                        <option value="<?php echo $tipo->getId() ?>"><?php echo $tipo->getNombre() ?></option>
                    <?php }?> 
                    </select><br>
                        Provincia: <br>
                    <select class="form-select" name="codigop" aria-label="Default select example">
                    <?php foreach ($listaP as $provincia) {?>
                        <option value="<?php echo $provincia->getId() ?>"><?php echo $provincia->getNombre() ?></option>
                    <?php }?> 
                    </select>
                    
                    <input type='hidden' name='insertar' value='insertar'><br>
                    
                    <input type='submit' class="btn btn-primary" value='Guardar'><br><br>
                    <a class="btn btn-secondary" href="productos.php">Volver</a><br><br>
                    
                </form>
                <br><br><br>
           </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
    </html>
<?php }
?>