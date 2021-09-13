<?php
require 'variables/variables.php';
require_once 'variables/captcha.php';
$WebK = Web_Key;
$pagina = 'Contacto';
$inmobiliaria = 'Andina Inmobiliaria';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagina . ' | ' . $inmobiliaria;
?></title>
    <?php include 'layout/archivosheader.php';
?>
</head>

<body>
    <!-- menu -->
    <section>
        <?php include 'layout/menu.php';
?>
    </section>

    <!-- banner de entrada -->
    <section id="banner">
        <div class="h-100 col-12 p-0">
            <div class="h-100 col-12 d-flex flex-column align-items-center justify-content-center cont_texto_banner text-center position-absolute">
                <h1 class="font-weight-bold rutas txt_principal"> CONTÁCTENOS </h1>
                <h5 class="justify-content-center row rutas"> Inicio / Contáctenos </h5>
            </div>
            <div class="h-100">
                <img class="h-100" src="images/banner_contacto.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="propiedades mt-4 pt-0" id="contacto">
        <div class="container tamaño_cont">
            <div class="justify-content-center">
                <div class="col-md-12 col-lg-12 col-12">
                    <h2 class="mb-3 ml-0 titulo_principal font-weight-bold titulo_importante">Contáctenos</h2>
                    <div style="position:relative;">
                        <div class="col-12 text-justify">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6">
                                    <form action="email/enviarCorreo.php" method="POST">
                                        <div class="form-group font-weight-bold">
                                            <label for="exampleInputEmail1 ">Nombre Completo</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="form-group font-weight-bold">
                                            <label for="exampleInputEmail1">Correo Electrónico</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="correo" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="form-group font-weight-bold">
                                            <label for="exampleInputEmail1">Celular ó Teléfono</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" name="telefono" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="form-group font-weight-bold">
                                            <label for="exampleFormControlTextarea1">Mensaje</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox mb-4">
                                                <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" required>
                                                <label class="custom-control-label" for="defaultContactFormCopy">Confimo que he leído, entendido y acepto la<a class="politica" href="Politica_de_datos.pdf" download="Politica de tratamiento de infromación.pdf"> política de tratamiento de datos personales.</a></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="g-recaptcha col-12" data-sitekey="<?php echo $WebK ?>" required></div>
                                            <div class="col-12 mb-4"><small id="tituloHepl" class="form-text text-muted">Este campo es obligatorio</small></div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn_enviar col-6">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="info_conatcto">
                                        <div class="col-12 mb-5 container ">
                                            <i class="fas fa-location-arrow icon"></i> <span id="link" href="https://www.google.com/maps/place/204+Oficina,+Cra.+83+%2332-64,+Medell%C3%ADn,+Antioquia/@6.2342548,-75.6083956,17z/data=!3m1!4b1!4m5!3m4!1s0x8e4429917f42915b:0x436ecd39c4f046b!8m2!3d6.2342495!4d-75.6062069" target="_blank"> Carrera 81 No 32 – 204 Oficina 322ª Nueva Villa del Aburra Medellín - Antioquia</span>
                                        </div>
                                        <div class="col-12 mb-5 container">
                                            <i class="fa fa-mobile-alt icon"></i><a id="link" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"> 300 543 07 22</a>
                                        </div>
                                        <div class="col-12 mb-5 container">
                                            <i class="fa fa-phone icon"></i> <a id="link" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a>
                                        </div>
                                        <div class="col-12 mb-5 container">
                                            <i class="fab fa-whatsapp icon"></i><a id="link" href="<?php echo $datos_contacto['whatsapp']['link'] ?>" target="_blank"> 300 543 07 22</a>
                                        </div>
                                        <div class="col-12 container telefono_contact">
                                            <i class="fas fa-envelope icon"></i><a id="link" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"> info@andinainmobiliaria.com</a>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">

                                        <ul class="lista_redes justify-content-center p-0 espacio_top">
                                            <li class="mr-4 estilo_icono_foot2">
                                                <a href="<?php echo $redes_sociales['facebook']['link'] ?>" target="_blank" class="color_iconos color_facebook tamaños"> <i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="mr-4 estilo_icono_foot2">
                                                <a href="<?php echo $redes_sociales['instagram']['link'] ?>" target="_blank" class="color_iconos color_insta tamaños"><i class=" fab fa-instagram"></i></a>
                                            </li>
                                            <li class="estilo_icono_foot2">
                                                <a href="<?php echo $datos_contacto['whatsapp']['link'] ?>" target="_blank" class="color_iconos color_wapp tamaños"> <i class="color_wapp fab fa-whatsapp"></i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mapa">
        <div class="col-12 p-0 mt-3 mapa_ubicacion">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1367364399744!2d-75.60403398573416!3d6.245705328064305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429ffd9a74193%3A0xbf986bb290d8ccc!2sFisiocinetics!5e0!3m2!1ses!2sco!4v1582306194112!5m2!1ses!2sco" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        </div>
    </section>

    <!-- footer -->
    <section class="propiedades mt-4 pt-0" id="footer">
        <?php include 'layout/footer.php';?>
    </section>
</body>
<?php include 'layout/archivosfooter.php';?>
</html>
