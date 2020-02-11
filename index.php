<?php
require 'variables/variables.php';
$pagina = 'Inicio';
$inmobiliaria = 'Andina Inmobiliaria';
?>
<!DOCTYPE html>
<html lang="en">

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
        <!-- primer_nav -->
        <div class="fondo_buscador">
            <div class="col-12 d-flex p-0">
                <div class="col-7">
                    <a class="nav-link active contedor_logo ml-4 p-0" href="#"><img src="images/logo.png" alt=""></a>
                </div>
                <div class="col-2">

                    <ul class="lista_redes justify-content-center p-0 espacio_top">
                        <li class="mr-4 estilo_icono_foot">
                            <a href="<?php echo $redes_sociales['facebook']['link'] ?>" target="_blank" class="color_iconos color_facebook"> <i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="mr-4 estilo_icono_foot">
                            <a href="<?php echo $redes_sociales['instagram']['link'] ?>" target="_blank" class="color_iconos color_insta"><i class=" fab fa-instagram"></i></a>
                        </li>
                        <li class="estilo_icono_foot">
                            <a href="<?php echo $datos_contacto['whatsapp']['link'] ?>" target="_blank" class="color_iconos color_wapp"> <i class="color_wapp fab fa-whatsapp"></i></a>
                        </li>
                    </ul>

                </div>
                <div class="col-3 fondo_div d-flex align-items-center">
                    <div class="align-items-center  col-12 text-center">
                        <h5 class="color_llamanos">Llámanos: <a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a></h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- segundo nav -->
        <div class="fondo_buscador1">
            <nav class="navbar navbar-expand-lg ml-4">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active linea mr-2">
                            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item linea mr-2">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item linea mr-2">
                            <a class="nav-link" href="#">Clientes</a>
                        </li>
                        <li class="nav-item linea mr-2">
                            <a class="nav-link" href="#">Consignar Inmueble</a>
                        </li>
                        <li class="nav-item linea mr-2">
                            <a class="nav-link" href="#">Contáctenos</a>
                        </li>
                        <li class="nav-item mr-2">
                            <a class="nav-link pb-0" href="#"><img class="logo_pse" src="images/pse_blanco.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
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
    <section id="buscador">
        <div class="col-12  container div_buscador">
            <div class="row">
                <div class="col-2 p-1">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected="" value="0">Tipo de Inmueble</option>
                        </select>
                    </div>
                </div>
                <div class="col-2 p-1">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected="" value="0">Tipo de Gestión</option>
                        </select>
                    </div>
                </div>
                <div class="col-2 p-1">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected="" value="0">Ciudad</option>
                        </select>
                    </div>
                </div>
                <div class="col-2 p-1">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected default> Barrio </option>
                        </select>
                    </div>
                </div>
                <div class="col-1.5 p-1 text-center">
                    <button class="advance-btn blue btn active btn_avanzado" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search mr-2"></i>Avanzado</button>
                </div>
                <div class="col p-1">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-3 btn_buscar">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- segundo div -->
        <div class="col-12 segund_div_buscador collapse " id="collapseExample">
            <div class="row">
                <div class="col-3 p-1">
                    <div class="form-group">
                        <input placeholder="Código" type="number" class="form-control f1" id="codigo_buscar" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-3 p-1">
                    <div class="form-group">
                        <input placeholder="Baños" type="number" class="form-control f1" id="banios_buscar" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-3 p-1">
                    <div class="form-group">
                        <input placeholder="Alcobas" type="number" class="form-control f1" id="alcobas_buscar" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-3 p-1">
                    <div class="form-group">
                        <input placeholder="Garajes " type="number" class="form-control f1" id="garajes_buscar" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-3 p-1">
                    <div class="form-group">
                        <input type="number" class="form-control" id="area_minima_buscar" placeholder="Área Mínima">
                    </div>
                </div>
                <div class="col-3 p-1">
                    <div class="form-group">
                        <input type="number" class="form-control" id="area_maxima_buscar" placeholder="Área Máxima">
                    </div>
                </div>
                <div class="col-6 p-1">
                    <div class="wrapper">
                        <div class="range-slider" id="areas">
                            <input type="text" class="js-range-slider" value="" />
                        </div>
                        <div class="extra-controls form-inline">
                            <div class="form-group" style="display:none;">
                                <input type="text" class="js-input-from form-control" id="area_minima_buscar" value="0" aria-describedby="emailHelp" />
                                <input type="text" class="js-input-to form-control" id="area_maxima_buscar" value="0" aria-describedby="emailHelp" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- propiedades destacadas -->
    <section class="propiedades mt-4 pt-0" id="destacadas">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-11 col-lg-11 col-10">
                    <h2 class="mb-3 ml-0">Propiedades Destacadas</h2>
                    <div style="position:relative;">
                        <div class="owl-carousel owl-theme wow fadeInUp" data-wow-Duration="2s" id="owl-propiedades">
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

</body>
<?php include 'layout/archivosfooter.php'; ?>
<!-- barra de rangos -->
<script src="js/rangos.js"></script>

</html>