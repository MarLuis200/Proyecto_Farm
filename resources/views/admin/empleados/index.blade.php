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
    <title>Productos</title>
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
                                <h1>Empleados</h1>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group form">
                                       <!-- Topbar Search -->
                                       <form id="globalSearchForm" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" id="searchInput" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="bx bx-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="navbar navbar-inverse" role="banner">
                                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{ route('admin.empleados') }}">Empleados</a></li>
                                    </ul>
                                </nav>
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

                                <form method="POST" action="{{ route('admin.empleados.store') }}" role="form" enctype="multipart/form-data">
                                
                                                            <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Registrar Empleados</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form>
                                          <div class="modal-body">
                                              
                                                <input type="hidden" name="_method" value="PUT">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                @include('admin.empleados.frm.prt')
                                                
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
                                        <table id="tablaempleados" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id_empleado</th>
                                                    <th>Persona</th>
                                                    <th>Puesto</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($empleados as $emple)
                                                    <tr>
                                                        <td class="v-align-middle">{{$emple->id}}</td>
                                                        <td class="v-align-middle">{{$emple->nombre}} {{$emple->apellido_paterno}} {{$emple->apellido_materno}}</td>
                                                        <td class="v-align-middle">{{$emple->descripcion}}</td>
                                                    
                                                        <td class="v-align-middle">
                                                            <form action="{{ route('admin.empleados.eliminar', $emple->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
                                                                @method('PUT')
                                                                @csrf
                                                                <a href="{{ route('admin.empleados.detalles', $emple->id) }}" class="btn btn-dark">Detalles</a>
                                                                <a href="{{ route('admin.empleados.actualizar', $emple->id) }}" class="btn btn-primary">Editar</a>
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete{{$emple->id}}">
                                                                    Eliminar
                                                                </button>

                                                                <!-- Modal de Confirmación de Eliminación -->
                                                                <div class="modal fade" id="confirmDelete{{$emple->id}}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel{{$emple->id}}" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="confirmDeleteLabel{{$emple->id}}">Confirmar Eliminación</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Estás seguro de que deseas eliminar este empleado?
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
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
</div>

<footer class="text-muted mt-3 mb-3">
    <div align="center">
        Desarrollado Por Equipo Net Team
    </div>
</footer>

<script type="text/javascript">

    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#tablaempleados tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>

<style>
    .navbar-search .form-control {
        width: 400px; /* Ajusta el tamaño según sea necesario */
    }
</style>
</script>

</body>
</html> 
@endsection           