<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
<div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30"
                    class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav list-inline mt-2 mr-3 mt-lg-0">
                    <li class="list-inline-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="nav-link" href="#">Quienes somos</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="list-inline-item ">
                        <a class="nav-link active" href="#">Registro</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="nav-link" href="login.php">Ingreso</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->


        <div class="row">
            <div class="col-12">
                <div class="jumbotron"><h1 class="text-center">Formulario de registro</h1></div>
            </div>
        </div>

        <form class="col-8 offset-lg-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Apellido</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Email</label>
                    <input type="email" class="form-control" id="inputAddress">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="inputAddress">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Género</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Femenino</option>
                        <option>Masculino</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Acepto términos y condiciones.
                </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrarme</button>
        </form>

    </div>
    <!-- Footer -->
    <footer class="page-footer font-small bg-dark mt-3">
        <div style="background-color: #6351ce;">
            <div class="container">
                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center text-white">
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Siguenos en nustras redes sociales!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!-- Facebook -->
                        <a href="" class="fb-ic">
                            <i class="fab fa-facebook-f text-white mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a href="" class="tw-ic">
                            <i class="fab fa-twitter text-white mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a href="" class="gplus-ic">
                            <i class="fab fa-google-plus-g text-white mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a href="" class="li-ic">
                            <i class="fab fa-linkedin-in text-white mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a href="" class="ins-ic">
                            <i class="fab fa-instagram text-white"> </i>
                        </a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5 text-white">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Cell Shop</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit
                        amet,
                        consectetur
                        adipisicing elit.</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="form_battery.php">Baterias</a>
                    </p>
                    <p>
                        <a href="#!">Celulares</a>
                    </p>
                    <p>
                        <a href="#!">Servicio Remoto</a>
                    </p>
                    <p>
                        <a href="#!">Soporte técnico</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Enlaces útiles</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Mi cuenta</a>
                    </p>
                    <p>
                        <a href="#!">Registrarme</a>
                    </p>
                    <p>
                        <a href="#!">Tarifas de envío</a>
                    </p>
                    <p>
                        <a href="#!">Ayuda</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> Bogotá, Calle 123&nbsp;#&nbsp;45-123 CO
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> celphone@example.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88
                    </p>
                    <p>
                        <i class="fas fa-mobile mr-3"></i> + 57 313 365 3643
                    </p>

                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center text-white py-3">© 2020 Copyright
            <a href="https://mdbootstrap.com/"> Grupo 3</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- End Footer -->
</body>
</html>