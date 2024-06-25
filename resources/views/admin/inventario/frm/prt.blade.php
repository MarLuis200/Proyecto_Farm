<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                <div class="mb-3">
                    <label for="producto_id" class="negrita">Seleccionar Producto:</label>
                    <div>
                        <select class="form-control" name="producto_id" id="producto_id" onchange="fillPersonDetails(this)">
                            <option value="">Seleccione un producto</option>
                            @foreach ($productos as $producto)
                                <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="stock" class="negrita">Stock:</label>
                    <div>
                        <input class="form-control" placeholder="Stock" required name="stock" type="text" id="stock">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="fecha_caducidad" class="negrita">Fecha de Caducidad:</label>
                    <div>
                        <input class="form-control" placeholder="Fecha de Caducidad" required name="fecha_caducidad" type="date" id="fecha_caducidad">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="precio" class="negrita">Precio:</label>
                    <div>
                        <input class="form-control" placeholder="$" required name="precio" type="text" id="precio">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="img" class="negrita">Imagen Producto:</label>
                    <div>
                        <img id="img" src="" alt="Imagen Producto" style="max-width: 200px; display: none;">
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('admin.inventario') }}" class="btn btn-warning">Cancelar</a> 
                <br><br>
            </div>
        </section>
    </div>
</div>

<script>
    function fillPersonDetails(select) {
        var productos = @json($productos);
        var selectedProducto = productos.find(producto => producto.id == select.value);

        if (selectedProducto) {
            document.getElementById('stock').value = selectedProducto.stock;
            document.getElementById('fecha_caducidad').value = selectedProducto.fecha_caducidad;
            document.getElementById('precio').value = selectedProducto.precio;
            var imgElement = document.getElementById('img');
            if (selectedProducto.img) {
                imgElement.src = '{{ asset('uploads/') }}/' + selectedProducto.img;
                imgElement.style.display = 'block'; // Mostrar la imagen
            } else {
                imgElement.src = ''; // Limpiar la imagen si no hay ninguna
                imgElement.style.display = 'none'; // Ocultar el elemento de imagen
            }
        } else {
            // Limpiar todos los campos si no se selecciona ningún producto
            document.getElementById('stock').value = '';
            document.getElementById('fecha_caducidad').value = '';
            document.getElementById('precio').value = '';
            document.getElementById('img').src = '';
            document.getElementById('img').style.display = 'none';
        }
    }
</script>
