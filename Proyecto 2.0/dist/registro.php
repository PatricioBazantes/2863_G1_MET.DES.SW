<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Proyecto G1</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear Cuenta</h3></div>
                                    <div class="card-body">
                                        <form action="bd/registro.php" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Nombre de Usuario</label>
                                                <input class="form-control py-4" id="inputUserName" name="user" type="text" aria-describedby="emailHelp"  pattern="[A-Za-z0-9]+" required />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Nombres</label>
                                                        <input class="form-control py-4" id="inputFirstName" name="fname" type="text"  required pattern="[A-Za-z]+" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Apellidos</label>
                                                        <input class="form-control py-4" id="inputLastName" name="lname" type="text"  required pattern="[A-Za-z]+" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Correo</label>
                                                <input class="form-control py-4" id="inputEmailAddress" name="mail" type="email" aria-describedby="emailHelp"  required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputAddress">Contraseña</label>
                                                <input class="form-control py-4" id="inputAddress" name="pass" type="password" aria-describedby="emailHelp" required minlength="3" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputAddress">Dirección</label>
                                                <input class="form-control py-4" id="inputAddress" name="address" type="text" aria-describedby="emailHelp"  pattern="[A-Za-z0-9]+" required />
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <input type="submit"  class="btn btn-primary btn-block" value="Registrarse">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Iniciar sesión</a></div>
                                    </div>
                                </div><br>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Proyecto-G1 2021</div>
                            <div>
                                <a href="#">Todos los derechos reservados</a>
                                &middot;
                                <a href="#">Sangolquí, 2021</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>