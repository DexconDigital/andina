<?php

// modelo inmueble propiedades destacadas

function modelo_inmueble($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("813-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '
     
        <div class="position-relative card" style="width: 24rem;">
                   <a href="detalle_inmueble.php">
                    <div class="contenedor_imagen position-relative">
                       <img src="images/no_image.png" class="position-absolute w-100 h-100 card-img-top" alt="...">
                   <div class="position-absolute w-100 h-100 caja_negra"></div>
                      </div>
                     </a>
                        <div class="card-body">
                            <div class="d-flex align-items-baseline">
                                <i class="mr-1 fas fa-map-marker-alt"></i>
                                <h5> Barrio - Ciudad</h5>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <label> Código: 1234</label>
                            </div>
                            <div class="">
                                <ul class=" list_iconos_cards d-flex p-0 justify-content-around">
                                    <li> <i class="fas fa-chart-area mr-2"></i>5m<sup>2</sup></li>
                                    <li> <i class=" fas fa-bath mr-2"></i>3</li>
                                    <li> <i class="fas fa-bed mr-2"></i>5</li>
                                    <li> <i class="fas fa-warehouse mr-2"></i>2</li>
                                </ul>
                            </div>
                            <div class="col-12 text-center">
                                <a href="detalle_inmueble.php" class="btn btnn_detalle col-6">Detalle <i class="icon_detalle fas fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="tipo_inmueble">
                            <p class="ml-2">Apartamento</p>
                        </div>
                        <div class="tipo_gestion">
                            <p class="mr-2">En Arriendo</p>
                        </div>
                        <div class="precio">
                            <span class="ml-2">$ 1.000.000</span>
                        </div>
                    </div>
                    
    
        ';
    }
}

// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}
