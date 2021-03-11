<?php
session_start();

//incluye la clase Tipo y CrudTipo
require_once('../bd/tipo/crud_tipo.php');
require_once('../bd/tipo/tipo.php');
$crud=new CrudTipo();
$tipo= new Tipo();
//obtiene todos los libros con el método mostrar de la clase crud
$tipo=$crud->obtenerTipo($_GET['id']);

 
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
               <h1>Gestión de tipos de productos agrícolas</h1><br><br><br>
                <h2>Actualizar datos del tipo de producto</h2>
                <br><br><br>
                <form action='../bd/tipo/administrar_tipo.php' method='post'>
                    
                        <input type='hidden' name='id' value='<?php echo $tipo->getId()?>'>
                            Nombre tipo: <br>
                        <input type='text' name='nombre' value='<?php echo $tipo->getNombre()?>'><br><br>
                            Descripcion tipo: <br>
                                
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" ><?php echo $tipo->getDescripcion()?></textarea>
                        <input type='hidden' name='actualizar' value='actualizar'><br>
                    
                    <input type='submit' class="btn btn-primary" value='Guardar'><br><br>
                    <a class="btn btn-secondary" href="tipos.php">Volver</a><br><br>
                    
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