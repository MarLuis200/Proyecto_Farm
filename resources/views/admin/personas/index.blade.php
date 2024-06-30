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

    <style>
        .navbar-search .form-control {
            width: 400px; /* Ajusta el tamaño según sea necesario */
        }
    </style>
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
                                    <h1>Personas</h1>
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

                                    <form method="POST" action="{{ route('admin.personas.store') }}" role="form" enctype="multipart/form-data">
                                    
                                                                <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Crear Persona</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form>
                                              <div class="modal-body">
                                                  
                                                    <input type="hidden" name="_method" value="PUT">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    @include('admin.personas.frm.prt')
                                              </div>
                                          </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </form>

                                    <!-- Incluye jQuery y la librería de Bootstrap JS -->
                                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                                    <section class="example mt-4">
                                        <div class="row" id="personasContainer">
                                            @foreach($personas as $person)
                                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 persona-card">
                                                <div class="card">
                                                    <img src="{!! asset('uploads/' . $person->img) !!}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Imagen de {{$person->nombre}}">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{$person->nombre}} {{$person->apellido_paterno}} {{$person->apellido_materno}}</h5>
                                                        <p class="card-text">Dirección: {{$person->direccion}}</p>
                                                        <p class="card-text">Teléfono: {{$person->telefono}}</p>
                                                        <p class="card-text">Correo: {{$person->correo}}</p>
                                                        <div class="text-center">
                                                            <a href="{{ route('admin.personas.detalles', $person->id) }}" class="btn btn-dark">Detalles</a>
                                                            
                                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete{{$person->id}}">
                                                                Eliminar
                                                            </button>

                                                            <!-- Modal de Confirmación de Eliminación -->
                                                            <div class="modal fade" id="confirmDelete{{$person->id}}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel{{$person->id}}" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="confirmDeleteLabel{{$person->id}}">Confirmar Eliminación</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            ¿Estás seguro de que deseas eliminar esta persona?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                            <form action="{{ route('admin.personas.eliminar', $person->id) }}" method="POST" style="display: inline-block;">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
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
            Desarrollado Por <a target="_blank">Equipo Net Team</a>
        </div>
    </footer>

    <script type="text/javascript">
    function confirmarEliminar() {
        var x = confirm("¿Estás seguro de Eliminar?");
        if (x)
            return true;
        else
            return false;
    }
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#personasContainer .persona-card').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
    </script>
</body>
</html>
@endsection
