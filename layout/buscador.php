<div class="col-12  container div_buscador">
    <div class="row">
        <div class="col-6 col-md-4 col-lg-2  p-1">
            <div class="form-group">
                <select class="form-control" id="tipo_inmueble_buscar">
                    <option selected="" value="0">Tipo de Inmueble</option>
                </select>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 p-1">
            <div class="form-group">
                <select class="form-control" id="tipo_gestion_buscar">
                    <option selected="" value="0">Tipo de Gestión</option>
                </select>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2  p-1">
            <div class="form-group">
                <select class="form-control" id="ciudad_buscar">
                    <option selected="" value="0">Ciudad</option>
                </select>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2  p-1">
            <div class="form-group">
                <select class="form-control" id="barrio_buscar">
                    <option selected="" value="0"> Barrio </option>
                </select>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 5  p-1 text-center">
            <button class="advance-btn blue btn active btn_avanzado" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search mr-2"></i>Avanzado</button>
        </div>
        <div class="col p-1">
            <div class="form-group">
                <button type="button" class="btn btn-primary mb-3 btn_buscar" id="buscar">Buscar</button>
            </div>
        </div>
    </div>
</div>
<!-- segundo div -->
<div class="col-12 segund_div_buscador collapse " id="collapseExample">
    <div class="row">
        <div class="col-6 col-md-3 p-1">
            <div class="form-group">
                <input placeholder="Código" type="number" class="form-control f1" id="codigo_buscar" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-6 col-md-3 p-1">
            <div class="form-group">
                <input placeholder="Baños" type="number" class="form-control f1" id="banios_buscar" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-6 col-md-3 p-1">
            <div class="form-group">
                <input placeholder="Alcobas" type="number" class="form-control f1" id="alcobas_buscar" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-6 col-md-3 p-1">
            <div class="form-group">
                <input placeholder="Garajes " type="number" class="form-control f1" id="garajes_buscar" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-12 col-md-6 p-1">
            <div class="wrapper">
                <div class="range-slider" id="areas">
                    <input type="text" class="js-range-slider" value="" />
                </div>
                <div class="extra-controls form-inline">
                    <div class="form-group" style="display:none;">
                        <input type="text" class="js-input-from form-control" id="area_minima_buscar" value="0" aria-describedby="emailHelp" />
                        <input type="text" class="js-input-to form-control" id="area_maxima_buscar" value="0" aria-describedby="emailHelp" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 p-1">
            <div class="form-group">
                <input type="number" class="form-control" id="precio_minimo_buscar" placeholder="Precio Mínimo">
            </div>
        </div>
        <div class="col-6 col-md-3 p-1">
            <div class="form-group">
                <input type="number" class="form-control" id="precio_maximo_buscar"  placeholder="Precio Máximo">
            </div>
        </div>
    </div>
</div>