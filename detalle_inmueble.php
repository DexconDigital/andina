<?php
require 'variables/variables.php';
$pagina = 'Detalle de Inmueble';
require 'controllers/detalleInmuebleController.php';
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
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <!-- Datos para compartir por facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <style>
        #map {
            height: 300px;
            z-index: 20;
        }

        .leaflet-control {
            z-index: 200;
        }

        .leaflet-control {
            z-index: 20;
        }
    </style>
    <!-- fin de datos para compartir por facebook -->
</head>


<body id="color_fondo">

    <link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
    </span>
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
                            <h2 class="mb-3 pl-3 font-weight-bold mt-2 titulo_importante position-relative"><?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?></h2>
                        </div>
                        <div class="codigo1 mt-4">
                            <span class="label-wrap">
                                <span class="label-status label-status-7 label label-default">Código: <?php echo $co; ?></span>
                            </span>
                        </div>
                    </div>
                    <p class="codigo"> <i class="fas fa-map-marker-alt icon mr-2"></i><?php echo $r['ciudad'] . ' , ' . $r['barrio']  ?></p>
                </div>
                <!-- div derecho -->
                <div class="col-6  text-right p-0">
                    <div class="col-12 text-right pr- d-flex flex-row-reverse bd-highlight">
                        <div class="row">
                            <div class="mr-4 mt-4">
                                <ul class="lista_redes d-flex justify-content-end p-0">
                                    <p class="mr-3 font-weight-bold">Compartir por:</p>
                                    <li class="mr-3 estilo_icono_foot">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.andinainmobiliaria.com%2Fdetalle_inmueble.php%3Fco%3D984-<?php echo $co; ?>" target="_blank" class="color_iconos color_facebook"> <i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="mr-3 estilo_icono_foot">
                                        <a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.andinainmobiliaria.com%2Fdetalle_inmueble.php%3Fco%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank" class="color_iconos color_twitter"><i class=" fab fa-twitter"></i></a>
                                    </li>
                                    <li class="estilo_icono_foot">
                                        <a href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20http://www.andinainmobiliaria.com/detalle_inmueble.php?co%3d' . $co ?>" target="_blank" class="color_iconos color_wapp"> <i class="color_wapp fab fa-whatsapp"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-2">
                                <a href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=984-<?php echo $co ?>" style="font-size: 13px;"><span>Imprimir Ficha</span></a>
                            </div>
                        </div>

                    </div>
                    <div>
                        <h2 class="font-weight-bold">
                            <?php if ($r['Gestion'] == 'Arriendo') {
                                echo '<span class="">$ ' . $r['ValorCanon'] . '</span>';
                            } else if ($r['Gestion'] == 'Venta') {
                                echo '<span class="">$ ' . $r['ValorVenta'] . '</span>';
                            } else {
                                echo '<span class="">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</span>';
                            }
                            ?>
                        </h2>
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
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
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
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
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
                                <img src="<?php echo $asesor['FotoAsesor']; ?>" class="tamaño_img_asesor" alt="">
                            </div>
                        </div>
                        <div class="col-12  ml-0">
                            <ul class="datos_asesor">
                                <li class="mb-2"> <i class="fas fa-user mr-2 icono_Asesor"></i> <?php echo $asesor['ntercero']; ?></li>
                                <li class="mb-2"> <a class="accion_asesor" href="tel:+57<?php echo $asesor['celular']; ?>"><i class="fas fa-mobile-alt mr-2 icono_Asesor "></i><?php echo $asesor['celular']; ?></a></li>
                                <li class="mb-2"> <a class="accion_asesor" href="mailto:<?php echo $asesor['correo']; ?>"><i class="fas fa-envelope mr-2 icono_Asesor"></i> <?php echo $asesor['correo']; ?></a></li>
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
                            <h5 class="font-weight-bold ">Descripción</h5>
                            <hr>
                            <?php echo  $r['descripcionlarga']; ?>
                        </div>
                        <!-- caracteristicas internas -->
                        <div class="tab-pane fade" id="inter" role="tabpanel" aria-labelledby="profile-tab">
                            <?php
                            if (count($r['caracteristicasInternas']) > 0) {
                                echo
                                    '<h5 class="font-weight-bold ">Características Internas</h5>
                                    <hr>
                                        <ul>';
                                for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>
                                
                            ';
                            }
                            ?>
                        </div>
                        <!-- caracteristicas esternas -->
                        <div class="tab-pane fade" id="exter" role="tabpanel" aria-labelledby="contact-tab">
                            <?php
                            if (count($r['caracteristicasExternas']) > 0) {
                                echo
                                    '<h5 class="font-weight-bold ">Características Externas</h5>
                                    <hr>
                                        <ul>';
                                for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>
                                
                            ';
                            }
                            ?>
                        </div>
                        <!-- caracteristicas alrededores-->
                        <div class="tab-pane fade" id="alre" role="tabpanel" aria-labelledby="profile-tab">
                            <?php
                            if (count($r['caracteristicasAlrededores']) > 0) {
                                echo
                                    '<h5 class="font-weight-bold ">Características de Alrededores</h5>
                                    <hr>
                                        <ul>';
                                for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>
                                
                            ';
                            }
                            ?>
                        </div>
                        <!-- Video -->
                        <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="contact-tab">
                            <?php if ($r['video'] != "") {
                                echo
                                    '
                                    <div class="card">
                                <div class="card-body">
                                    <h5 class="font-weight-bold">Video</h5>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                        <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                            } ?>
                        </div>
                    </div>
                    <div class="col-12 p-0 mt-4">
                        <div class="card mapa_tamaño">
                            <div class="">
                                <div id="map" class="w-100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 asesor_cont_mayor mt-3">
                    <div class=" p-3 color_int_asesor">
                        <div class="col-12  d-flex justify-content-center">
                            <div class="col-12 text-center">
                                <h4 class="font-weight-bold ">Popiedades simialres</h4>
                            </div>
                        </div>
                        <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>
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
        autoplay: true,
        autoplayTimeout: 3500,
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
<!-- mapa del inmueble -->
<script src="mapas/leaflet.js" crossorigin=""></script>
<script>
    var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

    L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
    }).addTo(map);

    L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
        .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
        .openPopup();
</script>

</html>