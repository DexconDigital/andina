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
    <link rel="stylesheet" href="css/btn_active.css">
    <!-- carrousel -->
    <link rel="stylesheet" href="css/carousel.tamanos.css">
    <link rel="stylesheet" href="css/carousel.inmuebles.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
</head>

<body id="color_fondo">
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
            <img src="images/banner_detalle_inmueble.jpg" alt="">
        </div>
    </section>

    <!-- primer div precio ... -->
    <section class="propiedades mt-4 pt-0">
        <div class="container tamaño_cont p-0">

            <div class="col-md-11 col-lg-12 col-10 d-flex p-0 ">
                <!-- div izquierdo -->
                <div class="col-6  p-0">
                    <div class="row">
                        <div class="">
                            <h2 class="mb-3 pl-3 font-weight-bold mt-2 titulo_importante position-relative">Apartamento en Arriendo</h2>
                        </div>
                        <div class="codigo1 mt-4">
                            <span class="label-wrap">
                                <span class="label-status label-status-7 label label-default">Código: 10</span>
                            </span>
                        </div>
                    </div>
                    <p class="codigo"> <i class="fas fa-map-marker-alt icon"></i> Ubicación</p>
                </div>
                <!-- div derecho -->
                <div class="col-6  text-right p-0">
                    <div class="col-12 text-right pr- d-flex flex-row-reverse bd-highlight">
                        <div class="row">
                            <div class="mr-4 mt-4">
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
                            <div class="btn-2">
                                <a href="" style="font-size: 13px;"><span>Imprimir Ficha</span></a>
                            </div>
                        </div>

                    </div>
                    <div>
                        <h2 class="font-weight-bold">$ 1.000.000</h2>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- div de asesor -->
    <section class="pt-0">
        <div class="container tamaño_cont p-0">
            <div class="col-md-11 col-lg-12 col-10 d-flex p-0">
                <div class="col-8 ">
                    <!-- main slider carousel items -->
                    <section class="mt-3" id="slide-detalle">
                        <?php
                        if (isset($r['fotos'])) {
                            for ($i = 0; $i < count($r['fotos']); $i++) {
                                echo '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                            }
                        } else {
                            echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                        }
                        ?>
                    </section>
                    <section class="vertical-center-4 slider" id="miniaturas">
                        <?php
                        if (isset($r['fotos'])) {
                            for ($i = 0; $i < count($r['fotos']); $i++) {
                                echo '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                            }
                        } else {
                            echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                        }
                        ?>
                    </section>
                </div>
                <div class="col-4  asesor_cont_mayor mt-3">
                    <div class=" p-3 color_int_asesor">
                        <div class="col-12  d-flex justify-content-center">
                            <div class="col-8 mb-3">
                                <img src="images/no_image.png" class="tamaño_img_asesor" alt="">
                            </div>
                        </div>
                        <div class="col-12  ml-0">
                            <ul class="datos_asesor">
                                <li class="mb-2"> <i class="fas fa-user mr-2 icono_Asesor"></i> Nombre de Asesor</li>
                                <li class="mb-2"> <a class="accion_asesor" href=""><i class="fas fa-mobile-alt mr-2 icono_Asesor "></i> Teléfono de Asesor</a></li>
                                <li class="mb-2"> <a class="accion_asesor" href=""><i class="fas fa-envelope mr-2 icono_Asesor"></i> Correo electrónico del Asesor</a></li>
                            </ul>
                        </div>
                        <div class="col-12 ">
                            <div class="col-xl-12 col-md-12 col-12 mb-3 p-0">
                                <input type="text" class="form-control p-4" id="" placeholder="Nombre y Apellido" required>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12 mb-3 p-0">
                                <input type="email" class="form-control p-4" id="" placeholder="Correo electrónico" required>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12 mb-3 p-0">
                                <input type="number" class="form-control p-4" id="" placeholder="Teléfono ó Celular" required>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12 mb-3 p-0">
                                <textarea cols="15" rows="5" name="message" class="textarea form-control tamaño_tex_area rounded-0" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mb-4">
                                    <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" required>
                                    <label class="custom-control-label" for="defaultContactFormCopy">Confimo que he leído, entendido y acepto la<a class="politica" href="Politica_de_datos.pdf" download="Politica de tratamiento de infromación.pdf"> política de tratamiento de datos personales.</a></label>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12 mb-3 p-0">
                                <button type="button" class="btn btn_Asesor col-12">Enviar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- propiedades similares y tabs -->
    <section id="cont_tab">
        <div class="container tamaño_cont p-0">
            <div class="col-md-11 col-lg-12 col-10 d-flex p-0">
                <div class="col-8  p-0 tab_conte">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link primer_texto active font-weight-bold " id="home-tab" data-toggle="tab" href="#descrip" role="tab" aria-controls="home" aria-selected="true">Descripción</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link primer_texto font-weight-bold " id="profile-tab" data-toggle="tab" href="#inter" role="tab" aria-controls="profile" aria-selected="false">Características Internas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link primer_texto font-weight-bold " id="contact-tab" data-toggle="tab" href="#exter" role="tab" aria-controls="contact" aria-selected="false">Caracteristicas Externas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link primer_texto font-weight-bold " id="contact-tab" data-toggle="tab" href="#alre" role="tab" aria-controls="contact" aria-selected="false">Caracteristicas Alrededores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link primer_texto font-weight-bold " id="contact-tab" data-toggle="tab" href="#video" role="tab" aria-controls="contact" aria-selected="false">Video</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- Descripcion -->
                        <div class="tab-pane fade show active" id="descrip" role="tabpanel" aria-labelledby="home-tab">
                            <h5 class="font-weight-bold ">Titulo</h5>
                            <hr>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur laboriosam tempora iusto, pariatur ratione dolor, ipsum possimus amet, expedita provident architecto fuga corrupti aliquam totam! Rerum alias repudiandae enim. Culpa!
                        </div>
                        <!-- caracteristicas internas -->
                        <div class="tab-pane fade" id="inter" role="tabpanel" aria-labelledby="profile-tab">
                            <h5 class="font-weight-bold ">Titulo</h5>
                            <hr>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut ipsam aut temporibus ullam. Ea maxime, nisi doloremque quo reiciendis voluptates est dolor, accusantium, laudantium consequuntur ipsa inventore dolores! Deleniti, dicta!
                        </div>
                        <!-- caracteristicas esternas -->
                        <div class="tab-pane fade" id="exter" role="tabpanel" aria-labelledby="contact-tab">
                            <h5 class="font-weight-bold ">Titulo</h5>
                            <hr>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error minus, eum repudiandae quas accusamus placeat soluta iste praesentium consequuntur tenetur? Veniam numquam qui quisquam tenetur, veritatis atque nisi impedit quos!
                        </div>
                        <!-- caracteristicas alrededores-->
                        <div class="tab-pane fade" id="alre" role="tabpanel" aria-labelledby="profile-tab">
                            <h5 class="font-weight-bold ">Titulo</h5>
                            <hr>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut ipsam aut temporibus ullam. Ea maxime, nisi doloremque quo reiciendis voluptates est dolor, accusantium, laudantium consequuntur ipsa inventore dolores! Deleniti, dicta!
                        </div>
                        <!-- Video -->
                        <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="contact-tab">
                            <h5 class="font-weight-bold ">Titulo</h5>
                            <hr>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error minus, eum repudiandae quas accusamus placeat soluta iste praesentium consequuntur tenetur? Veniam numquam qui quisquam tenetur, veritatis atque nisi impedit quos!
                        </div>
                    </div>
                    <div class="col-12 p-0 mt-4 w-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2105030424595!2d-75.60809988573422!3d6.235960628170441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429910606c449%3A0x932e81063fabe8b5!2sCra.%2083%20%2332b21%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1582291922558!5m2!1ses-419!2sco" height="300" frameborder="0" width="100%" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-4 asesor_cont_mayor mt-3">
                    <div class=" p-3 color_int_asesor">
                        <div class="col-12  d-flex justify-content-center">
                            <div class="col-12 text-center">
                                <h4 class="font-weight-bold ">Popiedades simialres</h4>
                            </div>
                        </div>
                        <div class="col-12 d-flex  mt-3">
                            <div class="alto_img_similares col-6 p-0 position-relative">
                                <img class="position-absolute w-100 h-100" src="images/no_image.png" alt="">
                                <div class="position-absolute w-100 h-100 caja_negra"></div>
                            </div>
                            <div class="col-6 pr-0">
                                <div class="col-12 pr-0 mt-3">
                                    <h6 class="font-weight-bold">Apartamento en venta</h6>
                                </div>
                                <div class="col-12 pr-0 mt-2">
                                    <h6 class="font-weight-bold"> <i class="fa fa-map-marker-alt"></i> Barrio y Ciudad</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex  mt-3">
                            <div class="alto_img_similares col-6 p-0 position-relative">
                                <img class="position-absolute w-100 h-100" src="images/no_image.png" alt="">
                                <div class="position-absolute w-100 h-100 caja_negra"></div>
                            </div>
                            <div class="col-6 pr-0">
                                <div class="col-12 pr-0 mt-3">
                                    <h6 class="font-weight-bold">Apartamento en venta</h6>
                                </div>
                                <div class="col-12 pr-0 mt-2">
                                    <h6 class="font-weight-bold"> <i class="fa fa-map-marker-alt"></i> Barrio y Ciudad</h6>
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
<!-- slider -->
<script src="js/slick.min.js"></script>
<script>
    $('#slide-detalle').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '#miniaturas'
    });
    $('#miniaturas').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '#slide-detalle',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        variableWidth: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });
</script>

</html>