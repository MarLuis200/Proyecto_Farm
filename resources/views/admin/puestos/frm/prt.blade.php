<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">
                @if (!empty($puestos->id))
                    <div class="mb-3">
                        <label for="id" class="negrita">Id:</label>
                        <div>
                            <input class="form-control" placeholder="id" required name="id" type="text" id="id" value="{{ $puestos->id }}">
                        </div>
                    </div>

                    
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="negrita">Descripcion:</label>
                        <div>
                            <input class="form-control" placeholder="#" required name="descripcion" type="text" id="descripcion" value="{{ $puestos->descripcion }}">
                        </div>
                    </div>
                @else
                    <div class="mb-3">
                        <label for="id" class="negrita">Id:</label>
                        <div>
                            <input class="form-control" placeholder="id" required name="id" type="text" id=id>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="negrita">Descripcion:</label>
                        <div>
                            <input class="form-control" placeholder="descripcion" required name="descripcion" type="text" id="descripcion">
                        </div>
                    </div>

                @endif

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('admin/puestos') }}" class="btn btn-warning">Cancelar</a> 
                <br><br>
            </div>
        </section>
    </div>
</div>
