<?php
require 'variables/variables.php';
require 'controllers/inmueblesController.php';
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
        <div class="h-100 col-12 p-0">
            <div class="h-100 col-12 d-flex flex-column align-items-center justify-content-center cont_texto_banner text-center position-absolute">
                <h1 class="font-weight-bold rutas txt_principal"> INMUEBLES </h1>
                <h5 class="justify-content-center row rutas"> Inicio / Inmuebles </h5>
            </div>
            <div class="h-100">
                <img class="h-100" src="images/banner_inmbuebles.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- buscador -->
    <section class="mb-5" id="buscador">
        <?php include 'layout/buscador.php'; ?>
    </section>

    <!-- cards inmuebles -->
    <section>
        <div class="col-12 justify-content-center pl-0">
            <div class="d-flex flex-wrap">
                <!-- propiedades -->
                <?php
                if (is_array($api)) {
                    listar_inmuebles($api['Inmuebles']);
                } else {
                    echo '<div class="col-12">
                        <h2 class="text-center" >No se encontraron inmuebles</h2>
                    </div>';
                }
                ?>
            </div>
        </div>
        <div class="col-12 text-center">
            <?php if (is_array($api)) : ?>
                <ul class="pagination mt-4 align-items-end justify-content-center">
                    <?php if ($paginator->getPrevUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo;</a></li>
                    <?php endif; ?>
                    <?php foreach ($paginator->getPages() as $page) : ?>
                        <?php if ($page['url']) : ?>
                            <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if ($paginator->getNextUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">&raquo;</a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
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