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

                                    <form method="POST" action="{{ route('admin/ventas/store') }}" role="form" enctype="multipart/form-data">
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Crear Venta</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form>
                                              <div class="modal-body">
                                                  
                                                    <input type="hidden" name="_method" value="PUT">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    @include('admin.ventas.frm.prt')
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
                                                <thead>
                                                    <tr>
                                                      <th>fecha_venta</th>
                                                      <th>id_proveedor</th>
                                                      <th>descripcion</th>
                                                      <th>cantidad</th>
                                                      <th>precio</th>
                                                      <th>id_producto</th>
                                                      <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                          @foreach($ventas as $venta)
                                          <tr>
                                            <td class="v-align-middle">{{$venta->fecha_venta}}</td>
                                            <td class="v-align-middle">{{$venta->id_proveedor}}</td>
                                            <td class="v-align-middle">{{$venta->descripcion}}</td>
                                            <td class="v-align-middle">{{$venta->cantidad}}</td>
                                            <td class="v-align-middle">{{$venta->precio}}</td>
                                            <td class="v-align-middle">{{$venta->id_producto}}</td>
                                            <td class="v-align-middle">

                                              <form action="{{ route('admin/ventas/eliminar',$venta->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">

                                                <input type="hidden" name="_method" value="PUT">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                                                <a href="{{ route('admin/ventas/detalles',$venta->id) }}" class="btn btn-dark">Detalles</a>                                         
                                                <a href="{{ route('admin/ventas/actualizar',$venta->id) }}" class="btn btn-primary">Editar</a>          
                                                <button type="submit" class="btn btn-danger">Eliminar</button>

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
