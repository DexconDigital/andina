<?php

// modelo inmueble propiedades destacadas

function modelo_inmueble($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("984-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '
     
        <div class="position-relative card">
                   <a href="detalle_inmueble.php?co=' . $codigo . '">
                    <div class="contenedor_imagen position-relative">
                       <img src="' . $imagen . '" class="position-absolute w-100 h-100 card-img-top" alt="...">
                   <div class="position-absolute w-100 h-100 caja_negra"></div>
                      </div>
                     </a>
                        <div class="card-body">
                            <div class="d-flex align-items-baseline">
                                <i class="mr-1 fas fa-map-marker-alt"></i>
                                <h5>' . $api['Barrio'] . ' , ' . $api['Ciudad'] . ' </h5>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <label> Código: ' . $codigo . '</label>
                            </div>
                            <div class="">
                                <ul class=" list_iconos_cards d-flex p-0 justify-content-around">
                                    <li> <i class="fas fa-chart-area mr-2"></i>' . $api['AreaConstruida'] . 'm<sup>2</li>
                                    <li> <i class=" fas fa-bath mr-2"></i>' . $api['banios'] . '</li>
                                    <li> <i class="fas fa-bed mr-2"></i>' . $api['Alcobas'] . '</li>
                                    <li> <i class="fas fa-warehouse mr-2"></i>' . $api['garaje'] . '</li>
                                </ul>
                            </div>
                            <div class="col-12 text-center">
                                <a href="detalle_inmueble.php?co=' . $codigo . '" class="btn btnn_detalle col-6">Detalle <i class="icon_detalle fas fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="tipo_inmueble">
                            <p class="ml-2">' . $api['Tipo_Inmueble'] . '</p>
                        </div>
                        <div class="tipo_gestion">
                            <p class="mr-2">' . $api['Gestion'] . '</p>
                        </div>
                        <div class="precio">
                            <span class="ml-2 mr-3">$';
        if ($api['Gestion'] == 'Arriendo') {
            echo $api['Canon'];
        } else if ($api['Gestion'] == 'Venta') {
            echo $api['Venta'];
        } else {
            echo $api['Canon'] . '/ $' . $api['Venta'];
        }
        echo '</span>
                        </div>
                    </div>
                    
    
        ';
    }
}
//modelo inmueble de la pagina de inmuebles.php
function modelo_inmueble2($r)
{

    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("984-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        $descripcion = $api['descripcionlarga'];
        $ciudad = $api['Ciudad'];
        $limite_de_cadena = 150;
        $limite_barrio_cadena = 8;
        // recortar cadena
        if (strlen($descripcion) >= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
            $ciudad = substr($ciudad, 0, $limite_barrio_cadena) . '';
        } else {
            $descripcion = $descripcion . '...<br><br><br><br>';
            $ciudad = $ciudad . '';
        }

        // fin de recortar cadena
        echo '
        <div class="col-4 p-0 mb-4">
          <div class="position-relative card cards_inmueble" style="width: 25rem;">
            <a href="detalle_inmueble.php?co=' . $codigo . '">
                <div class="contenedor_imagen position-relative">
                    <img src="' . $imagen . '" class="position-absolute w-100 h-100 card-img-top" alt="...">
                    <div class="position-absolute w-100 h-100 caja_negra"></div>
                </div>
            </a>
            <div class="card-body">
                <div class="d-flex align-items-baseline">
                    <i class="mr-1 fas fa-map-marker-alt"></i>
                    <h5> ' . $api['Barrio'] . ' , ' . $ciudad . ' </h5>
                </div>
                <div class="d-flex align-items-baseline">
                    <label> Código: ' . $codigo . ' </label>
                </div>
                <div class="">
                    <ul class=" list_iconos_cards d-flex p-0 justify-content-around">
                        <li> <i class="fas fa-chart-area mr-2"></i>' . $api['AreaConstruida'] . 'm<sup>2</li>
                        <li> <i class=" fas fa-bath mr-2"></i>' . $api['banios'] . '</li>
                        <li> <i class="fas fa-bed mr-2"></i>' . $api['Alcobas'] . '</li>
                        <li> <i class="fas fa-warehouse mr-2"></i>' . $api['garaje'] . '</li>
                    </ul>
                </div>
                <div class="text-justify">
                    <p>' . $descripcion . '</p>
                </div>
                <div class="col-12 text-center">
                    <a href="detalle_inmueble.php?co=' . $codigo . '" class="btn btnn_detalle col-6">Detalle <i class="icon_detalle fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="tipo_inmueble">
                <p class="ml-2">' . $api['Tipo_Inmueble'] . '</p>
            </div>
            <div class="tipo_gestion">
                <p class="mr-2">' . $api['Gestion'] . '</p>
            </div>
            <div class="precio">
                <span class="ml-2 mr-3">$';
        if ($api['Gestion'] == 'Arriendo') {
            echo $api['Canon'];
        } else if ($api['Gestion'] == 'Venta') {
            echo $api['Venta'];
        } else {
            echo $api['Canon'] . '/ $' . $api['Venta'];
        }
        echo '</span>
            </div>
        </div>
    </div>
 ';
    }
}

//similares
function modelo_inmueble_similare($r)
{

    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("984-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '
        <a href="./detalle_inmueble.php?co=' . $codigo . '" class="similares" >
        <div class="col-12 d-flex  mt-3">
                            <div class="alto_img_similares col-6 p-0 position-relative">
                                <img class="position-absolute w-100 h-100" src="' . $imagen . '" alt="">
                                <div class="position-absolute w-100 h-100 caja_negra"></div>
                            </div>
                            <div class="col-6 pr-0">
                                <div class="col-12 pr-0 mt-3">
                                    <h6 class="font-weight-bold">' . $api['Tipo_Inmueble'] . ' en ' . $api['Gestion'] . '</h6>
                                </div>
                                <div class="col-12 pr-0 mt-2">
                                    <h6 class="font-weight-bold"> <i class="fa fa-map-marker-alt"></i> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</h6>
                                </div>
                            </div>
            </div>
        </a>
        
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
