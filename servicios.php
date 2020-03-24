<?php
require 'variables/variables.php';
$pagina = 'Servicios';
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
                <h1 class="font-weight-bold rutas txt_principal"> SERVICIOS </h1>
                <h5 class="justify-content-center row rutas"> Inicio / servicios </h5>
            </div>
            <div class="h-100">
                <img class="h-100" src="images/banner_servicios.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="acordion">
        <div class="col-12 mt-4 p-0">
            <div class="container">
                <!-- arrendamientos -->
                <div class="col-12 justify-content-center">
                    <h2 class="mb-3 ml-0 titulo_principal font-weight-bold titulo_importante">Arrendamientos</h2>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6  d-flex mb-4">
                            <div class="col-12">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <h5 class="font-weight-bold">Propietario</h5>
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul class="lista">
                                                    <li>Promocionamos de manera ágil y efectiva su inmueble en diferentes portales inmobiliarios.</li>
                                                    <li>Estudio y análisis de los arrendatarios por medio de la aseguradora.</li>
                                                    <li>Garantía en el pago del canon de arrendamiento, así el arrendatario no cumpla con este.</li>
                                                    <li>Realización de un inventario escrito y fotográfico del inmueble, acompañado de un acta de entrega.</li>
                                                    <li>Apoyo con el pago de administración y servicios públicos, previa autorización del propietario.</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <h5 class="font-weight-bold">Arrendatario</h5>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul class="lista">
                                                    <li>Acompañamiento en la búsqueda de su propiedad ideal.</li>
                                                    <li>Agilidad en la entrega de su propiedad.</li>
                                                    <li>Realización de un inventario escrito y fotográfico del inmueble, acompañado de un acta de entrega.</li>
                                                    <li>Contamos con asesores calificados y con toda la disposición de conocerlos y escuchar la necesidad de encontrar un hogar ideal.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 justify-content-center">
                            <div class="col-12">
                                <img id="img_arrendamiento" style="object-fit: contain;" src="images/arriendo.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- ventas -->

                <div class="col-12 text-center mt-5">
                    <h2 class="mb-3 ml-0 titulo_principal font-weight-bold titulo_importante"> Ventas</h2>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6 d-flex mt-3 mb-4">
                            <div class="col-12">
                                <img id="img_arrendamiento" src="images/venta.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <h5 class="mt-3 font-weight-bold pl-3 pr-3">Nuestro equipo de trabajo le brindara el acompañamiento y la asesoría necesaria para la venta de su propiedad.</h5>
                            <ul class="lista">
                                <li>Promocionamos su inmueble en los diferentes portales inmobiliarios.</li>
                                <li>Acompañamos y asesoramos las partes durante el proceso de negociación.</li>
                                <li>Revisamos y analizamos los certificados de libertad, escrituras y demás documentos que sean necesarios al inicio del proceso de venta.</li>
                                <li>Realizamos el documento Promesa de Compraventa.</li>
                                <li>Hacemos seguimiento y gestión a los documentos necesarios para la firma de la escritura pública de compraventa.</li>
                                <li>Realizamos la gestión de los paz y salvos de impuesto predial, valorización y administración.</li>
                                <li>Finalizamos nuestra gestión con el seguimiento y entrega de escrituras, finalizando así el proceso de venta.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <!-- avaluos -->
        <div class="col-12 text-center mt-4 div_avaluos">
            <h2 class="mb-3 ml-0 titulo_principal font-weight-bold"> Avalúos</h2>
            <div class="text-center">
                <p>Ofrecemos a nuestros clientes el servicio de avalúos para todo tipo de propiedades, con el fin de determinar el valor correcto y real del mismo.</p>
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