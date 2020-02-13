<?php
require 'variables/variables.php';
$pagina = 'Detalle de Inmueble';
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
        <div class="col-12 p-0">
            <div class="col-12 cont_texto_banner text-center position-absolute">
                <h1 class="font-weight-bold rutas txt_principal"> Detalle de Inmueble </h1>
                <h5 class="justify-content-center row rutas"> Inicio / Inmuebles / Detalle de Inmueble </h5>
            </div>
            <img src="images/banner_servicios.jpg" alt="">
        </div>
    </section>

    <section class="propiedades mt-4 pt-0" id="aliados">
        <div class="container tamaño_cont p-0">

            <div class="col-md-11 col-lg-12 col-10 d-flex p-0 ">
                <div class="col-6 border p-0">
                    <div class="row">
                        <div class="">
                            <h2 class="mb-3 pl-3 font-weight-bold titulo_importante position-relative">Apartamento en Arriendo</h2>
                        </div>
                        <div class="codigo1">
                            <span class="label-wrap">
                                <span class="label-status label-status-7 label label-default">Código: 10</span>
                            </span>
                        </div>
                    </div>
                    <p class="codigo"> <i class="fas fa-map-marker-alt icon"></i> Ubicación</p>
                </div>

                <div class="col-6 border text-right">
                    <div class="col-12 text-right pr-0">

                        <ul class="lista_redes d-flex justify-content-end p-0">
                            <p class="mr-3 font-weight-bold">Compartir por:</p>
                            <li class="mr-3 estilo_icono_foot">
                                <a href="<?php echo $redes_sociales['facebook']['link'] ?>" target="_blank" class="color_iconos color_facebook"> <i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="mr-3 estilo_icono_foot">
                                <a href="<?php echo $redes_sociales['instagram']['link'] ?>" target="_blank" class="color_iconos color_twitter"><i class=" fab fa-twitter"></i></a>
                            </li>
                            <li class="estilo_icono_foot">
                                <a href="<?php echo $datos_contacto['whatsapp']['link'] ?>" target="_blank" class="color_iconos color_wapp"> <i class="color_wapp fab fa-whatsapp"></i></a>
                            </li>
                        </ul>

                    </div>
                    <h2 class="font-weight-bold">$ 1.000.000</h2>

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

</html>