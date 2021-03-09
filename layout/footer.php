<!-- boton subir -->
<i class="fas fa-angle-up subir"></i>
<!-- primer div -->
<div class="container tamaño_cont">
    <div class="justify-content-center">
        <div class="col-md-12 col-lg-12 col-12">
            <div class="col-12 cont-footer">
                <div class="row">
                    <!-- datos contacto -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <h5 class="font-weight-bold">Datos de contacto</h5>
                        <div class="col-12 mb-3 p-0">
                            <i class="fas fa-map-marker-alt icon"></i> <a id="link"> Andina Inmobiliaria S.A.S, M.A.V.U No 0006/11SGM.</a>
                        </div>
                        <div class="col-12 mb-3 p-0">
                            <i class="fas fa-location-arrow icon"></i> <a id="link" href="https://www.google.com/maps/place/204+Oficina,+Cra.+83+%2332-64,+Medell%C3%ADn,+Antioquia/@6.2342548,-75.6083956,17z/data=!3m1!4b1!4m5!3m4!1s0x8e4429917f42915b:0x436ecd39c4f046b!8m2!3d6.2342495!4d-75.6062069" target="_blank"> Carrera 81 No 32 – 204 Oficina 322ª Nueva Villa del Aburra Medellín - Antioquia</a>
                        </div>
                        <div class="col-12 mb-3 p-0">
                            <i class="fa fa-mobile-alt icon"></i><a id="link" href="tel:<?php echo $datos_contacto['celular']['link'] ?>"> 300 543 07 22</a>
                        </div>
                        <div class="col-12 mb-3 p-0">
                            <i class="fa fa-phone icon"></i> <a id="link" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">+57 (4) 444 52 32</a>
                        </div>
                        <div class="col-12 mb-3 p-0">
                            <i class="fab fa-whatsapp icon"></i><a id="link" href="<?php echo $datos_contacto['whatsapp']['link'] ?>" target="_blank"> 300 543 07 22</a>
                        </div>
                        <div class="col-12 mb-3 p-0">
                            <i class="fas fa-envelope icon"></i><a id="link" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"> info@andinainmobiliaria.com</a>

                        </div>
                    </div>
                    <!-- horarios -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <h5 class="font-weight-bold">Horarios de atención</h5>
                        <div class="col-12 mb-3 p-0">
                            <i class="fas fa-calendar-alt icon"></i> <a id="link">Lunes a jueves de 7:30AM a 12:30PM y de 1:30PM a 5:30PM.</a>
                        </div>
                        <div class="col-12 mb-3 p-0">
                            <i class="fas fa-calendar-alt icon"></i> <a id="link">Viernes de 7:30AM a 12:00PM y de 2:00PM a 5:30PM.</a>
                        </div>
                        <div class="col-12 mb-3 p-0">
                            <i class="fas fa-calendar-alt icon"></i> <a id="link">Sábados de 8:00AM a 12:00PM.</a>
                        </div>
                    </div>
                    <!-- formualrios -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <h5 class="font-weight-bold"> Descarga de formularios Libertador</h5>
                        <div class="col-12 mb-3 p-0">
                            <i class="far fa-file-pdf icon"></i> <a id="link" href="archivos/Formulario Persona Natural.pdf" target="_blank">Persona Natural</a>
                        </div>
                        <div class="col-12 mb-3 p-0">
                            <i class="far fa-file-pdf icon"></i> <a id="link" href="archivos/Formulario Persona Jurídica.pdf" target="_blank">Persona Jurídica</a>
                        </div>
                        <div class="col-12 mb-3 p-0">
                            <i class="far fa-file-pdf icon"></i> <a id="link" href="archivos/TABLA_DE_ESTUDIOS_MEDELLIN_2019.pdf" target="_blank">Valores Estudio</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<hr id="linea" width="90%">
<!-- segund div -->
<div class="footer-bottom-area">
    <div class="container  text-center footer2">
        <p class="copy_style">Diseñado y Desarrollado por <a class="color_a_foot_imper" href="https://www.dexcondigital.com" target="_blanck">Dexcon Digital.</a>©Copyright 2020 para Andina Inmobiliaria.
            Todos los derechos reservados. <a href="" class="color_a_foot_imper">Politica de Datos</a> </p>
    </div>
</div>
<!-- modal consignar -->
<section id="modal_consigana">
    <div class="modal fade show" id="consigna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Consignar Inmueble</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <form action="email/consignainmueble.php" class="row" method="post">
                            <div class="form-group col-12">
                                <input type="text" placeholder="Nombre" name="nombre" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <input type="mail" placeholder="Correo" name="correo" class="form-control" required="">
                            </div>
                            <div class="form-group col-12">
                                <input type="Telefono" placeholder="Teléfono" name="telefono" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <select class="form-control select_color" name="transaccion" requiered="">
                                    <option selected="" disabled="">Tipo de Transacción</option>
                                    <option value="arriendo">Arriendo</option>
                                    <option value="arriendo/venta">Arriendo/venta</option>
                                    <option value="venta">Venta</option>
                                    <option value="avaluos">Avalúos</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <select class="form-control select_color" id="tipo_inm" name="tipo_inm" requiered="">
                                    <option selected="" disabled="">Tipo de Inmueble</option>
                                    <option value="Apartamento">Apartamento</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Consultorio">Consultorio</option>
                                    <option value="Oficina">Oficina</option>
                                    <option value="Local">Local</option>
                                    <option value="Bodega">Bodega</option>
                                    <option value="Lote">Lote</option>
                                    <option value="Finca">Finca</option>
                                    <option value="Parqueadero">Parqueadero</option>
                                    <option value="Edificio">Edificio</option>
                                    <option value="Apartaestudio">Apartaestudio</option>
                                    <option value="Hotel">Hotel</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <input type="number" placeholder="Valor" name="valor" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <input type="number" placeholder="Área" name="area" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" placeholder="Ciudad" name="ciudad" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <input type="text" placeholder="Dirección" name="direccion" class="form-control" requiered="">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="mensaje" placeholder="Mensajes" class="form-control" id="mensaje" rows="6" requiered=""></textarea>
                            </div>
                            <div class="form-group col-12">
                                <div class="custom-control custom-checkbox mb-4">
                                                <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy2" required>
                                                <label class="custom-control-label" for="defaultContactFormCopy2">Confimo que he leído, entendido y acepto la<a class="politica" href="Politica_de_datos.pdf" download="Politica de tratamiento de infromación.pdf"> política de tratamiento de datos personales.</a></label>
                                            </div>
                            </div>
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn_buscar">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>