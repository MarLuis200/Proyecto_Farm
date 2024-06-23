<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">

                @if ( !empty ( $proveedores->id) )

                    <div class="mb-3">
                        <label for="persona_id" class="negrita">Seleccionar Persona:</label>
                        <div>
                            <select class="form-control" name="persona_id" id="persona_id" onchange="fillPersonDetails(this)">
                                <option value="">Seleccione una persona</option>
                                @foreach ($personas as $persona)
                                    <option value="{{ $persona->id }}" {{ $persona->id == $proveedores->persona_id ? 'selected' : '' }}>{{ $persona->nombre }} {{ $persona->apellido_paterno }} {{ $persona->apellido_materno }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="negrita">Nombre:</label>
                        <div>
                            <input class="form-control" placeholder="Nombre" name="nombre" type="text" id="nombre" value="{{ $proveedores->nombre }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="apellido_paterno" class="negrita">Apellido Paterno:</label>
                        <div>
                            <input class="form-control" placeholder="Apellido paterno" name="apellido_paterno" type="text" id="apellido_paterno" value="{{ $proveedores->apellido_paterno }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="apellido_materno" class="negrita">Apellido Materno:</label>
                        <div>
                            <input class="form-control" placeholder="Apellido materno" name="apellido_materno" type="text" id="apellido_materno" value="{{ $proveedores->apellido_materno }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="negrita">Dirección:</label>
                        <div>
                            <input class="form-control" placeholder="Dirección" name="direccion" type="text" id="direccion" value="{{ $proveedores->direccion }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="negrita">Teléfono:</label>
                        <div>
                            <input class="form-control" placeholder="Teléfono" name="telefono" type="text" id="telefono" value="{{ $proveedores->telefono }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="negrita">Correo:</label>
                        <div>
                            <input class="form-control" placeholder="Correo" name="correo" type="text" id="correo" value="{{ $proveedores->correo }}" readonly>
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
                                Aún no se ha cargado una imagen para este cliente
                            @endif

							
                        </div>
                    </div>

                @else

                    <div class="mb-3">
                        <label for="persona_id" class="negrita">Seleccionar Persona:</label>
                        <div>
                            <select class="form-control" name="persona_id" id="persona_id" onchange="fillPersonDetails(this)">
                                <option value="">Seleccione una persona</option>
                                @foreach ($personas as $persona)
                                    <option value="{{ $persona->id }}">{{ $persona->nombre }} {{ $persona->apellido_paterno }} {{ $persona->apellido_materno }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="negrita">Nombre:</label>
                        <div>
                            <input class="form-control" placeholder="Nombre" name="nombre" type="text" id="nombre" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="apellido_paterno" class="negrita">Apellido Paterno:</label>
                        <div>
                            <input class="form-control" placeholder="Apellido paterno" name="apellido_paterno" type="text" id="apellido_paterno" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="apellido_materno" class="negrita">Apellido Materno:</label>
                        <div>
                            <input class="form-control" placeholder="Apellido materno" name="apellido_materno" type="text" id="apellido_materno" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="negrita">Dirección:</label>
                        <div>
                            <input class="form-control" placeholder="Dirección" name="direccion" type="text" id="direccion" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="negrita">Teléfono:</label>
                        <div>
                            <input class="form-control" placeholder="Teléfono" name="telefono" type="text" id="telefono" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="negrita">Correo:</label>
                        <div>
                            <input class="form-control" placeholder="Correo" name="correo" type="text" id="correo" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="persona_img" class="negrita">Imagen Persona:</label>
                        <div>
                            <img id="persona_img" src="" alt="Imagen Persona" style="max-width: 200px; display: none;">
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

<script>
    function fillPersonDetails(select) {
        var personas = @json($personas);
        var selectedPersona = personas.find(persona => persona.id == select.value);

        if (selectedPersona) {
            document.getElementById('nombre').value = selectedPersona.nombre;
            document.getElementById('apellido_paterno').value = selectedPersona.apellido_paterno;
            document.getElementById('apellido_materno').value = selectedPersona.apellido_materno;
            document.getElementById('direccion').value = selectedPersona.direccion;
            document.getElementById('telefono').value = selectedPersona.telefono;
            document.getElementById('correo').value = selectedPersona.correo;

            var imgElement = document.getElementById('persona_img');
            if (selectedPersona.img) {
                imgElement.src = '{{ asset('uploads/') }}/' + selectedPersona.img;
                imgElement.style.display = 'block'; // Mostrar la imagen
            } else {
                imgElement.src = ''; // Limpiar la imagen si no hay ninguna
                imgElement.style.display = 'none'; // Ocultar el elemento de imagen
            }
        } else {
            // Limpiar todos los campos si no se selecciona ninguna persona
            document.getElementById('nombre').value = '';
            document.getElementById('apellido_paterno').value = '';
            document.getElementById('apellido_materno').value = '';
            document.getElementById('direccion').value = '';
            document.getElementById('telefono').value = '';
            document.getElementById('correo').value = '';
            document.getElementById('persona_img').src = '';
            document.getElementById('persona_img').style.display = 'none';
        }
    }
</script>