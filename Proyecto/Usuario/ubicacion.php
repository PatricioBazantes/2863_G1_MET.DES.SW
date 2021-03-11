<?php
session_start();
 
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
    <nav><ul>
        <li><a href="usuario.php">Inicio</a></li>
        <li><a href="datos.php">Mi cuenta</a></li>
        <li><a href="ubicacion.php">Nueva búsqueda</a></li>
        <li><a href="#">Historial de búsquedas</a></li>
        <li><a href="../bd/salir.php">Cerrar sesión</a></li>
    </ul></nav>
        <script>
            function getLocation(){
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(success, error);
                   //alert("Tu navegador tiene acceso a GEO")
                }else{
                    alert("Tu navegador no tiene acceso a GEO :(")
                }
            }
            
            function success(geolocationPosition){
                console.log(geolocationPosition);
                let lat = geolocationPosition.coords.latitude;
                let lon = geolocationPosition.coords.longitude;
                document.getElementById("latitude").innerHTML = lat;
                document.getElementById("longitude").innerHTML = lon;
                //alert("Localización actual");
            }
            
            function error(){
                alert("Debes permitir el acceso a tu ubicación para realizar está tarea.");
            }
            
        </script>
        <br><br><br>
        <h1>Nueva Búsqueda</h1>
        <h3>Buscar recomendaciones para mi ubicación</h3>
        <button onclick="getLocation()">Nueva búsqueda</button>
        <br><br>
        <h4>Latitud: </h4>
        <div id="latitude">
            
        </div>
        <br>
        <h4>Longitud: </h4>
        <div id="longitude">
            
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
    </html>
<?php }
?>