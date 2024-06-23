<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                @if (!empty($empleados->id))

                    <div class="mb-3">
                        <label for="id_persona" class="negrita">Persona:</label>
                        <div>
                            <select name="id_persona" class="form-control @error('id_persona') is-invalid @enderror" value="{{ old('id_persona') }}" id="id_persona" required>
                                <option value="" disabled selected>Selecciona una persona</option>
                                    @foreach($personas as $persona)
                                        <option value="{{$persona->id}}">{{$persona->nombre}} {{$persona->apellido_paterno}} {{$persona->apellido_materno}}</option>
                                    @endforeach 
                            </select>           
                            {!! $errors->first('id_persona', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_puesto" class="negrita">Puesto:</label>
                        <select name="id_puesto" class="form-control @error('id_puesto') is-invalid @enderror" value="{{ old('id_puesto') }}" id="id_puesto" required>
                                    <option value="" disabled selected>Selecciona una puesto</option>
                                    @foreach($puestos as $puesto)
                                        <option value="{{$puesto->id}}">{{$puesto->descripcion}}</option>
                                    @endforeach 
                        </select>           
                        {!! $errors->first('id_puesto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                   
                @else
                    
                    <div class="mb-3">
                        <label for="id_persona" class="negrita">Persona:</label>
                        <div>
                            <select name="id_persona" class="form-control @error('id_persona') is-invalid @enderror" value="{{ old('id_persona') }}" id="id_persona" required>
                                    <option value="" disabled selected>Selecciona una persona</option>
                                    @foreach($personas as $persona)
                                    <option value="{{$persona->id}}">{{$persona->nombre}} {{$persona->apellido_paterno}} {{$persona->apellido_materno}}</option>
                                    @endforeach 
                            </select>           
                            {!! $errors->first('id_persona', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_puesto" class="negrita">Puesto:</label>
                        <select name="id_puesto" class="form-control @error('id_puesto') is-invalid @enderror" value="{{ old('id_puesto') }}" id="id_puesto" required>
                                    <option value="" disabled selected>Selecciona una puesto</option>
                                    @foreach($puestos as $puesto)
                                        <option value="{{$puesto->id}}">{{$puesto->descripcion}}</option>
                                    @endforeach 
                        </select>           
                        {!! $errors->first('id_puesto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    
                @endif

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('admin/empleados') }}" class="btn btn-warning">Cancelar</a> 
                <br><br>
            </div>
        </section>
    </div>
</div>
