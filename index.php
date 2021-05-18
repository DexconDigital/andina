<?php
require 'variables/variables.php';
$pagina = 'Inicio';
$inmobiliaria = 'Andina Inmobiliaria';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagina . ' | ' . $inmobiliaria; ?></title>
    <?php include 'layout/archivosheader.php'; ?>
    <?php require 'controllers/indexController.php'; ?>
    <script>
        var pagina = 'inicio';
    </script>
    <link rel="stylesheet" href="css/rangos.css">

</head>

<body>
    <!-- menu -->
    <section>
        <?php include 'layout/menu.php' ?>
    </section>

    <!-- slider -->
    <section>
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="images/slide_1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="images/slide_2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide_3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- buscador -->
    <section class="mb-5" id="buscador">
        <?php include 'layout/buscador.php' ?>
    </section>


    <!-- propiedades destacadas -->
    <section class="propiedades mt-4 mb-5 pt-0" id="destacadas">
        <div class="container tamaño_cont">
            <div class="justify-content-center">
                <div class="col-md-12 col-lg-12 col-12">
                    <h2 class="ml-0 font-weight-bold titulo_importante espacio_responsive">Propiedades Destacadas</h2>
                    <div style="position:relative;">
                        <div class="owl-carousel owl-theme wow fadeInUp" data-wow-Duration="20s" id="owl-propiedades">
                            <?php if (is_array($api)) {
                                inmuebles_destacados($api);
                            } else {
                                echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="col-12">
            <div class="row align-items-center justify-content-center">

                <div class="mb-5 col-12 col-lg-4 col-xl-4">
                    <div class="position-relative card" style="width: 22rem;">
                        <div class="contenedor_imagen position-relative">
                            <img src="images/no_image.png" class="position-absolute w-100 h-100 card-img-top" alt="...">
                            <div class="position-absolute w-100 h-100 caja_negra"></div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-baseline">
                                <i class="mr-1 fas fa-map-marker-alt"></i>
                                <h5> Barrio - Ciudad</h5>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <label> Código: 1234</label>
                            </div>
                            <div class="">
                                <ul class=" list_iconos_cards d-flex p-0 justify-content-around">
                                    <li> <i class="fas fa-chart-area mr-2"></i>5m<sup>2</sup></li>
                                    <li> <i class=" fas fa-bath mr-2"></i>3</li>
                                    <li> <i class="fas fa-bed mr-2"></i>5</li>
                                    <li> <i class="fas fa-warehouse mr-2"></i>2</li>
                                </ul>
                            </div>
                            <div class="col-12 text-center">
                                <a href="#" class="btn btnn_detalle col-6">Detalle <i class="icon_detalle fas fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="tipo_inmueble">
                            <p class="ml-2">Apartamento</p>
                        </div>
                        <div class="tipo_gestion">
                            <p class="mr-2">En Arriendo</p>
                        </div>
                        <div class="precio">
                            <span class="ml-2">$ 1.000.000</span>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-12 col-lg-4 col-xl-4">
                    <div class="position-relative card" style="width: 22rem;">
                        <div class="contenedor_imagen position-relative">
                            <img src="images/no_image.png" class="position-absolute w-100 h-100 card-img-top" alt="...">
                            <div class="position-absolute w-100 h-100 caja_negra"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="tipo_inmueble">
                            <p class="ml-2">Apartamento</p>
                        </div>
                        <div class="tipo_gestion">
                            <p class="mr-2">En Arriendo</p>
                        </div>
                        <div class="precio">
                            <p class="mr-2">$ 1.000.000</p>
                        </div>
                    </div>
                </div>

            </div>




    </section> -->


    <!-- aliados -->
    <section class="propiedades mt-4 pt-0" id="aliados">
        <div class="container tamaño_cont">
            <div class="justify-content-center" id="contenedor_aliados">
                <div class="col-md-11 col-lg-12 col-12  ">
                    <h2 class="mb-3 ml-0 font-weight-bold titulo_importante">Nuestros Aliados</h2>
                    <div style="position:relative;">
                        <div class="col-12 mt-5 cont_img">
                            <div class="owl-carousel owl-theme" id="aliados_slide">
                                <div class="item animacion_logo" style="height: 180px;">
                                    <a href=" " target="_blank"><img style="height: 40%; object-fit: contain;" src="images/ccm.png" alt=""></a>
                                </div>
                                <div class="item animacion_logo" style="height: 180px;">
                                    <a href="" target="_blank"><img class="tamano_libertador" style="object-fit: contain;" src="images/libertador.png" alt=""></a>
                                </div>
                                <div class="item animacion_logo" style="height: 180px;">
                                    <a href="" target="_blank"><img style="height: 40%; object-fit: contain;" src="images/simi.png" alt=""></a>
                                </div>
                                <div class="item animacion_logo" style="height: 180px;">
                                    <a href="" target="_blank"><img style="height: 55%; object-fit: contain;" src="images/fenalco.png" alt=""></a>
                                </div>
								<div class="item animacion_logo" style="height: 180px;">
                                    <a href="" target="_blank"><img style="height: 55%; object-fit: contain;" src="images/sura.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section class="propiedades mt-4 pt-0" id="footer">
        <?php include 'layout/footer.php'; ?>
    </section>
</body>
<?php include 'layout/archivosfooter.php'; ?>
<!-- barra de rangos -->
<script src="js/rangos.js"></script>
<script src="conexion_api/token_api.js"></script>
<script src="conexion_api/validadores.js"></script>
<script src="conexion_api/buscador.js"></script>


</html>