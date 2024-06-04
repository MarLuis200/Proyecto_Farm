<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">

                @if ( !empty ( $inventario->id) )

                    <div class="mb-3">
                        <label for="nombre" class="negrita">Nombre:</label>
                        <div>
                            <input class="form-control" placeholder="nombre" required="required" name="nombre" type="text" id="nombre" value="{{ $inventario->nombre }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="existencia" class="negrita">Existencia:</label>
                        <div>
                            <input class="form-control" placeholder="#" required="required" name="existencia" type="text" id="existencia" value="{{ $inventario->existencia }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_caducidad" class="negrita">Fecha Caducidad:</label>
                        <div>
                            <input class="form-control" placeholder="fecha_caducidad" required="required" name="fecha_caducidad" type="date" id="fecha_caducidad" value="{{ $inventario->fecha_caducidad }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="no_compra" class="negrita">Número de compra:</label>
                        <div>
                            <input class="form-control" placeholder="#" required="required" name="no_compra" type="text" id="no_compra" value="{{ $inventario->no_compra }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="clave_proveedor" class="negrita">Clave Proveedor:</label>
                        <div>
                            <input class="form-control" placeholder="#" required="required" name="clave_proveedor" type="text" id="clave_proveedor" value="{{ $inventario->clave_proveedor }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="negrita">Selecciona una imagen:</label>
                        <div>
                            <input name="img" type="file" id="img">
                            <br>
                            <br>

                            @if ( !empty ( $inventario->img) )

                                <span>Imagen Actual: </span>
                                <br>
                                <img src="../../../uploads/{{ $inventario->img }}" width="200" class="img-fluid">

                            @else

                                Aún no se ha cargado una imagen para este proveedor

                            @endif

                        </div>

                    </div>

                @else

                    <div class="mb-3">
                        <label for="nombre" class="negrita">Nombre:</label>
                        <div>
                            <input class="form-control" placeholder="Nombre" required="required" name="nombre" type="text" id="nombre">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="existencia" class="negrita">Existencia:</label>
                        <div>
                            <input class="form-control" placeholder="existencia" required="required" name="existencia" type="text" id="existencia">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_caducidad" class="negrita">Fecha de Caducidad:</label>
                        <div>
                            <input class="form-control" placeholder="--" required="required" name="fecha_caducidad" type="date" id="fecha_caducidad">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="no_compra" class="negrita">No compra:</label>
                        <div>
                            <input class="form-control" placeholder="#" required="required" name="no_compra" type="text" id="no_compra">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="clave_proveedor" class="negrita">Clave Proveedor:</label>
                        <div>
                            <input class="form-control" placeholder="#" required="required" name="clave_proveedor" type="text" id="clave_proveedor">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="negrita">Selecciona una imagen:</label>
                        <div>
                            <input name="img" type="file" id="img">
                        </div>
                    </div>

                @endif

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('admin/inventario') }}" class="btn btn-warning">Cancelar</a>

                <br>
                <br>

            </div>
        </section>
    </div>
</div>