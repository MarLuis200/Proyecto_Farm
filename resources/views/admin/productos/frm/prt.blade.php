
<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<div class="panel-body">

				@if ( !empty ( $productos->id) )

					<div class="mb-3">
						<label for="id" class="negrita">Id:</label>
						<div>
							<input class="form-control" placeholder="id" required="required" name="nombre" type="text" id="id" value="{{ $productos->id}}">
						</div>
					</div>

					<div class="mb-3">
						<label for="nombre" class="negrita">Nombre:</label>
						<div>
							<input class="form-control" placeholder="nombre_producto" required="required" name="nombre" type="text" id="nombre" value="{{ $productos->nombre }}">
						</div>
					</div>

					<div class="mb-3">
						<label for="descripcion" class="negrita">Descripcion:</label>
						<div>
							<input class="form-control" placeholder="descripcion" required="required" name="descripcion" type="text" id="marca" value="{{ $productos->descripcion }}">
						</div>
					</div>

                    <div class="mb-3">
                        <label for="fecha_caducidad" class="negrita">Fecha Caducidad:</label>
                        <div>
                            <input class="form-control" placeholder="150" required="required" name="fecha_caducidad" type="date" id="fecha_caducidad" value="{{ $productos->fecha_caducidad }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="negrita">Precio:</label>
                        <div>
                            <input class="form-control" placeholder="40" required="required" name="precio" type="text" id="precio" value="{{ $productos->precio }}">
                        </div>
                    </div>

					<div class="mb-3">
						<label for="stock" class="negrita">Stock:</label>
						<div>
							<input class="form-control" placeholder="40" required="required" name="stock" type="text" id="stock" value="{{ $productos->stock }}">
						</div>
					</div>


					<div class="mb-3">
						<label for="img" class="negrita">Selecciona una imagen:</label>
						<div>
							<input name="img" type="file" id="img">
							<br>
							<br>

							@if ( !empty ( $productos->img) )

								<span>Imagen Actual: </span>
								<br>
								<img src="../../../uploads/{{ $productos->img }}" width="200" class="img-fluid">

							@else

								Aún no se ha cargado una imagen para este producto

							@endif

						</div>

					</div>

					@else

                    <div class="mb-3">
                        <label for="nombre" class="negrita">Nombre:</label>
                        <div>
                            <input class="form-control" placeholder="Nombre" required="required" name="nombre" type="text" id="nombre" >
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="negrita">Descripcion:</label>
                        <div>
                            <input class="form-control" placeholder="Descripcion" required="required" name="descripcion" type="text" id="descripcion" >
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_caducidad" class="negrita">Fecha Caducidad:</label>
                        <div>
                            <input class="form-control" placeholder="150" required="required" name="fecha_caducidad" type="date" id="fecha_caducidad">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="negrita">Precio:</label>
                        <div>
                            <input class="form-control" placeholder="40" required="required" name="precio" type="text" id="precio">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="negrita">Stock:</label>
                        <div>
                            <input class="form-control" placeholder="40" required="required" name="stock" type="text" id="stock">
                        </div>
                    </div>

                    
					<div class="mb-3">
						<label for="img" required="required" class="negrita">Selecciona una imagen:</label>
						<div>
							<input name="img" type="file" id="img">
						</div>
					</div>

				@endif

				<button type="submit" class="btn btn-info">Guardar</button>
				<a href="{{ route('admin.productos') }}" class="btn btn-warning">Cancelar</a>  

				<br>
				<br>

			</div>
		</section>
	</div>
</div>
