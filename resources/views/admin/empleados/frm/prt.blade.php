<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                @if (!empty($empleados->id))
                    <div class="mb-3">
                        <label for="id_empleado" class="negrita">Id_Empleado:</label>
                        <div>
                            <input class="form-control" placeholder="id_empleado" required name="id_empleado" type="text" id="id_empleado" value="{{ $empleados->id_empleado }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_persona" class="negrita">Id_Persona:</label>
                        <div>
                            <input class="form-control" placeholder="id_persona" required name="id_persona" type="text" id="id_persona" value="{{ $empleados->id_persona }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_puesto" class="negrita">Id_Puesto:</label>
                        <div>
                            <input class="form-control" placeholder="id_puesto" required name="id_puesto" type="text" id="id_puesto" value="{{ $empleados->id_puesto }}">
                        </div>
                    </div>

                   
                @else
                    <div class="mb-3">
                        <label for="id_empleado" class="negrita">Id_Empleado:</label>
                        <div>
                            <input class="form-control" placeholder="id_empleado" required name="id_empleado" type="text" id="id_empleado">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_persona" class="negrita">Id_Persona:</label>
                        <div>
                            <input class="form-control" placeholder="id_persona" required name="id_persona" type="text" id="id_persona">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_puesto" class="negrita">Id_Puesto:</label>
                        <div>
                            <input class="form-control" placeholder="id_puesto" required name="id_puesto" type="text" id="id_puesto">
                        </div>
                    </div>

                    
                @endif

                <button type="submit" class="btn btn-info">Guardar</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                <br><br>
            </div>
        </section>
    </div>
</div>
