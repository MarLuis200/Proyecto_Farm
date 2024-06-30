@extends('layouts.dash2')

@section('content')
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="icon" href="/img/logo_farmacia.png" />
    <meta name="theme-color" content="#000000" />
    <title>Clientes</title>
    <!-- Bootstrap -->
    @vite(['resources/js/app.js'])

</head>

<body>

<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <!-- Logo -->
                                <div class="logo">
                                    <h1>Ventas</h1>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group form">
                                            <!-- 
                                            <input type="text" class="form-control" placeholder="Buscar...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button">Buscar</button>
                                            </span>
                                            -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="navbar navbar-inverse" role="banner">
                                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation"></nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-content">
                    <div class="row"></div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-body">
                                    @if(Session::has('message'))
                                    <div class="alert alert-primary" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                    @endif
                                    
                                    <!-- Contenido de tu página -->
                                    <button type="button" class="btn btn-success mt-4 ml-3" data-toggle="modal" data-target="#exampleModal">Crear
                                    </button>

                                    <form method="POST" action="{{ route('admin.ventas.store') }}" role="form" enctype="multipart/form-data">
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Registrar Venta</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form>
                                            <div class="modal-body">
                                                  
                                                  <input type="hidden" name="_method" value="PUT">
                                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                  @include('admin.venta.frm.prt')
                                            </div>
                                          </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </form>

                                    <!-- Incluye jQuery y la librería de Bootstrap JS -->
                                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                        <section class="example mt-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="thead">
                                    <tr>
                                    <th>Id_Venta</th> 
									<th>Producto</th>
									<th>Cantidad</th>
                                    <th>Precio</th>
									<th>Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                        <td>{{ $venta->id }}</td>  
										<td>{{ $venta->nombre}}</td>
										<td>{{ $venta->cantidad }}</td>
                                        <td>$ {{$venta->precio}}</td>
										<td>$ {{ $venta->total }}</td>

                                        <td class="v-align-middle">
                                            <form action="{{ route('admin.ventas.eliminar', $venta->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
                                                @method('PUT')
                                                @csrf
                                                <a href="{{ route('admin.ventas.detalles', $venta->id) }}" class="btn btn-dark">Detalles</a>
                                                <a href="{{ route('admin.ventas.actualizar', $venta->id) }}" class="btn btn-primary">Editar</a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete{{$venta->id}}">
                                                    Eliminar
                                                </button>

                                                <!-- Modal de Confirmación de Eliminación -->
                                                <div class="modal fade" id="confirmDelete{{$venta->id}}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel{{$venta->id}}" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="confirmDeleteLabel{{$venta->id}}">Confirmar Eliminación</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ¿Estás seguro de que deseas eliminar este producto?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="text-right"><strong>Ganancia:</strong></td>
                                        <td colspan="2">${{ number_format($totalNeto, 2) }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                {{--!! $ventas->withQueryString()->links() !!--}}
            </div>
        </div>
    </div>

    <footer class="text-muted mt-3 mb-3">
        <div align="center">
            Desarrollado Por <a target="_blank">Equipo Net Team</a>
        </div>
    </footer>

</body>
</html>
@endsection