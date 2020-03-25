<?php
require 'variables/variables.php';
$pagina = 'Nosotros';
$inmobiliaria = 'Andina Inmobiliaria';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagina . ' | ' . $inmobiliaria; ?></title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- menu -->
    <section>
        <?php include 'layout/menu.php'; ?>
    </section>

    <!-- banner de entrada -->
    <section id="banner">
        <div class="h-100 col-12 p-0">
            <div class="h-100 col-12 d-flex flex-column align-items-center justify-content-center cont_texto_banner text-center position-absolute">
                <h1 class="font-weight-bold rutas txt_principal"> NOSOTROS </h1>
                <h5 class="justify-content-center row rutas"> Inicio / Nosotros </h5>
            </div>
            <div class="h-100">
                <img class="h-100" src="images/banner_quienes_somos.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- texto quienes somos -->
    <section class="propiedades mt-4 pt-0" id="aliados">
        <div class="container tamaño_cont">
            <div class="justify-content-center">
                <div class="col-md-12 col-lg-12 col-12">
                    <h2 class="mb-3  titulo_principal font-weight-bold titulo_importante_quienes">Quiénes Somos</h2>
                    <div style="position:relative;">
                        <div class="col-12 text-justify">
                            <div class="row">
                                <div class="col-12  mb-3">
                                    <div>
                                        <p><?php echo $texto_quienes_somos['quienes_somos']['parrafo'] ?></p>
                                    </div>
                                </div>
                                <div class="col-12  d-flex flex-wrap p-0 mt-3">
                                    <div class="col-12 col-md-12 col-lg-6 mb-5">
                                        <img src="images/mision_vision.jpg" width="100%" alt="">
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6 d-flex flex-wrap align-items-center">
                                        <div class="col-12">
                                            <h5 class="ml-0 titulo_principal font-weight-bold titulo_importante_quienes">Misión</h5>
                                            <p><?php echo $texto_quienes_somos['mision']['parrafo'] ?></p>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="ml-0 titulo_principal font-weight-bold titulo_importante_quienes">Visión</h5>
                                            <p><?php echo $texto_quienes_somos['vision']['parrafo'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 p-0 mt-5">
                                    <h5 class="text-center titulo_principal font-weight-bold titulo_importante_quienes">Valores Corporativos</h5>

                                    <div class="col-12 d-flex justify-content-center p-0">
                                        <div class="col-4 col-md-2 col-lg-2 text-center mt-2 color_fondo">
                                            <p class="font-weight-bold espacio_int_valores"> Ética</p>
                                        </div>
                                        <div class="col-4 col-md-2 col-lg-2 text-center mt-2 color_fondo">
                                            <p class="font-weight-bold espacio_int_valores">Respeto</p>
                                        </div>
                                        <div class="col-4 col-md-2 col-lg-2 text-center mt-2 color_fondo p-0">
                                            <p class="font-weight-bold espacio_int_valores">Honestidad</p>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-wrap justify-content-center p-0">
                                        <div class="col-6 col-md-3 col-lg-3 p-0 color_fondo">
                                            <div class="col-12 text-center">
                                                <p class="font-weight-bold espacio_int_valores">Compromiso</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-3 p-0 color_fondo">
                                            <div class="col-12 text-center">
                                                <p class="font-weight-bold espacio_int_valores">Comunicación</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-3 p-0 color_fondo p-0">
                                            <div class="col-12 text-center">
                                                <p class="font-weight-bold espacio_int_valores">Responsabilidad</p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-3 p-0 color_fondo">
                                            <div class="col-12 text-center p-0">
                                                <p class="font-weight-bold espacio_int_valores">Trabajo en Equipo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bannner contador -->
    <section id="estadisticas" class="mt-5">
        <div class="col-12" id="contador">
            <div class="row text-center">
                <div class="col-12 col-md-3 col-lg-3">
                    <h2 class="font-weight-bold" id="counter-propertys"></h2>
                    <p>Total Inmuebles</p>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <h2 class="font-weight-bold" id="counter-rent"></h2>
                    <p>Total Arriendo</p>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <h2 class="font-weight-bold" id="counter-sale"></h2>
                    <p>Total Venta</p>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <h2 class="font-weight-bold" id="counter-sale-rent"></h2>
                    <p class="cont_responsive">Total Arriendo/Venta</p>
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
<!--  contador -->
<script src="js/countUp.min.js"></script>
<script src="js/counter-propertys.js"></script>

</html>