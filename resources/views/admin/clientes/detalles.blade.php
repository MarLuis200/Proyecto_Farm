<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
      <link rel="icon" href="/img/hola.ico" />

    <meta name="theme-color" content="#000000" />

    <title>Detalles</title>

    <!-- Bootstrap -->
    @vite(['resources/js/app.js'])

  </head>

  <body>

    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img src="/img/logo1.jpg" class="img-fluid" width="50" height="50" alt="Nombre de la Marca"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
              <a class="nav-link" href="https://nubecolectiva.com">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://blog.nubecolectiva.com" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>

      <div class="container mt-5 mb-5">

          <div class="row">

            <div class="col-md-12">

              <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <!-- Logo -->
                  <div class="logo">
                     <br><br><h1>Clientes</h1>
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
                          <li><a href="{{ route('admin/clientes') }}">Clientes</a></li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="page-content">
        <div class="row">

          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">

              <ul class="list-group">
                  <li class="list-group-item">
                    <a href="{{ route('admin/clientes') }}">Clientes</a>
                  </li>
                  <li class="list-group-item">
                    Opción 1
                  </li>
                  <li class="list-group-item">
                    Opción 2
                  </li>
                  <li class="list-group-item">
                    Opción 3
                  </li>
                  <li class="list-group-item">
                    Opción 4
                  </li>
                  <li class="list-group-item">
                    Opción 5
                  </li>
                  <li class="list-group-item">
                    Opción 6
                  </li>
                  <li class="list-group-item">
                    Opción 7
                  </li>
                  <li class="list-group-item">
                    Opción 8
                  </li>
                  <li class="list-group-item">
                    Opción 9
                  </li>
                  <li class="list-group-item">
                    Opción 10
                  </li>
              </ul>
            </div>
          </div>

            <div class="col-md-10">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin/clientes') }}">Clientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $clientes->nombre }}</li>
          </ol>
        </nav>

        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-body">

                  @if(Session::has('message'))
                    <div class="alert alert-primary" role="alert">
                      {{ Session::get('message') }}
                    </div>
                  @endif

                    <p class="h5">Nombre:</p>
                    <p class="h6 mb-3">{{ $clientes->nombre }}</p>

                    <p class="h5">Apellido Paterno:</p>
                    <p class="h6 mb-3">{{ $clientes->apellido_paterno }}</p>
                      <p class="h5">Apellido Materno:</p>
                      <p class="h6 mb-3">{{ $clientes->apellido_materno }}</p>
                      <p class="h5">Dirección</p>
                      <p class="h6 mb-3">{{ $clientes->direccion}}</p>
                      <p class="h5">Telefono:</p>
                      <p class="h6 mb-3">{{ $clientes->telefono}}</p>
                    <p class="h5">Correo:</p>
                    <p class="h6 mb-3">{{ $clientes->correo }}</p>

                    <p class="h5">Imagen:</p>
                    <img src="../../../uploads/{{ $clientes->img }}" class="img-fluid" width="20%">

                </div>

                <a href="{{ route('admin/clientes') }}" class="btn btn-warning mt-3">Volver</a>

              </div>

          </div>

        </div>

      </div>

      </div>

        </div>

            </div>

          </div>

          <hr>



    <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado Por <a  target="_blank">Equipo Net Team</a>
      </div>
    </footer>

    <script type="text/javascript">

        function confirmarEliminar()
        {
        var x = confirm("Estas seguro de Eliminar?");
        if (x)
          return true;
        else
          return false;
        }

    </script>

  </body>
</html>
