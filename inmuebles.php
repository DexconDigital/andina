<?php
require 'variables/variables.php';
$pagina = 'Inmuebles';
$inmobiliaria = 'Andina Inmobiliaria';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagina . ' | ' . $inmobiliaria; ?></title>
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/rangos.css">
</head>

<body>
    <!-- menu -->
    <section>
        <?php include 'layout/menu.php'; ?>
    </section>

    <!-- banner de entrada -->
    <section id="banner">
        <div class="col-12 p-0">
            <div class="col-12 cont_texto_banner text-center position-absolute">
                <h1 class="font-weight-bold rutas txt_principal"> INMUEBLES </h1>
                <h5 class="justify-content-center row rutas"> Inicio / Inmuebles </h5>
            </div>
            <img src="images/banner_inmbuebles.jpg" alt="">
        </div>
    </section>

    <!-- buscador -->
    <section class="mb-5" id="buscador">
        <?php include 'layout/buscador.php'; ?>
    </section>

    <!-- cards inmuebles -->
    <section>
        <div class="col-12 container">
            <div class="d-flex justify-content-around">
                <div class="col-4 p-0">
                    <div class="position-relative card cards_inmueble" style="width: 25rem;">
                        <a href="detalle_inmueble.php">
                            <div class="contenedor_imagen position-relative">
                                <img src="images/no_image.png" class="position-absolute w-100 h-100 card-img-top" alt="...">
                                <div class="position-absolute w-100 h-100 caja_negra"></div>
                            </div>
                        </a>
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
                            <div class="text-justify">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure facilis ratione quo mollitia, deserunt sequi non, consequuntur, culpa magnam facere laborum sed suscipit distinctio molestias praesentium odit labore nobis harum?</p>
                            </div>
                            <div class="col-12 text-center">
                                <a href="detalle_inmueble.php" class="btn btnn_detalle col-6">Detalle <i class="icon_detalle fas fa-angle-right"></i></a>
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
                <div class="col-4 p-0">
                    <div class="position-relative card cards_inmueble" style="width: 25rem;">
                        <a href="detalle_inmueble.php">
                            <div class="contenedor_imagen position-relative">
                                <img src="images/no_image.png" class="position-absolute w-100 h-100 card-img-top" alt="...">
                                <div class="position-absolute w-100 h-100 caja_negra"></div>
                            </div>
                        </a>
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
                            <div class="text-justify">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure facilis ratione quo mollitia, deserunt sequi non, consequuntur, culpa magnam facere laborum sed suscipit distinctio molestias praesentium odit labore nobis harum?</p>
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
                <div class="col-4 p-0">
                    <div class="position-relative card cards_inmueble" style="width: 25rem;">
                        <a href="detalle_inmueble.php">
                            <div class="contenedor_imagen position-relative">
                                <img src="images/no_image.png" class="position-absolute w-100 h-100 card-img-top" alt="...">
                                <div class="position-absolute w-100 h-100 caja_negra"></div>
                            </div>
                        </a>
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
                            <div class="text-justify">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure facilis ratione quo mollitia, deserunt sequi non, consequuntur, culpa magnam facere laborum sed suscipit distinctio molestias praesentium odit labore nobis harum?</p>
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

</html>