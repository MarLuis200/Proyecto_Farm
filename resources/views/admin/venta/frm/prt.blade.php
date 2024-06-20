<form action="{{ route('ventas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <section class="panel"> 
                <div class="panel-body">
                    @if (!empty($venta->id))
                        <div class="mb-3">
                            <label for="producto_id" class="negrita">Producto:</label> 
                            <div>
                                <input class="form-control" placeholder="ID Producto" required="required" name="producto_id" type="text" id="producto_id" value="{{ $venta->producto_id }}"> 
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="cantidad" class="negrita">Cantidad:</label> 
                            <div>
                                <input class="form-control" placeholder="Cantidad" required="required" name="cantidad" type="text" id="cantidad" value="{{ $venta->cantidad }}"> 
                            </div>
                        </div>
                    @else
                        <div class="mb-3">
                            <label for="producto_id" class="negrita">Producto:</label> 
                            <div>
                                <select name="producto_id" class="form-control @error('producto_id') is-invalid @enderror" value="{{ old('producto_id') }}" id="producto_id" required>
                                    <option value="" disabled selected>Selecciona un producto</option>
                                    @foreach($productos as $producto)
                                        <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                    @endforeach 
                                </select>           
                                {!! $errors->first('producto_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="cantidad" class="negrita">Cantidad:</label> 
                            <div>
                                <input class="form-control" placeholder="Cantidad" required="required" name="cantidad" type="number" id="cantidad"> 
                            </div>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="img" class="negrita">Imagen:</label>
                        <div>
                            <input class="form-control" name="img" type="file" id="img">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info">Guardar</button>
                    <a href="{{ route('admin/ventas') }}" class="btn btn-warning">Cancelar</a> 
                </div>
            </section>
        </div>
    </div>
</form>
