<?php
require 'variables/variables.php';
$pagina = 'Contacto';
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
                <h1 class="font-weight-bold rutas txt_principal"> CONTÁCTENOS </h1>
                <h5 class="justify-content-center row rutas"> Inicio / Conatcto </h5>
            </div>
            <img src="images/banner_contacto.jpg" alt="">
        </div>
    </section>

    <section class="propiedades mt-4 pt-0" id="aliados">
        <div class="container tamaño_cont">
            <div class="justify-content-center">
                <div class="col-md-11 col-lg-12 col-10">
                    <h2 class="mb-3 ml-0 titulo_principal font-weight-bold">Contáctenos</h2>
                    <div style="position:relative;">
                        <div class="col-12 text-justify">
                            <div class="row">
                                <div class="col-6 border">
                                    <form>
                                        <div class="form-group font-weight-bold">
                                            <label for="exampleInputEmail1 ">Nombre Completo</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="form-group font-weight-bold">
                                            <label for="exampleInputEmail1">Correo Electrónico</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="form-group font-weight-bold">
                                            <label for="exampleInputEmail1">Celular ó Teléfono</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="form-group font-weight-bold">
                                            <label for="exampleFormControlTextarea1">Mensaje</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                                <label class="form-check-label" for="gridCheck">
                                                    Confimo que he leído, entendido y acepto la <a class="politica" href=""> política de tratamiento de datos personales.</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn_enviar col-6">Enviar</button>
                                        </div>
                                    </form>
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

</html>