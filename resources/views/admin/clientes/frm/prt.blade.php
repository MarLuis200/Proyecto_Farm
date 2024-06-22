<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">

                @if ( !empty ( $clientes->id) )

                    <div class="mb-3">
                        <label for="persona_id" class="negrita">Seleccionar Persona:</label>
                        <div>
                            <select class="form-control" name="persona_id" id="persona_id" onchange="fillPersonDetails(this)">
                                <option value="">Seleccione una persona</option>
                                @foreach ($personas as $persona)
                                    <option value="{{ $persona->id }}" {{ $persona->id == $clientes->persona_id ? 'selected' : '' }}>{{ $persona->nombre }} {{ $persona->apellido_paterno }} {{ $persona->apellido_materno }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="negrita">Nombre:</label>
                        <div>
                            <input class="form-control" placeholder="Nombre" name="nombre" type="text" id="nombre" value="{{ $clientes->nombre }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="apellido_paterno" class="negrita">Apellido Paterno:</label>
                        <div>
                            <input class="form-control" placeholder="Apellido paterno" name="apellido_paterno" type="text" id="apellido_paterno" value="{{ $clientes->apellido_paterno }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="apellido_materno" class="negrita">Apellido Materno:</label>
                        <div>
                            <input class="form-control" placeholder="Apellido materno" name="apellido_materno" type="text" id="apellido_materno" value="{{ $clientes->apellido_materno }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="negrita">Dirección:</label>
                        <div>
                            <input class="form-control" placeholder="Dirección" name="direccion" type="text" id="direccion" value="{{ $clientes->direccion }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="negrita">Teléfono:</label>
                        <div>
                            <input class="form-control" placeholder="Teléfono" name="telefono" type="text" id="telefono" value="{{ $clientes->telefono }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="negrita">Correo:</label>
                        <div>
                            <input class="form-control" placeholder="Correo" name="correo" type="text" id="correo" value="{{ $clientes->correo }}" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="negrita">Selecciona una imagen:</label>
                        <div>
                            <input name="img" type="file" id="img">
                            <br>
                            <br>

                            @if ( !empty ( $clientes->img) )
                                <span>Imagen Actual: </span>
                                <br>
                                <img src="../../../uploads/{{ $clientes->img }}" width="200" class="img-fluid">
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
                        <label for="img" class="negrita">Selecciona una imagen:</label>
                        <div>
                            <input name="img" type="file" id="img">
                        </div>
                    </div>

                @endif

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('admin/clientes') }}" class="btn btn-warning">Cancelar</a> 

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
            document.getElementById('img').value = selectedPersona.img;

        } else {
            document.getElementById('nombre').value = '';
            document.getElementById('apellido_paterno').value = '';
            document.getElementById('apellido_materno').value = '';
            document.getElementById('direccion').value = '';
            document.getElementById('telefono').value = '';
            document.getElementById('correo').value = '';
            document.getElementById('img').value = '';

        }
    }
</script>
