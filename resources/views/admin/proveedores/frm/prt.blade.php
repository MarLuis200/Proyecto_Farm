<div class="row">
    <div class="col-md-12">
        <section class="panel"> 
            <div class="panel-body">

                @if ( !empty ( $proveedores->id) )

                    <div class="mb-3">
                        <label for="nombre" class="negrita">Nombre:</label> 
                        <div>
                            <input class="form-control" placeholder="Nombre Proveedor" required="required" name="nombre" type="text" id="nombre" value="{{ $proveedores->nombre }}"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="negrita">Direccion:</label> 
                        <div>
                            <input class="form-control" placeholder="Ingrese direccion" required="required" name="direccion" type="text" id="direccion" value="{{ $proveedores->direccion }}"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="negrita">Telefono:</label> 
                        <div>
                            <input class="form-control" placeholder="###" required="required" name="telefono" type="text" id="telefono" value="{{ $proveedores->telefono }}"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="negrita">Correo:</label> 
                        <div>
                            <input class="form-control" placeholder="@..." required="required" name="correo" type="text" id="stock" value="{{ $proveedores->correo }}"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="negrita">Selecciona una imagen:</label> 
                        <div>
                            <input name="img" type="file" id="img">
                            <br>
                            <br>

                            @if ( !empty ( $proveedores->img) )

                                <span>Imagen Actual: </span>
                                <br>
                                <img src="../../../uploads/{{ $proveedores->img }}" width="200" class="img-fluid">

                            @else

                                Aún no se ha cargado una imagen para este proveedor

                            @endif

                        </div>

                    </div>

                @else

                    <div class="mb-3">
                        <label for="nombre" class="negrita">Nombre:</label> 
                        <div>
                            <input class="form-control" placeholder="Nombre Proveedor" required="required" name="nombre" type="text" id="nombre"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="negrita">Direccion:</label> 
                        <div>
                            <input class="form-control" placeholder="Ingrese Direccion" required="required" name="direccion" type="text" id="direccion"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="negrita">Telefono:</label> 
                        <div>
                            <input class="form-control" placeholder="###" required="required" name="telefono" type="text" id="telefono"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="negrita">Correo:</label> 
                        <div>
                            <input class="form-control" placeholder="@..." required="required" name="correo" type="text" id="correo"> 
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
                <a href="{{ route('admin/proveedores') }}" class="btn btn-warning">Cancelar</a> 

                <br>
                <br>

            </div>
        </section>
    </div>
</div>
