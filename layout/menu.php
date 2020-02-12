 <!-- primer_nav -->
 <div class="fondo_buscador">
     <div class="col-12 d-flex p-0">
         <div class="col-7">
             <a class="nav-link active contedor_logo ml-4 p-0" href="index.php"><img src="images/logo.png" alt=""></a>
         </div>
         <div class="col-2">

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
         <div class="col-3 fondo_div d-flex align-items-center">
             <div class="align-items-center  col-12 text-center">
                 <h5 class="color_llamanos">Llámanos: <a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a></h5>
             </div>
         </div>
     </div>
 </div>
 <!-- segundo nav -->
 <div id="nav" class="fondo_buscador1 menu">
     <nav class="navbar navbar-expand-lg ml-4">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                 <li class="nav-item active linea mr-2">
                     <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item linea mr-2">
                     <a class="nav-link" href="nosotros.php">Nosotros</a>
                 </li>
                 <li class="nav-item linea mr-2">
                     <a class="nav-link" href="servicios.php">Servicios</a>
                 </li>
                 <li class="nav-item linea mr-2">
                     <a class="nav-link" href="inmuebles.php?">Inmuebles</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Clientes
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item color_option_clientes" href="#">Arrendatarios</a>
                         <a class="dropdown-item color_option_clientes" href="#">Propietarios</a>
                         <a class="dropdown-item color_option_clientes" href="#">Pagos PSE</a>
                     </div>
                 </li>
                 <li class="nav-item linea mr-2">
                     <a class="nav-link" href="#">Consignar Inmueble</a>
                 </li>
                 <li class="nav-item linea mr-2">
                     <a class="nav-link" href="contacto.php">Contáctenos</a>
                 </li>
                 <li class="nav-item mr-2">
                     <a class="nav-link pb-0" href="#"><img class="logo_pse" src="images/pse_blanco.png" alt=""></a>
                 </li>
             </ul>
         </div>
     </nav>
 </div> 