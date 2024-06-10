<div class="row">
    <div class="col-md-12">
        <section class="panel"> 
            <div class="panel-body">

                @if (!empty($venta->id))

                    <div class="mb-3">
                        <label for="fecha_venta" class="negrita">Fecha de Venta:</label> 
                        <div>
                            <input class="form-control" placeholder="Fecha de Venta" required="required" name="fecha_venta" type="date" id="fecha_venta" value="{{ $venta->fecha_venta }}"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_proveedor" class="negrita">ID Proveedor:</label> 
                        <div>
                            <input class="form-control" placeholder="ID Proveedor" required="required" name="id_proveedor" type="text" id="id_proveedor" value="{{ $venta->id_proveedor }}"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="negrita">Descripción:</label> 
                        <div>
                            <input class="form-control" placeholder="Descripción" required="required" name="descripcion" type="text" id="descripcion" value="{{ $venta->descripcion }}"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="cantidad" class="negrita">Cantidad:</label> 
                        <div>
                            <input class="form-control" placeholder="Cantidad" required="required" name="cantidad" type="text" id="cantidad" value="{{ $venta->cantidad }}"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="negrita">Precio:</label> 
                        <div>
                            <input class="form-control" placeholder="Precio" required="required" name="precio" type="text" id="precio" value="{{ $venta->precio }}"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_producto" class="negrita">ID Producto:</label> 
                        <div>
                            <input class="form-control" placeholder="ID Producto" required="required" name="id_producto" type="text" id="id_producto" value="{{ $venta->id_producto }}"> 
                        </div>
                    </div>

                @else

                    <div class="mb-3">
                        <label for="fecha_venta" class="negrita">Fecha de Venta:</label> 
                        <div>
                            <input class="form-control" placeholder="Fecha de Venta" required="required" name="fecha_venta" type="date" id="fecha_venta"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_proveedor" class="negrita">ID Proveedor:</label> 
                        <div>
                            <input class="form-control" placeholder="ID Proveedor" required="required" name="id_proveedor" type="text" id="id_proveedor"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="negrita">Descripción:</label> 
                        <div>
                            <input class="form-control" placeholder="Descripción" required="required" name="descripcion" type="text" id="descripcion"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="cantidad" class="negrita">Cantidad:</label> 
                        <div>
                            <input class="form-control" placeholder="Cantidad" required="required" name="cantidad" type="text" id="cantidad"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="negrita">Precio:</label> 
                        <div>
                            <input class="form-control" placeholder="Precio" required="required" name="precio" type="text" id="precio"> 
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_producto" class="negrita">ID Producto:</label> 
                        <div>
                            <input class="form-control" placeholder="ID Producto" required="required" name="id_producto" type="text" id="id_producto"> 
                        </div>
                    </div>

                @endif

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('admin/ventas') }}" class="btn btn-warning">Cancelar</a> 

                <br>
                <br>

            </div>
        </section>
    </div>
</div>
