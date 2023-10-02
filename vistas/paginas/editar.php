<?php

if (isset($_GET["id"])) {
    $item = "id";
    $valor = $_GET["id"];

    $usuario = ControladorFromularios::ctrSeleccionarRegistros($item, $valor);
    //echo '<pre>'; print_r($usuario); echo '</pre>';   
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NextGenerationDev">
    <title>Wedding, Wedding Planer & Event HTML Template</title>
    <!--Favicon img-->
    <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
    <!--Bootstarp min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Bootstarp map css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <!--Owl Carousel css-->
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <!--Owl Carousel Theme css-->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!--All min css-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--Swiper min css-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--main css-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<!--==== Header Section Here ======= -->

<header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-menu">
                    <a href="index.php?wedding=home" class="logo">
                        <img src="assets/img/logo/logo1.png" alt="img">
                    </a>
                </div>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">
                <li>
                        <a href="#0">Login <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="index.php?wedding=login">
                                    <span>Login</span>
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="index.php?wedding=register">
                                    <span>Register</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?wedding=users">Users</a>
                    </li>
                    <li class="active">
                        <a href="index.php?wedding=home">Home</a>
                    </li>
                    <li>
                        <a href="index.php?wedding=about">About</a>
                    </li>
                    <li>
                        <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="index.php?wedding=service">
                                    <span>Service</span>
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="index.php?wedding=service-single">
                                    <span>Service Single</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?wedding=story">Our story</a>
                    </li>
                    <li>
                        <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="index.php?wedding=event">
                                    <span>Our event</span>
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="index.php?wedding=gallery">
                                    <span>Gallery</span>
                                </a>
                            </li>
                            <!--<li class="subtwohober">
                     <a href="error.html">
                        <span>Error 404</span>
                     </a>
                  </li>-->
                        </ul>
                    </li>
                    <li>
                        <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="index.php?wedding=blog">
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="index.php?wedding=blog-single">
                                    <span>Blog Single</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?wedding=contact">Contact</a>
                    </li>
                    <li>
                        <a href="index.php?wedding=login">Go out</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!--==== Header Section End ======= -->

<section class="breadcumd__banner">
    <div class="container">
        <form class="p-5 #FFDAB9" method="post">
            <div class="breadcumd__wrapper center">
                <h1 class="left__content">
                    Update
                </h1>
                <ul class="right__content">
                    <i></i>
                    </li>
                    <li>
                        <a href="index.php?wedding=users">
                            Users
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        Update
                    </li>


                </ul>
            </div>
            <br>
            <div class="form-group">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
                </div>
            </div>
            <br>
            <div class="form-group">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" value="<?php echo $usuario["email"]; ?>" placeholder="Escriba su email" id="email" name="actualizarEmail">
                </div>
            </div>

            <br>

            <div class="form-group">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Escriba su password" id="pwd" name="actualizarPassword">

                    <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">

                    <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">
                </div>
            </div>

            <?php
            $actualizar = ControladorFromularios::ctrActualizarRegistro();
            if ($actualizar == "ok") {
                echo '<script>
                if (window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                echo '<div class="alert alert-success">El usuario ha sido actualizado</div>
                <script>
                    setTimeout(function(){
                        window.location = "index.php?wedding=users";
                    }, 1600);
                </script>
                ';
            }
            ?>

            <br>
            <br>
            <div class="footer__logo center"">
                <button type=" submit" class="cmn--btn">
                Actualizar
                </button>
            </div>

    </div>
    </form>
    <br>
    <br>

    </form>
    </div>
</section>

<!--Jquery 3 6 0 Min Js-->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<!--Bootstrap bundle Js-->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--Viewport Jquery Js-->
<script src="assets/js/viewport.jquery.js"></script>
<!--Wow min Js-->
<script src="assets/js/wow.min.js"></script>
<!--Owl Carousel min Js-->
<script src="assets/js/owl.min.js"></script>
<!--Swiper min Js-->
<script src="assets/js/swiper-bundle.min.js"></script>
<!--Magnific popup min Js-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--main Js-->
<script src="assets/js/main.js"></script>
</body>

</html>