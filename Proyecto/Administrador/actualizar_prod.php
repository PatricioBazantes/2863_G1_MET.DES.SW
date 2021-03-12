<?php
session_start();

//incluye la clase Tipo y CrudTipo
require_once('../bd/producto/crud_producto.php');
require_once('../bd/producto/producto.php');
$crud=new CrudProducto();
$producto= new Producto();
//obtiene todos los libros con el método mostrar de la clase crud
$producto=$crud->obtenerProducto($_GET['id']);

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
                <h2>Actualizar datos del producto</h2>
                <br><br><br>
                <form action='../bd/producto/administrar_producto.php' method='post'>
                    
                        <input type='hidden' name='id' value='<?php echo $producto->getId()?>'>
                            Nombre producto: <br>
                        <input type='text' name='nombre' value='<?php echo $producto->getNombre()?>'><br><br>
                           
                           Nombre científico: <br>
                        <input type='text' name='nombrec' value='<?php echo $producto->getNombrec()?>'><br><br>
                           
                            Descripcion producto: <br>
                                
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" ><?php echo $producto->getDescripcion()?></textarea>
                        <input type='hidden' name='actualizar' value='actualizar'><br>
                    
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