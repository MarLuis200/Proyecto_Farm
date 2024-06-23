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
                                    <h1>Clientes</h1>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group form">
                                           
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

                                    <form method="POST" action="{{ route('admin.clientes.store') }}" role="form" enctype="multipart/form-data">
                                    
                                                                <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Crear Cliente</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form>
                                              <div class="modal-body">
                                                  
                                                    <input type="hidden" name="_method" value="PUT">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    @include('admin.clientes.frm.prt')
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
                                        <div class="row">
                                            @foreach($clientes as $cli)
                                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                                <div class="card">
                                                    <img src="{!! asset('uploads/' . $cli->img) !!}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Imagen de {{$cli->nombre}}">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{$cli->nombre}} {{$cli->apellido_paterno}} {{$cli->apellido_materno}}</h5>
                                                        <p class="card-text">Dirección: {{$cli->direccion}}</p>
                                                        <p class="card-text">Teléfono: {{$cli->telefono}}</p>
                                                        <p class="card-text">Correo: {{$cli->correo}}</p>
                                                        <div class="text-center">
                                                            <a href="{{ route('admin.clientes.detalles', $cli->id) }}" class="btn btn-dark">Detalles</a>
                                                            
                                                            <form action="{{ route('admin.clientes.eliminar', $cli->id) }}" method="POST" style="display: inline-block;">
                                                                @csrf
                                                                @method('PUT')
                                                                <button type="submit" class="btn btn-danger" onclick="return confirmarEliminar()">Eliminar</button>
                                                            </form>
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
</script>
</body>
</html>
@endsection
