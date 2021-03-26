 <!-- Codigo del preloader -->
 <style>
     #wrap-preload {
         position: fixed;
         z-index: 10;
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;
         background: #fff;
         opacity: 1;
         visibility: visible;
         transition: opacity .5s ease, visibility .5s ease;
         z-index: 1032;
     }

     #wrap-preload.close {
         opacity: 0;
         visibility: hidden;
     }

     .fixed-top {
         position: fixed;
         top: 0;
         right: 0;
         left: 0;
         z-index: 10;
     }

     #wrap-preload>img.gif {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate3d(-50%, -50%, 0);
         z-index: 1032;
         height: 20%;
     }
 </style>
 <div id="wrap-preload">
     <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
 </div>
 <script>
     var loader = document.getElementById("wrap-preload");
     window.addEventListener("load", function() {
         loader.style.visibility = "hidden";
     });
 </script>
 <!-- Fin de codigo preloader -->
 <!-- primer_nav -->
 <div class="fondo_buscador">
     <div class="col-12 d-flex p-0">
         <div class="col-6 col-md-7 col-lg-7  justify-content-center">
             <a class="nav-link active contedor_logo ml-4 p-0" href="index.php"><img class="img" src="images/logo.png" alt=""></a>
             <div class="div_movil2">
                 <a class="nav-link active logo_blanco_movil p-0   text-center" href="index.php"><img class="logo_blanco_responsive" src="images/logo_blanco.png" alt=""></a>
             </div>
         </div>
         <div class="col-2 redes align-items-center">

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
         <div class="col-10 redes_dos align-items-center">

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
         <div class="col-3 fondo_div d-flex align-items-center telefono">
             <div class="align-items-center  col-12 text-center">
                 <h5 class="color_llamanos">Llámanos: <a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a></h5>
             </div>
         </div>
         <div class="col-6 col-md-5 col-lg-5 fondo_div d-flex align-items-center telefono2">
             <div class="align-items-center  col-12 text-center p-0">
                 <h5 class="color_llamanos">Llámanos: <a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a></h5>
             </div>
         </div>
     </div>
 </div>
 <!-- segundo nav -->
 <div id="nav" class="fondo_buscador1 menu">
     <div class="div_movil" style="display:none;">
         <a class="nav-link active ml-4 p-0  text-center" href="index.php"><img class="logo_blanco_responsive" src="images/logo_blanco.png" alt=""></a>
     </div>
     <nav class="navbar navbar-expand-lg espacio_nav2">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"><i class="fas fa-align-justify mt-1"></i></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                 <li class="nav-item linea mr-2 position-relative <?php if ($pagina == 'Inicio') {
                                                                        echo 'active';
                                                                    } ?>">
                     <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item linea mr-2  <?php if ($pagina == 'Nosotros') {
                                                        echo 'active';
                                                    } ?>">
                     <a class="nav-link" href="nosotros.php">Nosotros</a>
                 </li>
                 <li class="nav-item linea mr-2  <?php if ($pagina == 'Servicios') {
                                                        echo 'active';
                                                    } ?>">
                     <a class="nav-link" href="servicios.php">Servicios</a>
                 </li>
                 <li class="nav-item linea mr-2  <?php if ($pagina == 'Inmuebles' || $pagina == 'Detalle de Inmueble') {
                                                        echo 'active';
                                                    } ?>">
                     <a class="nav-link" href="inmuebles.php?">Inmuebles</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Clientes
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item color_option_clientes" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=984&tipo=2" target="_blanck">Arrendatarios</a>
                         <a class="dropdown-item color_option_clientes" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=984&tipo=1" target="_blank">Propietarios</a>
                         <!--<a class="dropdown-item color_option_clientes" href="#">Pagos PSE</a>-->
                     </div>
                 </li>
                 <li class="nav-item linea mr-2">
                     <a class="nav-link" href="#" data-toggle="modal" data-target="#consigna">Consignar Inmueble</a>
                 </li>
                 <li class="nav-item linea mr-2 <?php if ($pagina == 'Contacto') {
                                                    echo 'active';
                                                } ?>">
                     <a class="nav-link" href="contacto.php">Contáctenos</a>
                 </li>
                 <!--<li class="nav-item mr-2">
                     <a class="nav-link pb-0" href="#"><img class="logo_pse" src="images/pse_blanco.png" alt=""></a>
                 </li>-->
             </ul>
         </div>
     </nav>

 </div>