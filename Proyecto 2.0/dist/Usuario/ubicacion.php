<?php
session_start();
 
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
                            <li class="breadcrumb-item active">Búsqueda</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body" style="text-align: center;">
                                <script>
                                    var Http = new XMLHttpRequest();
                                    var latitud = 19.4978;
                                    var logitud = -99.1269;
                                    var url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + latitud + ',' + logitud
                                        + '&key=AIzaSyA3jwGLDgrGrhuC0YNPQvpijWHSCcpYSr8';
                                    Http.open('POST', url);
                                    Http.send();
                                    Http.onreadystatechange = (e) => {
                                        console.log(Http.responseText);
                                    }
                                </script>
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
                                <br>
                                <h2>Nueva Búsqueda</h2>
                                <button class="btn btn-primary" onclick="getLocation()">Nueva búsqueda</button>
                                <br><br>
                                <h4>Latitud: </h4>
                                <div id="latitude">
                                </div>
                                <br>
                                <h4>Longitud: </h4>
                                <div id="longitude">
                                </div><br>

                                <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=Ecuador+(Prueba)&amp;t=&amp;z=7&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm">Journey Planner</a></div>
                                
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