<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="shortcut icon" href="http://nubecolectiva.com/favicon.ico" />
    <meta name="theme-color" content="#000000" />
    <title>Inventario</title>
    <!-- Bootstrap -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary text-white text-center">
        <div class="container">
            <img src="/img/logo_MultiFarma.png" class="img-fluid" width="180" height="180" alt="Nombre de la Marca">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="logo">
                                    <br><br>
                                    <h1>Inventario</h1>
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
                                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{ route('admin/inventario') }}">Inventario</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-primary" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                @endif
                                <a href="{{ route('admin/inventario/crear') }}" class="btn btn-success mt-4 ml-3">Crear</a>
                                <section class="example mt-4">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Existencia</th>
                                                    <th>Fecha Caducidad</th>
                                                    <th>No Compra</th>
                                                    <th>Clave Proveedor</th>
                                                    <th>Imagen</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($inventario as $prov)
                                                <tr>
                                                    <td class="v-align-middle">{{ $prov->nombre }}</td>
                                                    <td class="v-align-middle">{{ $prov->existencia }}</td>
                                                    <td class="v-align-middle">{{ $prov->fecha_caducidad }}</td>
                                                    <td class="v-align-middle">{{ $prov->no_compra }}</td>
                                                    <td class="v-align-middle">{{ $prov->clave_proveedor }}</td>
                                                    <td class="v-align-middle">
                                                        <img src="{{ asset("uploads/$prov->img") }}" width="30" class="img-responsive" alt="Imagen">
                                                    </td>
                                                    <td class="v-align-middle">
                                                        <form action="{{ route('admin/inventario/eliminar', $prov->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="{{ route('admin/inventario/detalles', $prov->id) }}" class="btn btn-dark">Detalles</a>
                                                            <a href="{{ route('admin/inventario/actualizar', $prov->id) }}" class="btn btn-primary">Editar</a>
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
        <hr>
    </div>
    <footer class="text-muted mt-3 mb-3">
        <div align="center">
            Desarrollado por equipo Net Team
        </div>
    </footer>
    <script type="text/javascript">
        function confirmarEliminar() {
            return confirm("¿Estás seguro de eliminar?");
        }
    </script>
</body>
</html>
