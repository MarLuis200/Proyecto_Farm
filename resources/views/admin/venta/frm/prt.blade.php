<div class="row">
    <div class="col-md-12">
        <section class="panel"> 
            <div class="panel-body">

                @if (!empty($venta->id))

                    <div class="mb-3">
                        <label for="id_producto" class="negrita">Producto:</label> 
                        <div>
                            <input class="form-control" placeholder="ID Producto" required="required" name="id_producto" type="text" id="id_producto" value="{{ $venta->id_producto }}"> 
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
                        <label for="id_producto" class="negrita">Producto:</label> 
                        <div>
                            <select name="id" class="form-control @error('id') is-invalid @enderror" value="{{ old('id') }}" id="id" >
                                <option value="" disabled selected>Selecciona un producto</option>
                                    @foreach($productos as $productos)
                                        <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                    @endforeach
                            </select>           
                            {!! $errors->first('id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="cantidad" class="negrita">Cantidad:</label> 
                        <div>
                            <input class="form-control" placeholder="Cantidad" required="required" name="cantidad" type="text" id="cantidad"> 
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